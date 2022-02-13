<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function step1()
    {
        return view('posts/step1');
    }
    public function step2()
    {
        return view('posts/step2');
    }
     public function step3()
    {
        return view('posts/step3');
    }
     public function outfit()
    {
        return view('posts/outfit');
    }
}
