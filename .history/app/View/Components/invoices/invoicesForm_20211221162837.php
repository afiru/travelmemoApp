<?php

namespace App\View\Components\invoices;

use Illuminate\View\Component;
use App\Models\invoice;

class invoicesForm extends Component
{
    public $action;
    public $invoiceId;
    public $invoice;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action="",$invoiceId=null)
    {
        //
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
