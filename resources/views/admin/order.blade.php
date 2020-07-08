@extends('layouts.index')
@section('content')

<div class="col-md-10">
    <div>
        <ul class="breadcrumb">
            <li><a href="/admin">Home</a></li>
            <li><a href="{{url('admin/orders')}}">All Orders</a></li>
            <li><a href="{{url('admin/orders/pending')}}">Pending</a></li>
            <li><a href="{{url('admin/orders/delivered')}}">Delivered</a></li>
        </ul>
    </div>

<div class="row">
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-edit"></i> <!-- All Orders  -->

        @if(Request::is('admin/orders/pending'))
			{{ 'Pending' }}
		@elseif(Request::is('admin/orders/delivered'))
			{{'Delivered'}}
		@else
			{{'All Order'}}
		@endif

        </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>

   <div class="box-content">
    <!-- <div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div> -->
    

    	@foreach($OrderShow as $Order) 

       		<h4 class="text-center"> Order By: <i class="glyphicon glyphicon-user"></i> {{$Order->users->name}} </h4>
			<!-- <h5 class="text-center"> Quantity: 455 </h5> -->
			<h4 class="text-center"> Total: {{$Order->total}} </h4>
			@if(Request::is('admin/orders/pending'))
			<form action="{{Route('delivered.product',$Order->id)}}" method="POST" class="pull-right" style="margin-top:-50px ">
				{{ csrf_field() }}
				<div class="checkbox checkbox-success checkbox-inline">
                    <input name="delivered" type="checkbox" id="inlineCheckbox2" value="1">
                 	<button type="submit" class="btn btn-xs btn-primary"> Delivered </button>
                </div>
			</form>
			@endif

		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
	        <thead>
	            <tr>
	                <th>Title</th>
	                <th>Product Image</th>
	                <th>Quantity</th>
	                <th>Total</th>
	                <th>Created at</th>
	                <th>Status</th>
	            </tr>
	        </thead>
	         <tbody>
	    		
		        @foreach($Order->order_products as $order_product)
			        <tr>
			       		<td class="center"> {{$order_product->products->title}}</td>
						<td class="center"><img class="img-responsive" src="/storage/upload/{{$order_product->products->product_img}}" style="height: 80px"></td>
			          	<td class="center">{{$order_product->qty}}</td>
						<td class="center">{{$order_product->total}}</td>
			            <td class="center">{{$Order->created_at}} </td>
			            <td class="center">
			            	@if($Order->delivered == 0)
			            	 <span class="label-warning label label-default">Pending</span>
			            	@else
			            		<span class="label-success label label-default">Delivered</span> 
			            	@endif
			            </td>
			     	</tr>  
		       	@endforeach
       		
	       </tbody>
   		</table>
      @endforeach 

			

			
  
    
        
  
    </div>
  </div>
</div>
</div><!--/row-->


</div>

@endsection