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
    <title>S-ILF Scholarships</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,700i">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
  
<nav class="navbar navbar-dark navbar-expand-md shadow-lg imis-nav">
  <div class="container-fluid"><img class="img-thumbnail mr-2" style="margin-left : -35px" src="{{ asset('assets/img/logo.jpg') }}" /><a class="navbar-brand text-white"  style="font-size: 35px" href="/">S-ILF Scholarships</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navcol-1">
      <ul class="navbar-nav ml-auto font-md">
          @if (Route::has('login'))
          @auth
          <li class="nav-item"><a class="nav-link" href="{{url('/') }}"><strong>Home</strong></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="nav-item">
          <a class="nav-link" href="{{url('/manage-my-application') }}"><strong>My Applications</strong></a>
          </li>&nbsp;&nbsp;&nbsp;
          <li class="nav-item dropdown align-self-center">
            <a class="nav-link text-white" aria-expanded="false" data-toggle="dropdown" href="#"><strong>Contact Us</strong>
            <div class="dropdown-menu font-md">
              <a class="dropdown-item color-mg" ><strong>9990503759 <br> 9891572290</strong></a>
              <a class="dropdown-item color-mg" ><strong>scholarships@silf.in</strong></a>
            </div>
          </li>
            @else
          <!-- <li class="nav-item"><a class="nav-link" href="/"><strong>Login</strong></a></li> -->
            @if (Route::has('register'))
              <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><strong>Register</strong></a></li>
            @endif
            @endauth
            @endif

            @if (Route::has('login'))
            @auth
          <li class="nav-item dropdown align-self-center">
          <a class="nav-link text-white" aria-expanded="false" data-toggle="dropdown" href="#"><strong>{{Auth::user()->firstname}} {{Auth::user()->middlename}} {{Auth::user()->lastname}}&nbsp;&nbsp;</strong>
          
          <!-- <img class="rounded-circle img-fluid" width="25px" src="{{ asset('storage/uploads/profilephoto/'.Auth::user()->profilePhoto) }}"> -->

    @if(empty(Auth::user()->profilePhoto))
      <img class="rounded-circle img-fluid" width="25px" src="assets/img/avatar_2x.png">
      @else
      <img class="rounded-circle img-fluid" width="25px" src="{{ asset('storage/uploads/profilephoto/'.Auth::user()->profilePhoto) }}">
      @endif
              <div class="dropdown-menu font-md">
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

  <div class="mt-4">
   @yield('maintainceMode')
  </div>

  <div>
   @yield('content')
  </div>
 
    <!-- Manage my Application -->
    <div id="manageMyApplication">
      @yield('manageMyApplication')
    </div>
    
    <!-- Dashboard -->
    <div id="dashboard">
      @yield('dashboard')
    </div>

    <!-- Applicant -->
    <div id="applicantForm">
      @yield('applicantForm')
    </div>
    <div id="applicantDocuments">
      @yield('applicantDocuments')
    </div>
    <div id="choose">
      @yield('choose')
    </div>
    <!--end applicant -->

    <!-- Application -->
    <div id="annexure1">
      @yield('annexure1')
    </div>
    <div id="annexure2">
      @yield('annexure2')
    </div>
    <div id="annexure2BlankForm">
      @yield('annexure2BlankForm')
    </div>
    <div id="annexure2PrintForm">
      @yield('annexure2PrintForm')
    </div>
    <div id="reviewMyApplication">
      @yield('reviewMyApplication')
    </div>
    <div id="printView">
      @yield('printView')
    </div>
    <div id="viewMyApplication">
      @yield('viewMyApplication')
    </div>
    <div id="printAnnexure1">
      @yield('printAnnexure1')
    </div>
    <!-- Application End -->

    <!-- HHDLSS Start -->
    <!-- <div id="annexure1HHDLSS">
      @yield('annexure1HHDLSS')
    </div>
    <div id="annexure2HHDLSS">
      @yield('annexure2HHDLSS')
    </div>
    <div id="annexure2PrintFormHHDLSS">
      @yield('annexure2PrintFormHHDLSS')
    </div>
    <div id="annexure2BlankFormHHDLSS">
      @yield('annexure2BlankFormHHDLSS')
    </div>
    <div id="reviewHHDLSS">
      @yield('reviewHHDLSS')
    </div>
    <div id="viewHHDLSS">
      @yield('viewHHDLSS')
    </div>
    <div id="printViewHHDLSS">
      @yield('printViewHHDLSS')
    </div> -->
    <!-- HHDLSS End -->
     <div>
     @yield('forgotVerify')
     </div>
 
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <!-- <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <!-- <script src="{{asset('assets/js/style.js')}}"></script> -->
</body>
</html>