<?php

namespace App\Http\Controllers\invoices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class invoicesController extends Controller
{
    public function index()
    {
        return view('posts.addPost');
    }
}
