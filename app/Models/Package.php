<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\payment;
use Illuminate\Database\Eloquent\SoftDeletes;


class Package extends Model
{
    use SoftDeletes;
    protected $table = "packages";
    protected $fillable = [
        'type', 'price' , 'total_ads' , 'regular_ads' ,'featured_ads' ,'total_saving' , 'featured_ads_validity' ,'package_validity'
      ];

      public function payment()
      {
          return $this->hasMany(payment::class);
      }

     
}
