@extends('layouts.layout_navigation')
@section('forgotVerify')
<body class="bg-magenta">
    <section>
        <div class="container mt-10">
        <form method="POST" action="{{ url('/forgot-verify') }}">
         @csrf
         @if(Session::has('msg'))
         <div class="alert alert-success">{{Session::get('msg')}}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
         </div>
      @endif
         <div class="form-row">
                    <div class="col-xl-8 offset-xl-2 mb-2">
                        <h3 class="text-white">Update Password</h3>
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
                                        A verification code has been sent to your registered email, please type the code below.
                                        </p>
                                    </div>
                                    
                                 <div class="col-xl-8">
                                    <div class="form-group">
                                       <input class="form-control form-control-sm" type="text" name="code" placeholder="Verification code"></div>
                                    <div class="form-group">
                                       <input class="form-control form-control-sm" type="password" name="password"  placeholder="New password"></div>
                                    <div class="form-group">
                                       <input class="form-control form-control-sm" type="password" name="password_confirmation" placeholder="Verify password">
                                     </div>
                                    </div>
                                    <div class="col-xl-5 mt-2">
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-mg " type="submit">Update Password</button>
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