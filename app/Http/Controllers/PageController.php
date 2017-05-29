<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Category;

use Illuminate\Http\Request;
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
        // $slider = Post::where('post_status', 'publish')->where('post_type', 'slider')->orderby('id', 'DESC')->take(5)->get();
        
        // $team = Post::where('post_status', 'publish')->where('post_type', 'team')->orderby('id', 'DESC')->take(9)->get();
        
        // $testimonials = Post::where('post_status', 'publish')->where('post_type', 'testimonial')->orderby('id', 'DESC')->take(6)->get();
        
        // $clients = Post::where('post_status', 'publish')->where('post_type', 'client')->orderby('id', 'DESC')->take(6)->get();
        
        // $portfolio = Post::where('post_status', 'publish')->where('post_type', 'portfolio')->orderby('id', 'DESC')->take(12)->get();
        
        // $recent_posts = Post::where('post_status', 'publish')->where('post_type', 'post')->orderby('id', 'DESC')->take(5)->get();

        return view('sections.home');
    }
    
    public function getAbout($slug)
    {
        //$layout='boards';
        $layout='mission-vision';
        return view('sections.about',compact('layout'));
    }

    public function getGallery()
    {
       // $gallery = Post::where('post_status', 'publish')->where('post_type', 'gallery')->take(15)->paginate();

        return view('sections.gallery');
    }
    public function getAwards()
    {
        //$gallery = Post::where('post_status', 'publish')->where('post_type', 'gallery')->take(15)->paginate();

        return view('sections.awards');
    }
    public function getProperties()
    {
        $urban_resorts=Post::join('post_category','posts.id','=','post_category.post_id')->where('post_category.category_id',1)->get();
        $coastal_resorts=PostCategory::with('post')->where('category_id', 2)->groupBy('post_id')->get();
        $gated_communities=PostCategory::with('post')->where('category_id', 3)->groupBy('post_id')->get();
        $costal_retreats=PostCategory::with('post')->where('category_id', 4)->groupBy('post_id')->get();
      
        return view('sections.properties-cat',compact('urban_resorts','gated_communities','coastal_resorts','costal_retreats'));
    }
    public function getSingleProperties($slug)
    {
        //$gallery = Post::where('post_status', 'publish')->where('post_type', 'gallery')->take(15)->paginate();

        return view('sections.properties');
    }

 
}
