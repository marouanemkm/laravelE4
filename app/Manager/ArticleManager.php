<?php

namespace App\Manager;

use App\Models\Article;
use App\Http\Requests\ArticleRequest;

class ArticleManager
{
    /**
     * Permet de sous-traité les fonctions store et update
     * du controller ArticleController.
     *
     * @param Article $article
     * @param ArticleRequest $request
     * @return void
     */
    public function build(Article $article,ArticleRequest $request)
    {
        $article->title = $request->input('title');
        $article->subtitle = $request->input('subtitle');
        $article->content = $request->input('content');
        $article->save();
    }
}