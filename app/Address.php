<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable = ['name','email','mobile','address','user_id'];


    public function users()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
