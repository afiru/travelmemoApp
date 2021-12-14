<?php

namespace App\View\Components\post;

use Illuminate\View\Component;

class addPostForm extends Component
{
    /** @var object フォームのタイトル（文字列） */
    public $data;

    public function __construct($data=0)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.add-post-form');
    }
}
