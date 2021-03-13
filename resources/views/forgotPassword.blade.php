@extends('layouts.layout_navigation')
@section('content')
<body class="bg-magenta">
    <section>
        <div class="container mt-10">
            <form method="POST" action="{{ url('/forgot-password') }}">
                @csrf
                <div class="form-row">
                    <div class="col-xl-8 offset-xl-2 mb-2">
                        <h3 class="text-white">Forgot your password?</h3>
                    </div>
                    <div class="col-xl-8 offset-xl-2 mb-2">
                        <div class="card mt-2 det-sec">
                            <div class="card-header">
                                <h6 class="mb-0 color-mg">Let us help you</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-row svc-row">
                                    <div class="col-xl-12">
                                        <p class="color-mg font-md">If you do not have an account,
                                            <a href="/register">click here</a> to set up a new account or 
                                            <a href="/login">sign in</a> here. Type your email address in the field below to receive your validation code.</p>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="form-group">
                                           <input class="form-control form-control-sm" name="email" type="email" placeholder="Type your registered email address here...">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 mt-2">
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-mg svc-btn" type="submit">Send verification code</button>
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