<?php

namespace App\Http\Controllers\topics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function create() {

    }
}
