<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Model
use App\Models\Post;
use App\Models\user_point;
use Illuminate\Support\Facades\Auth;

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
    public function editPost($postid = null,Request $request)
    {
        $select = [
            'id'=>$postid,
        ];
        $dates = Post::where($select)->get();
        return view('posts.editPost',['datas'=>$dates]);
    }
    //投稿編集処理
    public function updatePost($postid = null,Request $request)
    {
        $this->validate($request,Post::$rules);
        $data = $request->all();
        $post = Post::find($request->postid);
        unset($data['_token']);unset($data['post_author']);
        $post->fill($data)->save();
        return redirect('/posts');
    }
    //投稿削除処理
    public function delPost(Request $request)
    {
        if(!empty($request->post_id))
        {
            foreach($request->post_id as $key => $val)
            {
                Post::find($val)->delete();
                return redirect('/posts');
            }
        }
    }
    //いいね処理
    public function bookmark(Request $request)
    {
        //現在のpostのpoint_sumを取得
        $count = $this->postPointSum($request->id);
        //user_postsにすでに登録されているかどうか
        $flug = $this->chackUserPost(Auth:id(),$request->id);
        return $count;
    }
    private function postPointSum($id=0) :int
    {
        $data = Post::find($id)->first();
        return $data->point_sum;
    }
    private function chackUserPost($user_id=0,$post_id='')
    {
        $where = [
            'user_id' =>$user_id,
            'post_id' => $post_id
        ];
        $count = user_point::where($where)->count();
    }
}
