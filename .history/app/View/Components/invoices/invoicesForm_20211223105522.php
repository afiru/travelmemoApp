<?php

namespace App\View\Components\invoices;

use Illuminate\View\Component;
use App\Models\invoice;

class invoicesForm extends Component
{
    public $action;
    public $invoiceId;
    public $invoiceData;


    public function __construct($action="",$invoiceId=null)
    {

        $this->action = $action;
        $this->invoiceId = (int)$invoiceId;
        if($this->invoiceId===null)
        {
            $this->invoiceData = "";
        }
        else {
            $this->invoiceData = invoice::find($this->invoiceId);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.invoices.invoices-form');
    }
}
