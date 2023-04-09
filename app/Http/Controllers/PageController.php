<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
   {
    $posts = Post::get();
     return view('welcome',compact('posts'));
   }
   public function single_post(Post $post)
   {
     return view('single',compact('post'));
   }
}
