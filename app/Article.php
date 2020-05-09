<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Article de blog
 */
class Article extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'body'];

    public function getRouteKeyName()
    {
        return "slug";
    }
    
    /**
     * return the path of an Article ressource
     *
     * @return string
     */
    public function path()
    {
        return route('articles.show', $this);
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
