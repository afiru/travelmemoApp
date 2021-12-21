<?php

namespace App\View\Components\invoice;

use Illuminate\View\Component;

class sumInvoice extends Component
{
    /**
     * Create a new component instance.
     *
     * @return int
     */
    public $totalPayPerson;

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
        return view('components.invoice.sum-invoice');
    }
}
