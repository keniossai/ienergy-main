<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Event;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){

        $posts = Post::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.dashboard.index', compact('posts'));
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
