@extends('layouts.app')

@section('content')
<nav class="navbar navbar-dark navbar-expand-md  imis-nav">
        <div class="container-fluid"><a class="navbar-brand text-white"  href="/">I-MIS</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto font-md">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item"><a class="nav-link" href="{{url('/') }}"><strong>Home</strong></a></li>
                     @else
                   <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><strong>Login</strong></a></li>
                     @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><strong>Register</strong></a></li>
                     @endif
                     @endauth
                     @endif

                      @if (Route::has('login'))
                      @auth
                    <li class="nav-item dropdown align-self-center">
                    <a class="nav-link text-white" aria-expanded="false" data-toggle="dropdown" href="#"><strong>Hello, {{Auth::user()->firstname}} {{Auth::user()->middlename}} {{Auth::user()->lastname}}&nbsp;&nbsp;</strong><img class="rounded-circle img-fluid" width="25px" src="assets/img/avatar_2x.png"></a>
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

<body class="bg-magenta">
    <section>
        <div class="container mt-10">

            <div class="row">
                <div class="col-xl-4 offset-xl-4">
                @if(Session::has('message'))
                     <div class="alert alert-success">{{Session::get('message')}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                     </div>
                  @endif
                    <div class="login-box">
                         <form method="POST" action="{{ route('login') }}">
                          @csrf
                            <h6 class="text-center color-mg mb-4"><strong>Login to apply for scholarship</strong></h6>
                            <div class="form-group">
                              <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>

                           <div class="form-group">
                              <div class="input-group">
                                 <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                                 <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword"></i></button></div>
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                              </div>
                          </div>

                            <div class="form-group">
                               
                            <div class="form-group text-center mb-4">
                            <button class="btn btn-block btn-sm btn-mg" type="submit"><strong>{{ __('Login') }}</strong></button>
                            </div>
                            <div class="form-group mb-0">
                               <p class="text-muted font-md mb-0">Not have any account, register&nbsp;
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </p>
                                <p class="text-muted font-md mb-0">Having trouble logging in?&nbsp;
                               
                                 <a href="/forgot-password">{{ __('Reset Password') }}</a>
                               
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
