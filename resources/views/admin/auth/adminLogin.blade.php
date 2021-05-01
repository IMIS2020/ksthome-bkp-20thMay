@extends('layouts.app')
@section('content')
<body class="bg-magenta">
    <section class="mt-12">
        <div class="container">
            <div class="row">
            
                <div class="col-xl-4 offset-xl-4">
                @if(Session::has('msg'))
                     <div class="alert alert-danger text-center">{{Session::get('msg')}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                     </div>
                  @endif
                  <h2 class="text-center mt-4 text-white pt-2 text-uppercase">Admin Login</h2><br>
                    <div class="login-box">
                    
                        <form  method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf   
                            <h6 class="text-center color-mg mb-4"><strong>Login here to Manage Applications</strong></h6>
                            <div class="form-group">
                               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                    @if ($errors->has('password'))
                                          <span class="help-block">
                                             <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                    @endif
                                    <!-- <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword"></i></button>
                                    </div> -->
                                </div>
                               
                            </div>
                            <div class="form-group">
                               
                            <div class="form-group text-center mb-4">
                           
                             <button class="btn btn-block btn-sm btn-mg" type="submit">
                                    Login
                                </button>
                            </div>
                            <!-- <div class="form-group mb-0">
                                <p class="text-center text-muted font-md mb-0">Having trouble logging in?&nbsp;<a href="/admin/forget-password">reset password</a></p>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection