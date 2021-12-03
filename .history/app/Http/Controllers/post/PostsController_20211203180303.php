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
        $this->validate($request,Post::$rules);
        $post = new Post;
        $data = $request->all();
        unset($data['_token']);unset($data['_token']);
    }

    function addPost()
    {
        return view('posts.addPost');
    }
}
