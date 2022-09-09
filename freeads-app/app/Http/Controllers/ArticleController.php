<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view;
     */
    public function index()
    {

        // $c = new Article;
        // $c->content = "je suis le post a nathan";
        // $c->title="2nd post";
        // $c->picture="marius.jpeg";
        // $c->save();
        $articles = Article::all();
        //return dump($articles);
        $name = auth()->user()->name;
        return dump(view("article",['name'=>$name]) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
         //fonctionne pour la creation d'article
        //  $c = new Article;
        //  $c->content = "je suis le post a nathan";
        //  $c->title="2nd post";
        //  $c->picture="marius.jpeg";
        //  $c->save();


            $create = new Article;
            $create->content = $request->content;
            $create->title = $request->title;
            $create->picture = $request->picture;
            $create->save();
            return $request;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
