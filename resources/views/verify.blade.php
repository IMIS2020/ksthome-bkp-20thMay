@extends('layouts.app')
@section('content')
<nav class="navbar navbar-dark navbar-expand-md shadow-lg  imis-nav">
        <div class="container-fluid"><a class="navbar-brand text-white" href="/">S-ILF Scholarships</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto font-md">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item"><a class="nav-link" href="{{url('/') }}"><strong>Home</strong></a></li>
                     @else
                   <li class="nav-item"><a class="nav-link" href="/"><strong>Login</strong></a></li>
                     @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><strong>Register</strong></a></li>
                     @endif
                     @endauth
                     @endif

                      @if (Route::has('login'))
                      @auth
                    <li class="nav-item dropdown align-self-center">
                    <a class="nav-link text-white" aria-expanded="false" data-toggle="dropdown" href="#"><strong>{{Auth::user()->firstname}} {{Auth::user()->middlename}} {{Auth::user()->lastname}}&nbsp;&nbsp;</strong><img class="rounded-circle img-fluid" width="25px" src="assets/img/avatar_2x.png"></a>
                        <div class="dropdown-menu font-md"><a class="dropdown-item color-mg" href="#"><i class="fa fa-user"></i>&nbsp;Profile</a>
                         <a class="dropdown-item color-mg" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i>&nbsp;Logout
                          </a>
                          <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                              @csrf
                           </form>  
                        </div>
                    </li>
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
<div class="container mt-10">
    <form method="POST" action="{{ route('verify') }}">
    @csrf
    <input type="hidden" name="email" value="{{ request()->get('email') }}">
        <div class="form-row">
            <div class="col-xl-8 offset-xl-2 mb-2">
                <h3 class="text-white">For Security, Please Identify Yourself</h3>
            </div>
            <div class="col-xl-8 offset-xl-2 mb-2">
                <div class="card mt-2 det-sec">
                    <div class="card-header">
                        <h6 class="mb-0 color-mg">Check your email for the OTP</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-row svc-row">
                            <div class="col-xl-12">
                            @if(Session::has('msg'))
                             <div class="alert alert-success">{{Session::get('msg')}}
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                             </div>
                           @endif

                            @if(Session::has('messageError'))
                            <div class="alert alert-danger">{{Session::get('messageError')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            @endif

                            @if(Session::has('messageSuccess'))
                            <div class="alert alert-success">{{Session::get('messageSuccess')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            @endif
                             </div>
                               
                            <div class="col-xl-5">
                                <div class="form-group">
                                <input id="code" type="text" class="form-control" name="code" required placeholder="Enter OTP sent to your email" maxlength="6">
                             </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="form-group">
                                <button class="btn btn-sm btn-mg" type="submit">Verify OTP</button>&nbsp;&nbsp;
                                <a class="btn btn-secondary btn-sm" href="/register">Cancel</a>
                                
                                </div>
                                <br><br>
                            </div>
                            </form>

                            <div class="col-xl-12">
                            <form method="POST" action="{{ route('resend') }}">
                              @csrf
                                  <p class="color-mg font-md mt-2">Didn't received yet?&nbsp;
                                    <input type="hidden" name="email" value="{{ request()->get('email') }}">
                                    <input class="btn btn-mg btn-sm" type="submit" value="Resend OTP">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
  </div>
@endsection
