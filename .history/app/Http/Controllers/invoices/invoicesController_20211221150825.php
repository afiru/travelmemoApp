<?php

namespace App\Http\Controllers\invoices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Model
use App\Models\post;
use App\Models\user_point;
use App\Models\invoice;

class invoicesController extends Controller
{
    public function index()
    {
        $invoices = invoice::all();
        print_r($invoices);
        return view('invoices.index');
    }
}
