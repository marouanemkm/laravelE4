<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    /**
     * Cette fonction permet d'afficher 4 articles par page dans la page d'accueil
     *
     * @return view
     */
    public function index()
    {
        $articles = Article::paginate(4);
        return view('articles', [
            'articles' => $articles,
        ]);
    }

    /**
     * Cette fonction permer de récupérer l'article qui correspond au slug passé en paramètre
     *
     * @param [string] $slug
     * @return view
     */
    public function show(Article $article)
    {
        return view('article', [
            'article' => $article
        ]);
    }

    public function showLocaux()
    {
        return view('m2l.locaux');
    }

    public function showMateriel()
    {
        return view('m2l.materiel');
    }

    public function showContact()
    {
        return view('m2l.contact');
    }
}
