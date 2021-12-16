<?php

namespace App\View\Components;

use Illuminate\View\Component;
//Model
use App\Models\post;
use App\Models\user_point;
use App\Models\invoice;

class gnavi extends Component
{
    /**
     * Create a new component instance.
     *
     * @return int
     */
    public $nowTopics;

    /**
     * Create a new component instance.
     *
     * @return int
     */
    public $nowbooking;

    public function __construct()
    {

        $this->nowTopics = post::where('postModified' >= date("Y-m-d H:i:s",strtotime("-7 day")))->count();
        $this->nowbooking = 0;
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
