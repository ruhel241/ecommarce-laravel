<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;


class CategoriesController extends Controller
{
	public function CategoryShowProduct($id)
	{
		 $CategoryProducts = Category::with('products')->find($id);

		 return view('frontend_page.category', compact('CategoryProducts'));
	}

   
}
