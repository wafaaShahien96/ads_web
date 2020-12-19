<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Ads extends Model
{
   
    protected $table = "ads";
    protected $fillable = [
        'image', 'title' ,'category_id' , 'featured' , 'status' , 'price' ,'date', 'enable_offer'
      ];

      public function category()
      {
          return $this->belongsTo(Category::class);
      }
}
