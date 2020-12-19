<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    protected $table = 'article_translations';

    protected $fillable = ['article_id','locale', 'title' , 'content'];

    public $timestamps = false;
}
