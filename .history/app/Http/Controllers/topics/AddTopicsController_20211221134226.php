<?php

namespace App\Http\Controllers\topics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Model
use App\Models\post;
use App\Models\user_point;
use App\Models\invoice;
use App\Models\topic;
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
    public function createTopic(Request $request) {
        if(isset($request->id))
        {
            $this->save($request->id);
        }
        else {
            $this->create();
        }
    }

    private function create() {

    }
}
