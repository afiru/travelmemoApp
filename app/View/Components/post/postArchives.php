<?php

namespace App\View\Components\post;

use Illuminate\View\Component;

class postArchives extends Component
{
    /**
     * Create a new component instance.
     *
     * @return array
     */
    public $where;

    /**
     * Create a new component instance.
     *
     * @return object
     */
    public $datas;


    public function __construct($where=0,$datas=0)
    {
        $this->where = $where;
        $this->datas = $datas;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.post-archives');
    }
}
