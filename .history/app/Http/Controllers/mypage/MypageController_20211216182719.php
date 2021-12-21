<?php

namespace App\Http\Controllers\mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Model
use App\Models\post;
use App\Models\user_point;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function  index()
    {
        return view('index');
    }
}
