<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Category;
use App\Product;


class ProductController extends Controller
{
    public function getAddNewProduct()
    {	$categories = Category::all();
    	return view('admin.add-new-product',compact('categories'));
    }


    public function CreateProduct(Request $request)
    {	
    	$CreateProduct = new Product;
		$CreateProduct->title 		= $request->title;
    	$CreateProduct->description = $request->description;

    	if ($request->hasFile('product_img')) {
           $fileName =  Carbon::now()->timestamp.$request->product_img->getClientOriginalName();
       	
       	   $request->product_img->storeAs('public/upload', $fileName);
           $CreateProduct->product_img = $fileName;
        }

    	$CreateProduct->price 		= $request->price;
    	$CreateProduct->quantity	= $request->quantity;
    	$CreateProduct->category_id = $request->category_id;
    	$CreateProduct->user_id 	=  Auth::user()->id;
		$CreateProduct->save();
		
     session()->flash('ProductSucessfull', 'Successfully add your product,');
    return redirect()->route('product.show');

    }





    public function ProductShow()
    {
      $ProductShow = Product::orderBy('id','DESC')->get();
       return view('admin.product', compact('ProductShow') );
    }






}
