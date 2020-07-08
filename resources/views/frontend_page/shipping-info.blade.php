@extends('layout.index')
@section('content')
@php 
use Gloudemans\Shoppingcart\Facades\Cart;
$CartItems = Cart::content();
@endphp

<div class="col-md-9"> 
            <h3> Checkout </h3>
           

            <div class="row"> 
                <div class="col-md-8">
                  <div class="form-group form-horizontal">
                      <label class="control-label col-sm-8" for="name">Click here to login  </label>
                      <div class="col-sm-4">
                        <a href="{{Route('login')}}"><button class="btn btn-default"> Login </button></a>
                      </div>
                  </div><br><br>
                </div> 
            </div>


   <form class="form-horizontal" action="{{Route('order.create')}}" method="POST">
        {{ csrf_field() }}
             <div class="row"> 
                <div class="col-md-8 center-block">
                    <div class="form-group">
                      <label class="control-label col-sm-4" for="name">Name:</label>
                      <div class="col-sm-8  {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="test" class="form-control" id="name" placeholder="Your Full Name" name="name" value="{{ Auth::user()->name }}">
                        <i class="fa fa-user form-control-feedback"></i>
                        @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-sm-4" for="pwd">Email:</label>
                      <div class="col-sm-8 {{ $errors->has('email') ? ' has-error' : '' }}">          
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address" name="email" value="{{ Auth::user()->email }}">
                         <i class="fa fa-envelope form-control-feedback"></i>
                         @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4" for="mob">Mobile:</label>
                      <div class="col-sm-8 {{ $errors->has('mobile') ? ' has-error' : '' }}">          
                        <input type="text" class="form-control" id="mob" placeholder="Enter Your Mobile Number" name="mobile" value="{{ Auth::user()->mobile }}">
                         <i class="fa fa-phone form-control-feedback"></i>
                        @if ($errors->has('mobile'))
                          <span class="help-block">
                              <strong>{{ $errors->first('mobile') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-4" for="address">Delivery Address:</label>
                      <div class="col-sm-8 {{ $errors->has('address') ? ' has-error' : '' }}">          
                       <textarea  class="form-control"  name="address" placeholder="Enter Your Address"> </textarea>
                        @if ($errors->has('address'))
                          <span class="help-block">
                              <strong>{{ $errors->first('address') }}</strong>
                          </span>
                        @endif</div>
                    </div>

                    <!-- <div class="form-group">        
                      <div class="pull-right" style="margin-right: 15px">
                        <button type="submit" class="btn btn-primary" style="width: 200px; font-size:16px; font-variant: small-caps;">Confirm</button>
                      </div>
                    </div> -->
                </div>  
            </div>

  
          <div class="row"> 
             <div class="col-md-12">
               <table class="table">
                    <thead class="thead-inverse cart_thead" style="background-color: #1A7DA7">
                      <tr>
                          <th> Product Image</th> 
                          <th> Title </th>
                          <th> Price </th>
                          <th> Quantity </th>
                          <th> Total</th>
                          <th> </th>
                      </tr>
                    </thead>

                    <tbody>
                     
                     @foreach($CartItems as $CartItem)
                      <tr> 
                        <td class="cart_img"> <img src="/storage/upload/{{$CartItem->options->image}}"></td>  
                        <td>{{$CartItem->name}}</td>
                        <td>{{$CartItem->price}}</td>
                        <td>
                            <form action="{{route('cart.update',$CartItem->rowId)}}" method="PUT"> 
                                {{csrf_field()}}
                               <input type="number" name="qty" value="{{$CartItem->qty}}" style="width:50px">
                               <button type="submit" class="btn btn-sm btn-default" style="width:50px; margin-top: 4px"> OK </button>
                            </form>
                        </td>
                        <td>{{$CartItem->subtotal}}</td>
                        <td>
                           <form action="{{route('cart.destroy',$CartItem->rowId)}}"  method="POST">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                              <button class="btn btn-danger" type="submit" value="Delete"><i class="fa fa-times"></i></button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="form-group">        
                    <div class="pull-right" style="margin-right: 15px">
                      <button type="submit" class="btn btn-primary" style="width: 200px; font-size:16px; font-variant: small-caps;">Confirm</button>
                    </div>
                  </div>
               </div> 
          </div>




   </form>
</div>   

@endsection