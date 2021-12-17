<?php

namespace App\Http\Controllers\mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Model
use App\Models\post;
use App\Models\user_point;


class MypageController extends Controller
{
    public function  index()
    {
        return view('index');
    }
}
