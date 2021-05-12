<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Manager\ArticleManager;

class ArticleController extends Controller
{
    private $articleManager;

    public function __construct(ArticleManager $articleManager)
    {
        $this->articleManager = $articleManager;
    }

    /**
     * Affiche la liste des articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('article.index', [
            'articles' => $articles,
        ]);
    }

    /**
     * Affiche la vue qui permet de creer un article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Recupere les donnees de la vue qui permet de creer un article
     * pour l'enregistrer en base.
     *
     * @param  \App\Http\Request\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $validated = $request->validated();

        $this->articleManager->build(new Article(), $request);
        
        return redirect()->route('article.index')->with('success', "L'article a bien été sauvegardé !");
    }

    /**
     * Affiche la vue qui permet de modifier un article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', [
            'article' => $article,
        ]);
    }

    /**
     * Recupere les donnees de la vue qui permet de modifier un article
     * pour l'enregistrer en base.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $this->articleManager->build($article, $request);

        return redirect()->route('article.index')->with('warning', "L'article a bien été modifié !");
    }

    /**
     * Permet de supprimer un article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success', "L'article a bien été supprimé !");
    }
}
