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
        if(isset($request->invoiceDel))
        {
            if(is_array($request->invoiceDel))
            {
                foreach($request->invoiceDel as $key => $val)
                {
                    invoice::find($val)->delete();
                }
            }
        }
        return redirect('/invoices');
    }

    public function addinvoices()
    {
        return view('invoices.addinvoices');
    }

    public function add(Request $request)
    {
        $request->itemName;
    }
}
