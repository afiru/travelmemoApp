<?php

namespace App\View\Components\topics;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
//Model
use App\Models\post;
use App\Models\user_point;
use App\Models\invoice;
use App\Models\topic;
class topicsForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return int
     */
    public $topicsId;

    /**
     * Create a new component instance.
     *
     * @return object
     */
    public $topicsId;

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
        return view('components.topics.topics-form');
    }
}
