<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public function path()
    {
        return route('articles.show', $this);
    }
}
