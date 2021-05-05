@extends('layouts.app')

@section('content')
<body class="bg-magenta">
    <section>
        <div class="container mt-10">
        <form method="POST" action="{{ route('admin.password.update') }}">
        @csrf
       <input type="hidden" value="{{$email}}" name="email">
         <div class="form-row">
                    <div class="col-xl-8 offset-xl-2 mb-2">
                        <h3 class="text-white">{{ __('Update Password') }}</h3>
                        <p class="text-white">Note: <strong>Password must be at least 8 characters</strong>  </p>
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
                                       <div>
                                          @if (session('status'))
                                          <div class="alert alert-success" role="alert">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                             {{ session('status') }}
                                          </div>
                                       @endif

                                       @if (session('statusError'))
                                          <div class="alert alert-danger" role="alert">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                             {{ session('statusError') }}
                                          </div>
                                       @endif
                                       </div>
                                        </p>
                                    </div>
                                    
                                 <div class="col-xl-8">
                                    <div class="form-group">
                                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" maxlength="6" minlength="6" name="code" placeholder="Enter OTP" value="" required autofocus>

                                        @error('code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                        <div class="input-group">
                                        <input class="form-control" type="password" id="password" minlength="8" name="password" required  placeholder="New password">
                                            <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword"></i></button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group">
                                        <input class="form-control" type="password" id="password1" minlength="8" name="password_confirmation" required placeholder="Confirm password">
                                            <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-xl-5 mt-2">
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-mg " type="submit"> {{ __('Reset Password') }}</button>
                                            <a href="/admin/login" class="btn btn-sm btn-secondary">Cancel</a>
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
