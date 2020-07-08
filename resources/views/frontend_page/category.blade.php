@extends('layout.index')
@section('content')


<div class="col-md-9"> 
   <h3> Category Product: {{$CategoryProducts->title}} </h3>

  @foreach($CategoryProducts->products as $Product)
  <div class="col-md-4">
    <div class="product">
      <a href="{{Route('single',$Product->id)}}">
        <img src="/storage/upload/{{$Product->product_img}}" height="250px"; width="100%">
      </a>
      <p>{{$Product->title}}</p>
      <p class="price"> ৳{{$Product->price}} </p> 
      <a href="{{route('cart.addItem',$Product->id)}}"> <button class="butt btn btn-success"> <i class="fa fa-shopping-cart"></i> Add to cart   </button> </a>
      <br><br>
    </div>
  </div>
  @endforeach
  
</div> 

@endsection