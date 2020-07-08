@extends('layout.index')

@section('content')
<div class="col-md-9">

            <h3> Sign Up  </h3>
           
            <div class="col-md-8 center-block">
              <form class="form-horizontal" method="POST" action="{{ route('register') }}">
               {{ csrf_field() }}
                 <div class="form-group">
                      <label class="control-label col-sm-8" for="name">Already have an account? </label>
                      <div class="col-sm-4">
                        <a href="{{Route('login')}}"><button class="btn btn-default"> Login </button></a>
                       
                      </div>
                  </div>

                    
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Your Full Name" value="{{ old('name') }}" required autofocus>
                            <i class="fa fa-user form-control-feedback"></i>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Enter Your Email Address" value="{{ old('email') }}" required >
                            <i class="fa fa-envelope form-control-feedback"></i>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    

                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label for="mobile" class="col-md-4 control-label">Mobile</label>
                        <div class="col-md-8">
                            <input id="mobile" type="mobile" class="form-control" name="mobile" placeholder="Enter Your Mobile Number" value="{{ old('mobile') }}" required>
                            <i class="fa fa-phone form-control-feedback"></i>
                             @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                 

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-8">
                            <input id="password" type="password" placeholder="Enter password" class="form-control" name="password"  required>
                            <i class="fa fa-lock form-control-feedback"></i>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Enter confirmation password" name="password_confirmation" required>
                            <i class="fa fa-lock form-control-feedback"></i>
                        </div>
                    </div>



                    <div class="form-group">        
                      <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                   </form>


                   




              </div>
                 
            </div>


@endsection
