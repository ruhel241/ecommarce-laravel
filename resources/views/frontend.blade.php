@extends('layout.index')
@section('content')

<div class="col-md-9"> 
        @if(session()->has('OrderNotification'))  <br>
              <div class="row"> 
                  <div class="col-md-12">
                   <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>Notification: </strong>{{session()->get('OrderNotification')}}
                    </div>
                  </div>
               </div>
          @endif

          <h3> Home Product </h3>

          @foreach($Products as $Product)
          <div class="col-md-4">
            <div class="product">
              <a href="{{Route('single',$Product->id)}}">
                <img src="/storage/upload/{{$Product->product_img}}" height="250px"; width="100%">
              </a>
              <p>{{ $Product->title }}</p>
              <p class="price"> ৳{{$Product->price}} </p> 
              <a href="{{route('cart.addItem',$Product->id)}}"> <button class="butt btn btn-success"> <i class="fa fa-shopping-cart"></i> Add to cart   </button> </a>
              <br><br>
            </div>
          </div>
          @endforeach
          


        </div> 

@endsection