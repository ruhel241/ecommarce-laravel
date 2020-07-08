 <div class="container-fluid">
      <div class="row">
        <div class="header"> 
            <div class="col-md-4"> 
              <div class="logo"> <img src="{{ asset('frontend_assets/images/logo.jpg') }}" height="80px"; width="100%"></div>
            </div>
            <div class="col-md-4"> 
              <div class="search">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="search">Search:</label>
                      <div class="col-sm-10">
                        <input type="search" class="form-control" id="search" placeholder="Enter search">
                      </div>
                    </div>
                  </form> 
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="cart"> <a href="{{route('cart.index')}}"> <i class="fa fa-shopping-cart"></i><span id="itemCount" style="display: block;">{{ Cart::count() }}</span>  <span> Cart </span> <span>( {{ Cart::count() }} items - ৳ {{ Cart::subtotal()  }} )</span></a> <i class="fa fa-heart"> </i> </div>
            </div>
        </div>

       <!-- navigation start -->
            @include('layout/frontend/navigation')
       <!-- navigation end -->


 </div>
</div>