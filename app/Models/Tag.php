<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Article;

class Tag extends Model  implements TranslatableContract
{
    use SoftDeletes;
    use Translatable;

    protected $table = "tags";
    
    protected $fillable = ['id'];

    protected $with = ['translations'];

    public $translatedAttributes = ['name'];
    

      public function article()
      {
          return $this->belongsToMany(Article::class);
      }
}
