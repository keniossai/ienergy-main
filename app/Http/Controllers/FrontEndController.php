<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Post;
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

        $recentPosts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(200);
        return view('pages.homepage', compact(['posts', 'tags', 'recentPosts', 'firstPosts', 'lastPosts', 'moreView', 'trendingPosts', 'popularPosts', 'secondPosts']));
    }


    public function about(){

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

    
    // News category view controller 
    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        if($category){
            $posts = Post::where('category_id', $category->id)->paginate(9);
        }else{
            return redirect()->route('homepage');
        }

        return view('pages.categorynews', compact(['category', 'posts']));
    }

    // News tag view controller 
    public function tag($slug){
        $tag = Tag::where('slug', $slug)->first();
        if($tag){
            $posts = $tag->posts()->orderBy('created_at', 'desc')->paginate(9);
            return view('pages.tagnew', compact(['tag', 'posts']));
        }else{
            return redirect()->route('homepage');
        }

        
    }




    public function region(){

        return view('pages.region');
    }
    public function search(){

       $search_text = $_GET['query'];
       $recentPosts = Post::where('title', 'LIKE', '%'.$search_text.'%')->with('category')->get();
    //    $lastPosts = Post::where('title', 'LIKE', '%'.$search_text.'%')->with('category')->get();
    //    $trendingPosts = Post::where('title', 'LIKE', '%'.$search_text.'%')->with('category')->get();
    //    $popularPosts = Post::where('title', 'LIKE', '%'.$search_text.'%')->with('category')->get();
    //    $secondPosts = Post::where('title', 'LIKE', '%'.$search_text.'%')->with('category')->get();
    //    $moreView = Post::where('title', 'LIKE', '%'.$search_text.'%')->with('category')->get();
    //    $tags = Tag::where('name', 'LIKE', '%'.$search_text.'%')->with('tag')->get();

       return view('pages.search', compact(['recentPosts']));
    }


    public function contact(){

        return view('pages.contact');
    }

    public function send_message(Request $request){

        $this->validate($request, [
            'name' => 'required|max:200',
            'email' => 'required|email|max:200',
            'subject' => 'required|max:255',
            'message' => 'required|max:2000',

        ]);

        $contact = Contact::create($request->all());

        Session::flash('message-send', 'Message sent successfully');
        return redirect()->back();
    }

    
    
}
