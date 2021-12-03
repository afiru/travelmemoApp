<?php

namespace App\View\Components\post;

use Illuminate\View\Component;

class addPostTitle extends Component
{
    /** @var string フォームのタイトル（文字列） */
    public $formTitle;
    /** @var string フォームのタイトル（メタ情報） */
    public $formDiscription;


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
        return view('components.post.add-post-title');
    }
}
