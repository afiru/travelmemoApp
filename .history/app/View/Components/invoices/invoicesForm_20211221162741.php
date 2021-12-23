<?php

namespace App\View\Components\invoices;

use Illuminate\View\Component;

class invoicesForm extends Component
{
    public $action;

    public $invoice;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
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