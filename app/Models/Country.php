<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\state;
use App\Models\User;

class Country extends Model implements TranslatableContract
{

  use Translatable;

    protected $table = "countries";
    
    protected $fillable = ['id'];

    protected $with = ['translations'];

    public $translatedAttributes = ['name'];

      public function state(){
        return $this->hasMany(State::class);
    }

      public function user(){
        return $this->hasMany(User::class);
    }
}
