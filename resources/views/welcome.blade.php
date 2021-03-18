@extends('layouts.layout_navigation')

@section('welcome')
<section class="mt-6">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 text-center">
                <h2 class="text-break color-mg"><strong>Welcome to I-MIS, Apply for Scholarship</strong></h2>
            </div>
            <div class="col-xl-10 offset-xl-1 text-center mb-4">
                <hr class="cs-hr" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 offset-lg-0 offset-xl-0 mb-2">
                <div class="login-box">
                   <a href="#" onclick="javascipt:window.open('/assets/downloadInstruction/Application-for-Nursing-schol.pdf');">
                        <h5 class="text-break mb-3 home-links"><strong>Download Guidelines for Nursing Scholarship </strong><i class="fa fa-download"></i></h5>
                    </a>
                    <a href="#" onclick="javascipt:window.open('/assets/downloadInstruction/Application-for-HHDL-Schol.pdf');">
                        <h5 class="text-break mb-3 home-links"><strong>Download Guidelines for HHDLSS Scholarship </strong><i class="fa fa-download"></i></h5>
                    </a>
                    <a href="#" onclick="javascipt:window.open('/assets/annexure-II/DeclarationForm.pdf');">
                        <h5 class="text-break mb-3 home-links"><strong>Download Application form for Nursing Scholarship </strong><i class="fa fa-download"></i></h5>
                    </a>
                    <a href="#" onclick="javascipt:window.open('/assets/annexure-II/DeclarationForm.pdf');">
                        <h5 class="text-break mb-3 home-links"><strong>Download Application form for HHDLSS Scholarship </strong><i class="fa fa-download"></i></h5>
                    </a>
                    @if (Auth::check())
                    <a href="/application-form">
                        <h5 class="text-break mb-3 home-links"><strong>Apply Online for Nursing Scholarship</strong><i class="fa fa-sign-in"></i></h5>
                    </a>
                    <a href="/application-form-HHDLSS">
                        <h5 class="text-break home-links"><strong>Apply Online for HHDLSS Scholarship </strong><i class="fa fa-sign-in"></i></h5>
                    </a>
                    @else
                    <a href="/">
                        <h5 class="text-break mb-3 home-links"><strong>Apply Online for Nursing Scholarship (You need to be logged in) </strong><i class="fa fa-sign-in"></i></h5>
                    </a>
                    <a href="/">
                        <h5 class="text-break home-links"><strong>Apply Online for HHDLSS Scholarship (You need to be logged in) </strong><i class="fa fa-sign-in"></i></h5>
                    </a>
                    @endif


              </div>
            </div>
           
            <div class="col-sm-12 col-lg-4 col-xl-4 offset-xl-0">
                <div class="login-box">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <h6 class="text-center color-mg mb-4"><strong>Login to apply for scholarship</strong></h6>
                        <div class="form-group mb-3">
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                            <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                                <div class="input-group-append">
                                <button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword"></i></button>
                             </div>
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                            </div>
                        </div>
                        <div class="form-group text-center mb-4">
                        <button class="btn btn-block btn-sm btn-mg" type="submit"><strong>{{ __('Login') }}</strong></button>
                        </div>
                        <div class="form-group mb-0">
                            <p class="text-muted font-md mb-0"><strong>Not have any account, register </strong><a href="{{ route('register') }}"><strong>here</strong></a></p>
                            <p class="text-muted font-md mb-0"><strong>Having trouble logging in? </strong><a href="/forgot-password"><strong>reset password</strong></a></p>
                        </div>
                    </form>
                </div>
            </div>
           

        </div>
    </div>
</section>
 @endsection
