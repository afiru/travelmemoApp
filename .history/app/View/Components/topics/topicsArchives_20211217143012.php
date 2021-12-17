<?php

namespace App\View\Components\topics;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
//Model
use App\Models\post;
use App\Models\user_point;
use App\Models\invoice;


class topicsArchives extends Component
{
    /**
     * Create a new component instance.
     *
     * @return int
     */
    public $limit;


    public function __construct($limit = 0)
    {
        $this->limit = $limit;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.topics.topics-archives');
    }
}
