@extends('layouts.index')

@section('content')


    <div class="box col-lg-7 col-lg-offset-1">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add New Product</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" method="Post" action="{{Route('product.create')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="title" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea class="form-control" name="description"> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Category</label>
                        <select name="category_id" class="form-control"> 
                        	<option> Select Option </option>
                        	@foreach($categories as $category)
								<option value="{{ $category->id }}"> {{ $category->title }} </option>
                        	@endforeach
						</select>
                    </div> 

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity">
                    </div>

                    <div class="form-group">
                        <label for="product_img">Upload Product Image</label>
                        <input type="file" name="product_img" id="product_img">
					</div>
                    
                    <button type="submit" class="btn btn-info btn-sm">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->
















@endsection