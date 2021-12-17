<?php

namespace App\View\Components\topics;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
//Model
use App\Models\post;
use App\Models\user_point;
use App\Models\invoice;
use App\Models\topic;

class topicsArchives extends Component
{
    /**
     * Create a new component instance.
     *
     * @return int
     */
    public $limit;

    /**
     * Create a new component instance.
     *
     * @return object
     */
    public $topics;

        /**
     * Create a new component instance.
     *
     * @return object
     */
    public $topics;


    public function __construct($limit = 0, $topics=null)
    {
        $this->limit = $limit;
        $this->topics = topic::orderBy('UPDATED_AT','desc')->simplePaginate(10);
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
