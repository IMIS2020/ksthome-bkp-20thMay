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
                                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" placeholder="enter code" value="" required autofocus>

                                        @error('code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    <div class="form-group">

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter new password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                       </div>
                                    <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm new password" required autocomplete="new-password">
                                     </div>
                                    </div>
                                    <div class="col-xl-5 mt-2">
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-mg " type="submit"> {{ __('Reset Password') }}</button>
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
</body>
@endsection
