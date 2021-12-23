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
    public $limit;
    public $topics;
    public $haslink;
    public $haspaginate;
    public $del;



    public function __construct($limit = 0, $topics=null,$haslink=false,$haspaginate=false,$del=false)
    {
        $this->del = (boolean)$del;
        $this->limit = $limit;
        $this->haslink = $haslink;
        $this->haspaginate = $haspaginate;
        $this->topics = topic::orderBy('UPDATED_AT','desc')->paginate($this->haslink);
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
