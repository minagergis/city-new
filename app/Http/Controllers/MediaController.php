<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostTranslation;

class MediaController extends Controller
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
    public function getMagazine()
    {
        $pagename='media';
        /*$posts = Post::where('post_status', 'publish')->where('post_type', 'post')->paginate(10);
        $recent_posts = Post::where('post_status', 'publish')->where('post_type', 'post')->orderby('id', 'DESC')->take(5)->get();
        $categories = Category::all();*/

        return view('sections.magazine',compact('pagename'));
    }
    
    public function getSingleBlog($id)
    {
        $post = Post::find($id);

        if(!count($post) > 0) {
            abort(404);
        }
        
        $recent_posts = Post::where('post_status', 'publish')->where('post_type', 'post')->orderby('id', 'DESC')->take(5)->get();
        $categories = Category::all();

        return view('sections.single_blog', compact('post', 'recent_posts', 'categories'));
    }
}
