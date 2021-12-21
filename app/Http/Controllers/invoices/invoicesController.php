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
        $sum = invoice::sum("cost");
        $personSum = invoice::sum("cost") / 4;
        return view('invoices.index',['invoices'=>$invoices,'sum'=>$sum , 'personSum'=>$personSum]);
    }
    public function del(Request $request)
    {
        print_r($request->invoiceDel);
    }
}
