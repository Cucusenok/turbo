<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->getAll();
        return view('posts.index', compact('posts'));
    }
}
