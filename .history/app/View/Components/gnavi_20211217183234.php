<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
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
    public $nowBooking;

    public function __construct($nowTopics=0,$nowBooking=0)
    {
        $nowTopics = post::where('postModified' ,'>=', date("Y-m-d H:i:s",strtotime("-7 day")))->count();

        $nowBooking = user_point::where('user_id',Auth::id())->count();

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
