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
     *
     */
    private $lang;

    public function __construct()
    {
        $this->lang = App::getLocale();
    }


    public function getProperties()
    {
        $pagename='properties';
        $urban_resorts = Post::join('post_category', 'posts.id', '=', 'post_category.post_id')->where('post_category.category_id', 1)->select('posts.*')->get();
        $coastal_resorts = Post::join('post_category', 'posts.id', '=', 'post_category.post_id')->where('post_category.category_id', 2)->select('posts.*')->get();
        $gated_communities = Post::join('post_category', 'posts.id', '=', 'post_category.post_id')->where('post_category.category_id', 3)->select('posts.*')->get();
        $costal_retreats = Post::join('post_category', 'posts.id', '=', 'post_category.post_id')->where('post_category.category_id', 4)->select('posts.*')->get();

        return view('sections.properties-cat', compact('pagename','urban_resorts', 'gated_communities', 'coastal_resorts', 'costal_retreats'));
    }

    public function getSingleProperties($slug)
    {
        $pagename='properties';
        $category = CategoryTranslation::where('slug', $slug)->first();
        $props = Post::join('posts_translations','posts.id','=','posts_translations.post_id')->join('post_category', 'posts.id', '=', 'post_category.post_id')->where('post_category.category_id', $category->category_id)->get();
       //dd($props);
        return view('sections.inner-prop-cat', compact('pagename','props'));

    }

    public function getInnerProperties($cat, $slug)
    {
        //var_dump($slug);
        $pagename='properties';
        $PropertyDetails = Post::join('posts_translations', 'posts.id', '=', 'posts_translations.post_id')
            ->where('posts.post_status', 'publish')
            ->where('posts.post_type', 'Properties')
            ->where('posts_translations.slug', $slug)
            ->first();


        $categories = Category::join('category_translations', 'category_translations.category_id', '=', 'category.id')
            ->Where('category_translations.slug', '<>', $cat)
            ->Where('category.type', 'properties')
            ->Where('category_translations.locale', $this->lang)->get();


        $related_prop = Post::join('post_category', 'post_category.post_id', '=', 'posts.id')
            ->where('post_category.category_id', $PropertyDetails->category[0]->id)->get();

        if ($PropertyDetails->category[0]->id == 1) {
            $special_class = 'black';
        } elseif ($PropertyDetails->category[0]->id == 2) {
            $special_class = 'white';

        } else {
            $special_class = 'ofwhite';
        }
        //$special_class = 'white';

        $Media = Media::join('multiple_media', 'multiple_media.media_id', '=', 'media.id')->where('multiple_media.post_id', $PropertyDetails->id)->get();

        return view('sections.properties', compact('pagename','special_class', 'PropertyDetails', 'Media', 'categories', 'related_prop'));
    }


}
