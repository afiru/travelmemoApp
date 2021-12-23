<?php

namespace App\Http\Controllers\topics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Model
use App\Models\post;
use App\Models\user_point;
use App\Models\invoice;
use App\Models\topic;
use App\View\Components\topics;

class AddTopicsController extends Controller
{
    public function index()
    {
        return view('topics.topics');
    }
    public function addtopic()
    {
        return view('topics.addtopic');
    }
    public function editotopic($topicid = null,Request $request)
    {
        return view('topics.editotopic',['topicid'=>$topicid]);
    }

    public function createTopic(Request $request)
    {
        if(isset($request->id))
        {
            $this->save($request);
            return redirect('/topics');
        }
        else {
            $this->create($request);
            return redirect('/topics');
        }
    }

    private function create($request)
    {
        $this->validate($request, topic::$rules);
        $topic = new topic;
        $form = $request->all();
        unset($form['_token']);
        $topic->fill($form)->save();
    }

    public function save($request)
    {
        $this->validate($request, topic::$rules);
        $topic = topic::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $topic->fill($form)->save();
    }

    public function deltopics(Request $request)
    {
        if(isset($request->delltopics))
        {
            if(is_array($request->delltopics))
            {
                foreach($request->delltopics as $key => $val)
                {
                    topic::find($val)->delete();
                }
            }
        }
        return redirect('/topics');
    }

    public function topic($topicid = null)
    {
        if($topicid === null)
        {
            return redirect('/topics');
        }
        else
        {
            $topic = topic::find($topicid);
            return view('topics.topic',['topic'=>$topic]);
        }

    }
}
