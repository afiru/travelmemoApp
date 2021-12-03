<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index()
    {

    }

    function addPost()
    {
        return view('mypage.posts.addPost');
    }
}
