@extends('layouts.app')
@section('content')
      <div class="container mt-10">
      <form method="POST" action="{{ route('send-link') }}">
      @csrf

        <div class="form-row">
            <div class="col-xl-8 offset-xl-2 mb-2">
                <h3 class="text-white">{{ __('Admin Reset Password') }}</h3>
            </div>
            <div class="col-xl-8 offset-xl-2 mb-2">
                <div class="card mt-2 det-sec">
                    <div class="card-header">
                        <h6 class="mb-0 color-mg">Check your email for the password reset link</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-row svc-row">
                            <div class="col-xl-12">
                             </div>
                               <br>
                            <div class="col-xl-5">
                                <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your registered email address here" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="form-group">
                                <button class="btn btn-sm btn-mg" type="submit">{{ __('Send Reset Link') }}</button>
                                </div>
                            </div>
                            <div class="col-xl-3"> 
                            <a href="/admin/login" class="btn btn-sm btn-secondary">Cancel</a>
                            </div>
                           
                            </form>

                            <div class="col-xl-12">
                           <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
@endsection
