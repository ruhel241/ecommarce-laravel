<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Order_Product;

class Product extends Model
{
   protected $table = 'products';
   protected $fillable = ['title','description','product_img','price','quantity','category_id','user_id'];


	public function users()
	{
		return $this->belongsTo('App\User', 'user_id');
	}


	public function categories()
	{
		return $this->belongsTo('App\Category','category_id');
	}
   

	public function order_products()
	{
		return	$this->hasMany('App\Order_Product', 'product_id');
	}




}
