@extends('layouts.index')
@section('content')

<div class="col-md-10">
    <div>
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="{{Route('product.show')}}">All Product</a></li>
            <li><a href="{{Route('add.product')}}">Add New Product</a></li>
           
        </ul>
    </div>

    @if(session()->has('ProductSucessfull'))
        <div class="row"> 
          <div class="col-md-12">
           <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Notification: </strong>{{session()->get('ProductSucessfull')}}
            </div>
          </div>
        </div>
    @endif

<div class="row">
 <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-edit"></i> Products </h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>

   <div class="box-content">
    <!-- <div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div> -->
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Product Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category Name</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        </thead>
    <tbody>
    

    @foreach($ProductShow as $Product)
        <tr>
            <td>{!! \Illuminate\Support\Str::words($Product->title,5,'....') !!}</td>
            <td class="center">{!! \Illuminate\Support\Str::words($Product->description,5,'....') !!}</td>
            <td class="center"><img class="img-responsive" src="/storage/upload/{{$Product->product_img}}" style="height: 80px"></td>
            <td class="center">{{$Product->price}} </td>
            <td class="center">{{$Product->quantity}} </td>
            <td class="center">{{$Product->categories->title}} </td>
            <td class="center">{{$Product->created_at}} </td>
       
               <td class="center" >
                    <!-- <a class="btn btn-xs btn-success" href="#">
                        <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                        View
                    </a> -->
                    <a class="btn btn-xs btn-info" href="#">
                        <i class="glyphicon glyphicon-edit icon-white"></i>
                        Edit
                    </a>
                    <a class="btn btn-xs btn-danger" href="#">
                        <i class="glyphicon glyphicon-trash icon-white"></i>
                        Delete
                    </a>
                </td>
        </tr>
    @endforeach

   
        
     </tbody>
    </table>
    </div>
  </div>
</div>
</div><!--/row-->


</div>

@endsection