<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Shows all the ressources.
     *
     * @return view
     */
    public function index()
    {
        if (request("tag")) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            // $articles = Tag::where('name', request('tag'))->paginate(5)->articles;
        } else {
            // $articles = Article::latest()->paginate(3);
            $articles = Article::latest()->get();
        }



        return view("articles.index", ["articles" => $articles]);
    }

    /**
     * Shows a single ressource.
     *
     * @param  mixed $id
     * @return view
     */
    public function show(Article $article)
    {
        return view("articles.show", ["article" => $article]);
    }

    /**
     * Shows a view to create a new ressource
     *
     * @return view
     */
    public function create()
    {
        return view("articles.create", [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Persist a new ressource
     *
     * @return view
     */
    public function store()
    {

        
        $article = new Article($this->validateArticle());
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect(route("articles.index"));
    }

    /**
     * Shows a view to edit a new ressource
     *
     * @return view
     */
    public function edit(Article $article)
    {
        return view("articles.edit", [
            "article" => $article
        ]);
    }

    /**
     * Persist an edited ressource
     *
     * @return void
     */
    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    /**
     * Delete the ressource
     *
     * @return void
     */
    public function destroy(Article $article)
    {
    }

    /**
     * Validate the attributes of an Article :
     * title,
     * slug,
     * excerpt,
     * body.
     * tags
     *
     * @return array
     */
    protected function validateArticle()
    {
        return request()->validate([
            "title" => "required",
            "slug" => "required",
            "excerpt" => "required",
            "body" => "required",
            "tags" => "exists:tags,id"
        ]);
    }
}
