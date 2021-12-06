<?php

namespace App\View\Components\post;

use Illuminate\View\Component;

class addPostsSearch extends Component
{
    /**
     * Create a new component instance.
     *
     * @return array
     *
     */
    public $data;

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
        return view('components.post.add-posts-search');
    }
}
