@extends('layouts.layout_navigation')
@section('welcome')
<section class="mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 text-center">
                <h2 class="text-break color-mg"><strong>Welcome to I-MIS, Apply for Scholarship</strong></h2>
            </div>
            <div class="col-xl-10 offset-xl-1 text-center mb-4">
                <hr class="cs-hr" />
            </div>
            @if (!Auth::check())
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 offset-lg-0 offset-xl-0 mb-2">
                <div class="login-box">
                   <a href="#" onclick="javascipt:window.open('/assets/downloadInstruction/Guidelines-for-Nursing-Scholarship.pdf');">
                        <h5 class="text-break mb-3 home-links"><strong>Download Guidelines for Nursing Scholarship </strong><i class="fa fa-download"></i></h5>
                    </a>
                    <a href="#" onclick="javascipt:window.open('/assets/downloadInstruction/Guidelines-for-HHDL-Scholarship.pdf');">
                        <h5 class="text-break mb-3 home-links"><strong>Download Guidelines for HHDLSS Scholarship </strong><i class="fa fa-download"></i></h5>
                    </a>
                    <a href="#" onclick="javascipt:window.open('/assets/downloadInstruction/Application-for-Nursing-schol.pdf');">
                        <h5 class="text-break mb-3 home-links"><strong>Download Application form for Nursing Scholarship </strong><i class="fa fa-download"></i></h5>
                    </a>
                    <a href="#" onclick="javascipt:window.open('/assets/downloadInstruction/Application-for-HHDL-schol.pdf');">
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
           @else
            <div class="col-sm-8 col-md-8">
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
                <div class="login-box mt-2 pb-2">
                        <form method="post">
                            <h6 class="color-mg mb-2"><strong>Update Password</strong></h6>
                            <div class="form-row">
                                <div class="col-xl-5">
                                    <div class="form-group">
                                        <div class="input-group input-group-sm"><input class="form-control" type="password" id="password" name="password" placeholder="Current Password">
                                            <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword"></i></button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="form-group">
                                        <div class="input-group input-group-sm"><input class="form-control form-control-sm" type="password" id="password-1" name="password" placeholder="New Password">
                                            <div class="input-group-append"><button class="btn btn-sm btn-mg" type="button"><i class="fa fa-eye" id="togglePassword-1"></i></button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="form-group"><button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Update</strong></button></div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <p class="text-muted font-md mb-0"><strong>Forgot your password, reset it&nbsp;</strong><a href="#"><strong>here</strong></a></p>
                            </div>
                        </form>
                    </div>
               </div>

               <div class="col-sm-12 col-lg-4 col-xl-4 offset-xl-0 pl-1">
                    <form>
                        <div class="form-group mb-0">
                            <div class="login-box pb-3">
                                <h6 class="color-mg pb-1"><strong>Profile Details of:&nbsp;</strong><span><strong>{{$user->firstname}} {{$user->middlename}} {{$user->lastname}}</strong></span></h6>
                                <div class="table-responsive">
                                    <table class="table color-mg">
                                        <tbody>
                                        
                                            <tr>
                                                <td><strong>Profile Photo</strong></td>
                                                <td class="text-nowrap text-truncate text-break w-15x" colspan="2"><img class="img-fluid mb-2 mr-2" src="assets/img/avatar_2x.png" width="80px"><button class="btn btn-sm btn-custom font-xs" type="submit"><strong>Update</strong></button><br><input class="form-control-file font-xs" type="file" accept="image/*"></td>
                                                <td><br></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email ID</strong></td>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Contact Number</strong></td>
                                                <td>{{$user->contactno}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Gender</strong></td>
                                                <td>{{$user->gender}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Last Login</strong></td>
                                                <td>{{date("d-m-Y", strtotime($user->lastLoginTime)) }} {{substr(explode('-',$user->lastLoginTime)[2],3)}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Applied For</strong></td>
                                                <td><span>Nursing Scholarship</span>,<span>HHDL Scholarship</span></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Application Status</strong></td>
                                                <td>Accepted</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Download Form</strong></td>
                                                <td><a class="btn btn-sm btn-custom font-xs" role="button" href="print-nursing-application-form.html"><i class="fa fa-download"></i><strong>&nbsp;Download Application Form</strong></a></td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
           @endif
    </div>
</section>
 @endsection
