<?php

namespace App\Http\Controllers\mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function  index()
    {
        return view('index');
    }
}
