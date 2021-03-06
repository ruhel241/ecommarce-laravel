<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/">Shop</a></li>
        <li><a href="{{Route('cart.index')}}">Cart</a></li>
        <li><a href="{{Route('checkout.shipping')}}">Checkout</a></li>
              @if (Route::has('login'))
                @auth
                  <li><a href="{{ url('/admin') }}">Dashboard</a></li>
                  <li><a href="{{ url('/logout') }}">Logout</a></li>
                @else
                  <li><a href="{{Route('login')}}">Login</a></li>
                  <li><a href="{{Route('register')}}">Sign Up</a></li>
                @endauth
             @endif
          <li><a href="#">Contact Us</a></li>
      </ul>

   </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>