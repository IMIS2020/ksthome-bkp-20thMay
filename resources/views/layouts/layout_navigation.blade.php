<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @if (Auth::check()) 
      <meta name="firstname" content="{{ Auth::user()->firstname }}" >
      <meta name="middlename"content="{{ Auth::user()->middlename }}" >
      <meta name="lastname"  content="{{ Auth::user()->lastname }}" >
      <meta name="contactno" content="{{ Auth::user()->contactno }}" >
      <meta name="email"     content="{{ Auth::user()->email }}" >
      <meta name="userId"    content="{{ Auth::user()->id }}" >
     @endif 
    <title>I-MIS-APP</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
  
<nav class="navbar navbar-dark navbar-expand-md shadow-lg imis-nav">
        <div class="container-fluid"><a class="navbar-brand text-white"  href="/">I-MIS</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto font-md">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item"><a class="nav-link" href="{{url('/') }}"><strong>Home</strong></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/manage-scholarship') }}"><strong>My Applications</strong></a>
                    </li>&nbsp;&nbsp;&nbsp;
                     @else
                   <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><strong>Login</strong></a></li>
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
 
  <div class="mt-4">
   @yield('welcome')
  </div>

  <div>
   @yield('content')
  </div>
 
<!-- Manage Scholarship -->
    <div id="manageScholarship">
      @yield('manageScholarship')
    </div>
    
<!-- Dashboard -->
    <div id="dashboard">
      @yield('dashboard')
    </div>

    <!-- Nursing Start -->

    <div id="applicationForm">
      @yield('applicationForm')
    </div>

    <div id="annexure1">
      @yield('annexure1')
    </div>

    <div id="annexure2">
      @yield('annexure2')
    </div>

    <div id="annexure2PrintForm">
      @yield('annexure2PrintForm')
    </div>


    <div id="uploadDocuments">
      @yield('uploadDocuments')
    </div>

    <div id="review">
      @yield('review')
    </div>

    <div id="viewNursing">
      @yield('viewNursing')
    </div>

    <div id="printViewNursing">
      @yield('printViewNursing')
    </div>

    <!-- Nursing End -->

    <!-- HHDLSS Start -->

    <div id="applicationFormHHDLSS">
      @yield('applicationFormHHDLSS')
    </div>

    <div id="annexure1HHDLSS">
      @yield('annexure1HHDLSS')
    </div>

    <div id="annexure2HHDLSS">
      @yield('annexure2HHDLSS')
    </div>

    <div id="uploadDocumentsHHDLSS">
      @yield('uploadDocumentsHHDLSS')
    </div>

    <div id="reviewHHDLSS">
      @yield('reviewHHDLSS')
    </div>

    <div id="viewHHDLSS">
      @yield('viewHHDLSS')
    </div>

    <div id="printViewHHDLSS">
      @yield('printViewHHDLSS')
    </div>
     
    <!-- Admin Section -->

    <div id="adminDashboard">
      @yield('adminDashboard')
    </div>




    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script src="{{asset('assets/js/style.js')}}"></script>
</body>
</html>