<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Payment;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Comment;
use App\Models\Article;
use App\Models\DeleteAccount;

class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;
    protected $table = "users";

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'gender',
        'photo',
        'address',
        'country_id',
        'state_id',
        'city_id'
      ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function payment()
    {
        return $this->has(Payment::class);
    }

    
    public function deleteAccount()
    {
        return $this->belongsTo(DeleteAccount::class);
    }
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function comment()
    {
      return $this->hasMany(Comment::class);
    }
    public function article()
    {
        return $this->morphOne(Article::class, 'userable');
    }    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];  
}
