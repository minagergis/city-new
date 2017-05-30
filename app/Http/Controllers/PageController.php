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
        $mainSlider = Post::where('post_status', 'publish')->where('post_type', 'slider')->where('extra', '{"main":"1"}')->first();
        $slider = Post::where('post_status', 'publish')->where('post_type', 'slider')->where('extra', '{"main":"0"}')->orderby('id', 'DESC')->get();

        return view('sections.home', compact('slider', 'mainSlider'));
    }

    public function getAbout($slug)
    {

        $about = Post::where('post_status', 'publish')->where('post_type', 'about')->where('id', 17)->first();
        return view('sections.about', compact('about'));
    }
    public function getTeam()
    {

        $one_one = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 19)->first();

        $two_one = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 20)->first();
        $two_two = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 21)->first();
        $two_three = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 22)->first();

        $three_one = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 23)->first();
        $three_two = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 24)->first();
        $three_three = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 25)->first();
        $three_four = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 26)->first();

        $four_one = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 27)->first();
        $four_two = Post::where('post_status', 'publish')->where('post_type', 'team')->where('id', 28)->first();

        return view('sections.boards', compact('one_one','two_one','two_two','two_three','three_one','three_two','three_three','three_four','four_one','four_two'));
    }

    public function getGallery($slug)
    {
        $gallery = Post::join('post_category', 'post_category.post_id', '=', 'posts.id')
            ->join('category_translations', 'category_translations.category_id', '=', 'post_category.category_id')
            ->where('category_translations.slug', $slug)
            ->get();
        return view('sections.gallery', compact('gallery'));
    }

    public function getGalleryInner($id)
    {

        $Media = Media::join('multiple_media', 'multiple_media.media_id', '=', 'media.id')->where('multiple_media.post_id', $id)->get();
        // dd($Media);
        $gallary = Post::where('id', $id)->first();
        return view('sections.gallaryInner', compact('Media', 'gallary'));
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
