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
            $searchwhere = array_filter($request->where, 'strlen');
            unset($searchwhere['prefectures']);
            unset($searchwhere['interchange']);
            unset($searchwhere['placeName']);
            print_r($searchwhere);
            $data = Post::where($searchwhere)->get();
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
