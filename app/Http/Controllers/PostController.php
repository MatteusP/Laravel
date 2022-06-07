<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }
    public function show(Post $post){
        //1 -> N
        //N -> 1
        $post->load('user');
        return $post;
    }
}
