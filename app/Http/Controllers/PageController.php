<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $posts = Post::latest()->get()->take(3);
        return view('index')->with('posts', $posts);
    }
    public function about(){
        return view('about');
    }
    public function service(){
        return view('service');
    }
    public function project(){
        return view('project');
    }
    public function contact(){
        return view('contact');
    }
}
