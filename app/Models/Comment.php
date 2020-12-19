<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reply;
use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comment extends Model
{
    use SoftDeletes;
    protected $table = "comments";
    protected $fillable = [
        'article_id', 'content' , 'user_id'
      ];

      public function article()
      {
          return $this->belongsTo(Article::class);
      }

      public function reply()
      {
        return $this->hasMany(Reply::class);
      }

      public function user()
      {
          return $this->belongsTo(User::class);
      }
}
