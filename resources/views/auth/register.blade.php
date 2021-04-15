@extends('layouts.app')
@section('content')
<nav class="navbar navbar-dark navbar-expand-md shadow-lg  imis-nav">
        <div class="container-fluid"><a class="navbar-brand text-white"  href="/">I-MIS</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
                <div class="col-xl-8 offset-xl-2 mb-2">
                    <h3 class="text-white">Don't have any account?</h3>
                    <h6 class="text-white mb-3">Enter your personal details and start journey with us</h6>
                </div>
                <div class="col-xl-8 offset-xl-2">
                    <div class="login-box">
                       <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-row">
                                <div class="col-xl-4 mb-3">
                                    <div class="form-group">
                                   <input class="form-control @error('firstname') is-invalid @enderror" type="text" placeholder="First name" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                   @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                  @endif
                                 </div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <div class="form-group">
                                   <input class="form-control @error('middlename') is-invalid @enderror" type="text" placeholder="Middle name" name="middlename" value="{{ old('middlename') }}"  autocomplete="middlename" autofocus>
                                   @if ($errors->has('middlename'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                  @endif
                                 </div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <div class="form-group">
                                    <input class="form-control @error('lastname') is-invalid @enderror" type="text" placeholder="Last name" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                    @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                  @endif
                                    </div>
                                </div>
                                <div class="col-xl-4 mb-3">
                                    <div class="form-group">
                                   <input class="form-control @error('contactno') is-invalid @enderror" type="text" name="contactno" placeholder="Contact No." maxlength="10">
                                        @if ($errors->has('contactno'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('contactno') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <div class="form-group">
                                   <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email">
                                   @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-2 mb-3">
                                    <div class="form-group">
                                    <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                    <option value="" selected="" disabled>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                   </div>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password (minimum 8 characters)" required autocomplete="new-password">
                                      
                                            <!-- <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword"></i></button>
                                            </div> -->
                                            
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                             @endif
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <div class="form-group">
                                        <div class="input-group">
                                        <input class="form-control" type="password" id="password1" name="password_confirmation" required autocomplete="new-password" placeholder="Re-type Password">
                                            <!-- <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword1"></i></button>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 offset-xl-2">
                                <button class="btn btn-block btn-sm btn-mg" type="submit"><strong> {{ __('Register') }} </strong></button>
                                </div>
                                <div class="col-xl-4">
                                <a href="/" class="btn btn-block btn-sm btn-secondary" type="submit"><strong> {{ __('Cancel') }} </strong></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
