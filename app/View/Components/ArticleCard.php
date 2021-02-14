<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArticleCard extends Component
{
    public string $article;

    public function __construct(string $article)
    {
        $this->article = $article;
    }

    public function render()
    {
        return view('components.article-card');
    }
}
