<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Model
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {

    }

    public function create(Request $request)
    {

    }

    function addPost()
    {
        return view('posts.addPost');
    }
}
