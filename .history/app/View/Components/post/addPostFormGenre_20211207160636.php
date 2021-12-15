<?php

namespace App\View\Components\post;

use Illuminate\View\Component;

class addPostFormGenre extends Component
{
    /** @var object フォームのタイトル（文字列） */
    public $datas;
    /** @var string フォームのタイトル（文字列） */
    public $name;
    /** @var string フォームのタイトル（文字列） */
    public $genre;

    public function __construct($data=0,$name=0,$genre=0)
    {
        $this->datas = $datas;
        $this->name = $name;
        $this->genre = $genre;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.add-post-form-genre');
    }
}
