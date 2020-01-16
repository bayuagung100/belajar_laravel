<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Article;

class Tag extends Model
{
    //
    public function article(){
        return $this->belongsTo(Article::class);
    }
}
