<?php

namespace App\View\Components\topics;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
//Model

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
    public $topicData;

    public function __construct($topicsId=0)
    {
        $this->$topicsId = (int)$topicsId;
        if(isset($this->$topicsId))
        {
            $this->topicData = topic::where('id',$this->$topicsId)->first();
        }
        else
        {
            $this->topicData = null;
        }
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
