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
        $where = $request->where;

        $orderby = empty($request->orderby) ? 'id' : $request->orderby;
        $order = empty($request->order) ? 'asc' : $request->order;
        if(empty($where))
        {
            $where = [
                'term' =>0,
                'subterm' =>0,
            ];
            $data = Post::get();
        }
        else
        {
            $where = array_filter($request->where, 'strlen');
            unset($where['prefectures']);
            unset($where['interchange']);
            unset($where['prefectures']);
            print_r($where);
            $data = Post::where($where)->get();
        }

        return view('posts.post',['data' => $data,'where'=>$where]);
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
