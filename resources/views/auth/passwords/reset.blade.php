@extends('layouts.app')

@section('content')
<body class="bg-magenta">
    <section>
        <div class="container mt-10">
        <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
         <div class="form-row">
                    <div class="col-xl-8 offset-xl-2 mb-2">
                        <h3 class="text-white">{{ __('Reset Password') }}</h3>
                        <h5 class="text-white font-md">Note : Password must be at least 8 characters.</h5>
                    </div>
                    <div class="col-xl-8 offset-xl-2 mb-2">
                        <div class="card mt-2 det-sec">
                            <div class="card-header">
                                <h6 class="mb-0 color-mg">Let us help you</h6>
                            </div>
                            
                            <div class="card-body">
                                <div class="form-row svc-row">
                                    <div class="col-xl-12">
                                        <p class="color-mg font-md">
                                       
                                        </p>
                                    </div>
                                    
                                 <div class="col-xl-8">
                                    <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>

                                  <div class="form-group">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control form-control-sm @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="New password" minlength="8">
                                                 @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword"></i></button></div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control form-control-sm @error('password') is-invalid @enderror" type="password" id="password1" name="password_confirmation" placeholder="Confirm password" minlength="8">
                                                 @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword1"></i></button></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-xl-5 mt-2">
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-mg " type="submit"> {{ __('Update Password') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
          const togglePassword = document.querySelector('#togglePassword');
          const password = document.querySelector('#password');
      
          togglePassword.addEventListener('click', function (e) {
          const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
          password.setAttribute('type', type);
          this.classList.toggle('fa-eye-slash');
          });

          const togglePassword1 = document.querySelector('#togglePassword1');
          const password1 = document.querySelector('#password1');
      
          togglePassword1.addEventListener('click', function (e) {
          const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
          password1.setAttribute('type', type);
          this.classList.toggle('fa-eye-slash');
          });
          </script>
</body>
@endsection
