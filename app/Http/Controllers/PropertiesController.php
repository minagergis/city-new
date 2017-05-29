<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\LaravelLocalization;
use Modules\Admin\Models\Category;
use Modules\Admin\Models\CategoryTranslation;
use Modules\Admin\Models\Media;
use Modules\Admin\Models\PostCategory;
use Modules\Admin\Models\Post;


class PropertiesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    public function getProperties()
    {
        $lang =App::getLocale();
        $urban_resorts=Post::join('post_category','posts.id','=','post_category.post_id')->where('post_category.category_id',1)->select('posts.*')->get();
        $coastal_resorts=Post::join('post_category','posts.id','=','post_category.post_id')->where('post_category.category_id',2)->select('posts.*')->get();
        $gated_communities=Post::join('post_category','posts.id','=','post_category.post_id')->where('post_category.category_id',3)->select('posts.*')->get();
        $costal_retreats=Post::join('post_category','posts.id','=','post_category.post_id')->where('post_category.category_id',4)->select('posts.*')->get();
        
        return view('sections.properties-cat',compact('urban_resorts','gated_communities','coastal_resorts','costal_retreats'));
    }
    public function getSingleProperties($slug)
    {
        $category=CategoryTranslation::where('slug',$slug)->first();
        $props=Post::join('post_category','posts.id','=','post_category.post_id')->where('post_category.category_id',$category->category_id)->paginate(5);
        return view('sections.inner-prop-cat',compact('props'));

    }
    public function getInnerProperties($cat,$slug)
    {
        $PropertyDetails = Post::join('posts_translations','posts.id','=','posts_translations.post_id')
            ->where('posts.post_status', 'publish')
            ->where('posts.post_type', 'Properties')
            ->where('posts_translations.slug', $slug)
            ->first();
        $Media=Media::join('multiple_media','multiple_media.media.id','=','media.id')->where('multiple_media.post_id',$PropertyDetails->id)->get();

        $special_class='ofwhite';
        return view('sections.properties',compact('special_class','PropertyDetails','Media'));
    }


}
