@extends('layout.index')
@section('content')
		<div class="col-md-9">
      <h3> Single Product </h3>
            <div class="col-md-6">
                <img src="/storage/upload/{{$SinglePage->product_img}}" width="100%">
            </div>

              <div class="col-md-6">
                <div class="product-details">
                 <h3 class="single_title">{{$SinglePage->title}}</h3>
                  <span class="single_price"> ${{$SinglePage->price}}</span> <span class="quant"> Quantity : </span> <span class="number"> <input type="number" name="quantity" step="1" value="1" style="width:50px; text-align: center;"></span> <br><br>
                      <p> {!! \Illuminate\Support\Str::words($SinglePage->description,40,'....') !!} </p>
                     <br><br>
                   <a href="{{route('cart.addItem',$SinglePage->id)}}"> <button class="butt btn btn-success cart-btn"> <i class="fa fa-shopping-cart"></i> Add to cart</button></a>
                </div>
              </div>
    </div> 
@endsection