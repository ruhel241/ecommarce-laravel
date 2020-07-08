<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class FrontendController extends Controller
{
	public function ProductShow()
	{
		$Products = Product::orderBy('id','DESC')->get();
		
		return view('frontend',compact('Products'));
	}

    public function getSinglePage($id)
    {
    		$SinglePage = Product::find($id);
    		return view('frontend_page.single',compact('SinglePage'));
    }


   
}
