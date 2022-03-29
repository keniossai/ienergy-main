<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homepage(){
        $posts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->limit(6)->get();
        $firstPosts = $posts->splice(0, 1);
        $lastPosts = $posts->splice(0, 2);
        $trendingPosts = $posts->splice(0, 3);

        $moreNews = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(14)->get();
        $moreView = $moreNews->splice(4, 10);

        $popularNews = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(26)->get();
        $popularPosts = $popularNews->splice(14, 6);
        $secondPosts = $popularNews->splice(14, 6);

        // return $lastPosts;

        $recentPosts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(100);
        return view('pages.homepage', compact(['posts', 'recentPosts', 'firstPosts', 'lastPosts', 'moreView', 'trendingPosts', 'popularPosts', 'secondPosts']));
    }


    public function about(){

        return view('pages.about');
    }
    public function newsdetails($slug){
        $post = Post::with('category', 'user')->where('slug', $slug)->first();
        $posts = Post::with('category', 'user')->inRandomOrder()->limit(5)->get();

        $categories = Category::all();
        $tags = Tag::all();
        
        if($post){
            return view('pages.newsdetails', compact(['post', 'posts', 'categories', 'tags']));
        }else{
            return redirect('/');
        }
    }
    public function latestnews(){

        return view('pages.latestnews');
    }
    public function region(){

        return view('pages.region');
    }
    public function contact(){

        return view('pages.contact');
    }
    public function exclusive(){

        return view('pages.exclusive');
    }
    public function africa(){

        return view('pages.africa');
    }
    public function development(){

        return view('pages.development');
    }
    public function faq(){

        return view('pages.faq');
    }
    public function energyfinance(){

        return view('pages.energyfinance');
    }
    public function nigeria(){

        return view('pages.nigeria');
    }
    public function gas(){

        return view('pages.gas');
    }
    public function ep(){

        return view('pages.ep');
    }
    public function opinion(){

        return view('pages.opinion');
    }
    public function insights(){

        return view('pages.insights');
    }
    public function people(){

        return view('pages.people');
    }
}
