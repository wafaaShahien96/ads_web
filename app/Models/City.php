<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\state;
use App\Models\User;


class City extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = "cities";
    
    protected $fillable = ['state_id'];

    protected $with = ['translations'];

    public $translatedAttributes = ['name'];

    public function state()
      {
          return $this->belongsTo(State::class);
      }

      public function user(){
        return $this->hasMany(User::class);
    }
}
