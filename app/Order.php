<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Order_Product;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id','total','delivered'];


    public function users()
    {
    	return $this->belongsTo('App\User','user_id');
    }


    public function order_products()
    {
    	return $this->hasMany('App\Order_Product','order_id');
    }

}
