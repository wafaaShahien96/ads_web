<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reply extends Model
{
    use SoftDeletes;
    protected $table = "replies";
    protected $fillable = [
        'comment_id', 'reply'
      ];

      public function comment()
      {
          return $this->belongsTo(Comment::class);
      }
}
