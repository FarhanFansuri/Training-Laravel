<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public static function Home(){
        $title = "Home";
        $content = Post::all();
        return view('home',["title"=>$title, "posts"=>$content]);
    }

    public static function Blog(){
        $title = "Blog";
        return view('home',["title"=>$title]);
    }

    public static function About(){
        $title = "About";
        return view('home',["title"=>$title]);
    }


}
