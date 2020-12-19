<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;


class DeleteAccount extends Model
{
    protected $table = "delete_accounts";
    protected $fillable = [
        'select_reason', 'description'
      ];

      public function user(){
        return $this->hasMany(User::class);
    }   
      
}
