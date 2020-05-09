<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
