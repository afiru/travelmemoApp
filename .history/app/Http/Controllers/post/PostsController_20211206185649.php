<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Model
use App\Models\Post;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $term = empty($request->term) ? '0' : $request->term;
        $subterm = empty($request->subterm) ? '0' : $request->subterm;

        $orderby = empty($request->orderby) ? 'id' : $request->orderby;
        $order = empty($request->order) ? 'asc' : $request->order;
        $data = Post::get();
        return view('posts.post',['data' => $data,'term'=>$term,'subterm'=>$subterm]);
    }

    public function create(Request $request)
    {
        $this->validate($request,Post::$rules);
        $post = new Post;
        $data = $request->all();
        unset($data['_token']);unset($data['post_author']);
        $post->fill($data)->save();
        return redirect('/posts');
    }

    function addPost()
    {
        return view('posts.addPost');
    }
}
