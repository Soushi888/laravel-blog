<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
{
    $articles= Article::all()->first();
   
   
    return response()->view('sitemap.index', [
        'articles' => $articles,
   
    ])->header('Content-Type', 'text/xml');
  }
}
