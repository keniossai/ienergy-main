<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Session;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homepage(){
        $posts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->limit(6)->get();
        $firstPosts = $posts->splice(0, 1);
        $lastPosts = $posts->splice(0, 2);
        $trendingPosts = $posts->splice(0, 3);

        $moreNews = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(9)->get();
        $moreView = $moreNews->splice(4, 9);

        $popularNews = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(26)->get();
        $popularPosts = $popularNews->splice(14, 6);
        $secondPosts = $popularNews->splice(14, 6);

        $tags = Tag::all();

        // return $lastPosts;

        $recentPosts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(100);
        return view('pages.homepage', compact(['posts', 'tags', 'recentPosts', 'firstPosts', 'lastPosts', 'moreView', 'trendingPosts', 'popularPosts', 'secondPosts']));
    }


    public function about(){
        // $user = User::first();

        return view('pages.about');
    }

    public function newsdetails($slug){
        $post = Post::with('category', 'user')->where('slug', $slug)->first();
        $posts = Post::with('category', 'user')->inRandomOrder()->limit(5)->get();
        $relatedPost = Post::with('category', 'user')->orderBy('created_at', 'DESC')->limit(16)->get();
        $relatedPosts = $relatedPost->splice(4, 8);
        $popularNews = $relatedPost->splice(4, 4);

        $categories = Category::all();
        $tags = Tag::all();
        
        return view('pages.newsdetails', compact(['post', 'posts', 'categories', 'tags', 'relatedPosts', 'popularNews']));
        
    }
    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        $posts = Post::where('category_id', $category->id)->paginate(50);

        $leftSidePost = $posts->splice(0, 20);
        $rightSidePost = $posts->splice(0, 20);
        
        return view('pages.latestnews', compact(['category', 'leftSidePost', 'rightSidePost' ]));
    }
    public function region(){

        return view('pages.region');
    }
    public function contact(){

        return view('pages.contact');
    }

    public function send_message(Request $request){

        $this->validate($request, [
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
            'subject' => 'required|max:255',
            'message' => 'required|max:200',

        ]);

        $contact = Contact::create($request->all());

        Session::flash('message-send', 'Message sent successfully');
        return redirect()->back();
    }

    
    
}
