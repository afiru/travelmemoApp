<?php

namespace App\View\Components\post;

use Illuminate\View\Component;

class addPostTitle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    /** @var string フォームのタイトル（文字列） */
    public $formTitle;
    /** @var string フォームのタイトル（メタ情報） */
    public $formDiscription;
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
