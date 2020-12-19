<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StateTranslation extends Model
{
    protected $table = 'state_translations';

    protected $fillable = ['state_id','locale', 'name'];

    public $timestamps = false;
}
