<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Address;
use App\Order;
use App\Order_Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
   	public function OrderCollect(Request $request)
   	{
     		$request->validate([
  		    'name'	 	=> 'required',
      		'email' 	=> 'required',
      		'mobile' 	=> 'required',
      		'address' 	=> 'required',
  		  ]);

   		 // $this->validate($request, [
      //   'name'	 	=> 'required',
    		// 'email' 	=> 'required',
    		// 'mobile' 	=> 'required',
    		// 'address' 	=> 'required',
      //   ]);

       $UserId = Auth::user();

        // Address Table Insert
   		$OrderAddress = new Address;
      $OrderAddress->name 	  = $request->name;
   		$OrderAddress->email 	  = $request->email;
   		$OrderAddress->mobile 	= $request->mobile;
   		$OrderAddress->address  = $request->address;
   		$OrderAddress->user_id  = $UserId->id; 
      $OrderAddress->save(); 

      // Order Table Insert
      $orders = new Order;
      $orders->user_id   =   $UserId->id;
      $orders->total     =   Cart::total();
      $orders->save();

      // Order_Product table insert
      $CartItems    = Cart::content();
      foreach($CartItems as $CartItem){
          $data[] = array(
          'product_id'   => $CartItem->id,
          'order_id'    => $orders->id,
          'qty'         => $CartItem->qty,
          'total'       => $CartItem->qty * $CartItem->price,
        );
      } Order_Product::insert($data);

     Cart::destroy();
    session()->flash('OrderNotification', 'Successfully submitted your order,');
    return redirect()->route('frontend');
  }


  public function OrderShow($type= '')
  {  

      if($type == 'pending'){ 
         $OrderShow = Order::with('order_products')->where('delivered','0')->get();
      }elseif($type =='delivered'){
         $OrderShow = Order::with('order_products')->orderBy('id','DESC')->where('delivered','1')->get();
      }else{

        $OrderShow = Order::with('order_products')->orderBy('id','DESC')->get();
      }

   return view('admin.order',compact('OrderShow'));
  }



  public function DeliveredProduct(Request $request, $id)
  {
      $Delivered =  Order::find($id);

      $Delivered->delivered = $request->delivered;

      $Delivered->save();

      return redirect()->back();
  }


}
