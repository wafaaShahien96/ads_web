<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Eloquent\SoftDeletes;


class Article extends Model implements TranslatableContract
{
    use SoftDeletes;
    use Translatable;


    protected $table = "articles";

    protected $fillable = [ 'userable_id', 'image','created_by'];

    protected $with = ['translations'];

    public $translatedAttributes = ['title','content'];

    public function userable()
    {
      return $this->morphTo();
    }

    public function tag()
    {
      return $this->belongsToMany(Tag::class);
    }

    public function comment()
    {
      return $this->hasMany(Comment::class);
    }
    
    
    // edit this accordin to the editting in migrations
    // public function user()
    // {
    //   return $this->belongsTo(User::class);
    // }
}
