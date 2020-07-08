@extends('layout.index')
@section('content')

           <div class="col-md-9">

            <h3> Cart Page </h3>

            
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

              </div> 
                  
                <div class="col-md-4 pull-right"> 
                   <h4>Cart Totals</h4>
                    <table  class="table"> 
                      <tbody> 
                       <tr> 
                          <td> <b> Items </b> </td> 
                          <td> <b> {{Cart::count()}} </b> </td>
                          
                       </tr> 

                       <tr> 
                          <td> <b> Subtotal </b> </td> 
                          <td> <b> ৳{{Cart::subtotal()}}</b> </td>
                       </tr> 

                       <tr> 
                          <td> <b> Text </b> </td> 
                        <td> <b> ৳ {{Cart::tax()}}</b> </td>
                       </tr>   

                       <tr> 
                          <td> <b> Total </b> </td> 
                          <td> <b> ৳{{Cart::total()}}</b> </td>
                       </tr>
                     </tbody>
                    </table>
                    <a href="{{Route('checkout.shipping')}}"><button class="btn btn-success form-control Checkout_btn"> Proceed to Checkout </button></a>
                 </div> 

             


            </div> 

@endsection