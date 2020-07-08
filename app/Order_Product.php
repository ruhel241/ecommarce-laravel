<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Order;

class Order_Product extends Model
{
    protected $table = 'order_products';
    protected $fillable = ['product_id','order_id','qty','total'];



    public function products()
    {
    	return $this->belongsTo('App\Product','product_id');
    }



    public function orders()
    {
    	return $this->belongsTo('App\Order','order_id');
    }


}
