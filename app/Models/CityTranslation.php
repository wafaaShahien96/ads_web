<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityTranslation extends Model
{
    protected $table = 'city_translations';

    protected $fillable = ['city_id','locale', 'name'];

    public $timestamps = false;
}
