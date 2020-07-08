<div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu nav side-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="/admin"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-edit"></i>  Products  <b class="caret"></b></a>
                            <ul class="dropdown-menu sub-menu">
                              <li><a href="{{Route('product.show')}}">All Product</a></li>
                              <li><a href="{{Route('add.product')}}">Add New Product</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-edit"></i>  Orders  <b class="caret"></b></a>
                            <ul class="dropdown-menu sub-menu">
                              <li><a href="{{Route('order.show')}}">All Orders</a></li>
                              <li><a href="{{url('admin/orders/pending')}}">Pending Orders</a></li>
                              <li><a href="{{url('admin/orders/delivered')}}">Delivered Orders</a></li>
                            </ul>
                        </li>
                    </ul> <hr>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->