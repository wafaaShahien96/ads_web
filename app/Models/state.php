<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\country;
use App\Models\city;
use App\Models\User;


class state extends Model  implements TranslatableContract
{
    use Translatable;

    protected $table = "states";
    
    protected $fillable = ['country_id'];

    protected $with = ['translations'];

    public $translatedAttributes = ['name'];

      public function country()
      {
          return $this->belongsTo(Country::class);
      }
      
        public function city()
        {
        return $this->hasMany(City::class);
        }

        public function user(){
            return $this->hasMany(User::class);
        }
}
