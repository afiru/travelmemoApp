<?php

namespace App\View\Components\invoice;

use Illuminate\View\Component;
use App\Models\invoice;

class sumInvoice extends Component
{

    public $totalPayPerson;


    public $intPerson;


    public function __construct($intPerson=0)
    {
        $this->intPerson = (int)$intPerson;
        $this->totalPayPerson = invoice::sum('cost') / $this->intPerson;
    }


    public function render()
    {
        return view('components.invoice.sum-invoice');
    }
}
