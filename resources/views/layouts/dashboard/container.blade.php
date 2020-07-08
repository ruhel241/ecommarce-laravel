<div class="ch-container">
   
    <div class="row">
        <!-- Navigation start -->
            @include('layouts/dashboard/navigation')
        <!-- navigation end -->

        <!-- <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript> -->
        <!-- content start -->
            @yield('content')
        <!-- content end -->
    </div><!--/fluid-row-->


    

    <!-- <hr> -->

   



   <!--  <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="" target="_blank">E-Commerce Application </a> 2017 - 2025</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Developed by: <a href="http://usman.it/free-responsive-admin-template">Md.Ruhel Khan</a></p>
    </footer>

 -->


</div><!--/.fluid-container-->