<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerTranslation extends Model
{
    protected $table = 'partner_translations';

    protected $fillable = ['partner_id','locale', 'name'];

    public $timestamps = false;
}
