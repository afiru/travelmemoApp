<?php

namespace App\View\Components\invoice;

use Illuminate\View\Component;
use App\Models\invoice;

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
        $this->totalPayPerson = invoice::sum('cost');
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
