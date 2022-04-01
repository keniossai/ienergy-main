<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Event;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){

        $posts = Post::orderBy('created_at', 'DESC')->take(20)->get();
        $postCount = Post::all()->count();
        $categoryCount = Category::all()->count();
        $tagCount = Tag::all()->count();
        $userCount = User::all()->count();
        return view('admin.dashboard.index', compact(['posts', 'postCount', 'categoryCount', 'tagCount', 'userCount']));
    }
    public function calendar(){

        $events = Event::orderBy('created_at', 'DESC')->paginate(4);
        return view('admin.calender.index', compact('events'));
    }
    public function lock(){

        return view('auth.lock');
    }
    public function contact(){

        return view('admin.contact.contact');
    }
}
