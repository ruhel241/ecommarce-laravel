<!-- header start -->
  @include('layout/frontend/header')
<!-- header end -->


<!-- main Container start -->
    <div class="container">
        <div class="row">

          <div class="main-section">
            

            <div class="col-md-3"> 
               <!-- category start -->
                  @include('layout/frontend/category')
               <!-- category end -->
            </div>


              @yield('content')


          </div>
          
        </div>
    </div>