<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Modules\Admin\Models\Category;

use Illuminate\Http\Request;
use Modules\Admin\Models\Media;
use Modules\Admin\Models\PostCategory;
use Modules\Admin\Models\Post;


class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHome()
    {
         $slider = Post::where('post_status', 'publish')->where('post_type', 'slider')->orderby('id', 'DESC')->get();

        return view('sections.home',compact('slider'));
    }

    public function getAbout($slug)
    {
        //$layout='boards';
        $layout = 'mission-vision';
        return view('sections.about', compact('layout'));
    }

    public function getGallery($slug)
    {
        $gallery = Post::join('post_category', 'post_category.post_id', '=', 'posts.id')
            ->join('category_translations', 'category_translations.category_id', '=', 'post_category.category_id')
            ->where('category_translations.slug', $slug)
            ->get();
        return view('sections.gallery',compact('gallery'));
    }
    public function getGalleryInner($id)
    {
        
        $Media = Media::join('multiple_media', 'multiple_media.media_id', '=', 'media.id')->where('multiple_media.post_id', $id)->get();
       // dd($Media);
        $gallary=Post::where('id',$id)->first();
        return view('sections.gallaryInner',compact('Media','gallary'));
    }

    public function getAwards()
    {
        $awards = Category::where('type', 'awards')->get();
        foreach ($awards as $award) {
            $award->posts = Post::join('post_category', 'posts.id', '=', 'post_category.post_id')->where('post_category.category_id', $award->id)->select('posts.*')->get();

        }
        return view('sections.awards', compact('awards'));
    }


}
