<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Model
use App\Models\Post;

class PostsController extends Controller
{
    //投稿一覧
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
            $prefectures = $request->where['prefectures'];
            $interchange = $request->where['interchange'];
            $placeName = $request->where['placeName'];
            $data = Post::where($searchwhere)
                ->where('prefectures', 'like', "%$prefectures%")
                ->where('interchange', 'like', "%$interchange%")
                ->where('placeName', 'like', "%$placeName%")->get();
        }

        return view('posts.post',['data' => $data,'where'=>$where]);
    }
    //新規投稿画面
    public function addPost()
    {
        return view('posts.addPost');
    }
    //新規投稿処理
    public function create(Request $request)
    {
        $this->validate($request,Post::$rules);
        $post = new Post;
        $data = $request->all();
        unset($data['_token']);unset($data['post_author']);
        $post->fill($data)->save();
        return redirect('/posts');
    }
    //投稿編集画面
    public function editPost($postid = null,Request $request) {
        $select = [
            'id'=>$postid,
        ];
        $dates = Post::where($select)->get();
        return view('posts.editPost',['data',$dates]);
    }
}
