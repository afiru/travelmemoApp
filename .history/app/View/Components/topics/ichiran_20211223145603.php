<?php

namespace App\View\Components\topics;

use Illuminate\View\Component;

use App\Models\topic;

class ichiran extends Component
{
    public $limit;
    public $topics;
    public $haslink;
    public $haspaginate;
    public $del;
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
        return view('components.topics.ichiran');
    }
}
