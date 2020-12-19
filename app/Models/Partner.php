<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model implements TranslatableContract
{
  use Translatable;
  use SoftDeletes;

    protected $table = "partners";
    protected $fillable = ['logo', 'link'];

    protected $with = ['translations'];

    public $translatedAttributes = ['name'];
}
