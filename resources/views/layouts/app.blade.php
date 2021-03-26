<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>I - MIS | App Login</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body class="bg-magenta">
    <section>
        <div id="app">
            <main>
              @yield('content')
            </main>
        </div>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script src="{{asset('assets/js/style.js')}}"></script>
</body>
</html>
