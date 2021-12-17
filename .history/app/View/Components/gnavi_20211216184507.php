<?php

namespace App\View\Components;

use Illuminate\View\Component;

class gnavi extends Component
{
    /**
     * Create a new component instance.
     *
     * @return string
     */
    public $nowTopics;

    /**
     * Create a new component instance.
     *
     * @return string
     */


    public function __construct()
    {
        $this->nowTopics = '現在の新着トピックス'.'30'.'件';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gnavi');
    }
}
