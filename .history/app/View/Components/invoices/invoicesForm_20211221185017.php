<?php

namespace App\View\Components\invoices;

use Illuminate\View\Component;
use App\Models\invoice;

class invoicesForm extends Component
{
    public $action;
    public $invoiceId;
    public $invoiceData;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action="",$invoiceId=null)
    {
        $this->action = $action;
        $this->invoiceId = $invoiceId;
        if($this->invoiceId===null)
        {

            $this->invoiceData = "";
        }
        else {
            echo '--';
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
