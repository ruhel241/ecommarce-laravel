<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
	public function index()
	{
		$CartItems = Cart::content();
		return view('cart.index',compact('CartItems'));
	}


    public function Create()
    {
    		
    }


    public function addItem($id)
    {
    	$ProductCart = Product::find($id);
        Cart::add($id, $ProductCart->title, 1, $ProductCart->price, ['image' => $ProductCart->product_img] );
    		return redirect()->back();
    }



    public function update(Request $request, $id)
    {

    	 Cart::update($id,['qty'=>$request->qty] );
         return back();
     	
    }



    public function destroy($id)
    {
    	Cart::remove($id);
    	return back();
	}

}
