<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){

        $posts = Post::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.dashboard.index', compact('posts'));
    }
    public function calendar(){

        return view('admin.calender.index');
    }
    public function lock(){

        return view('auth.lock');
    }
    public function contact(){

        return view('admin.contact.contact');
    }
}
