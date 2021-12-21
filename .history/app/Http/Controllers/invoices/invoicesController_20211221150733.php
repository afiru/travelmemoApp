<?php

namespace App\Http\Controllers\invoices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Model
use App\Models\post;
use App\Models\user_point;


class invoicesController extends Controller
{
    public function index()
    {
        return view('invoices.index');
    }
}
