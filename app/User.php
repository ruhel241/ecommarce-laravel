<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Product;
use App\Address;
use App\Order;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'mobile', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function products()
    {
       return $this->hasMany('App\Product','user_id');
    }


    public function isAdmin()
    {
        return $this->admin;
    }



    public function addresses()
    {
        return $this->hasMany('App\Address','user_id');
    }


     public function orders()
    {
        return $this->hasMany('App\Order','user_id');
    }




}
