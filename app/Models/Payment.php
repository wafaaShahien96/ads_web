<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\package;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $table = "payments";
    protected $fillable = [
        'package_id', 'amount','user_id'
      ];

  public function package(){
        return $this->belongsTo(Package::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function calculate()
    {
        $expires = strtotime('+'.$this->package->package_validity.'days', strtotime($this->created_at)); 
        $expire_date = date('Y-m-d H:i:s', $expires);
        return $expire_date;
    }
}
