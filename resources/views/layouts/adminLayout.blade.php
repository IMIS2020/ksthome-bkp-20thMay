<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @if (Auth::check()) 
      <meta name="userId" content="{{ Auth::user()->intuId }}" >
      <meta name="firstname" content="{{ Auth::user()->firstname }}" >
      <meta name="middlename" content="{{ Auth::user()->middlename }}" >
      <meta name="lastname" content="{{ Auth::user()->lastname }}" >
     @endif 
    <title>S-ILF Scholarships</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
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
  
    <div id="adminDashboard">
      @yield('adminDashboard')
    </div>

    <!-- Manage application -->
    <div id="manageApplicationDetails">
      @yield('manageApplicationDetails')
    </div>
    <!-- End manage application -->
   
   <!-- Review Application -->
   <div id="adminapplicantForm">
      @yield('applicantForm')
    </div>

    <div id="adminannexure1">
      @yield('annexure1')
    </div>

    <div id="adminannexure2">
      @yield('annexure2')
    </div>

    <div id="adminapplicantDocuments">
      @yield('applicantDocuments')
    </div>

    <div id="adminReview">
      @yield('review')
    </div>

    <div id="adminPrintView">
      @yield('printView')
    </div>
    <div id="adminPrintAnnexure1">
      @yield('printAnnexure1')
    </div>
   <!-- End review Application -->

   <!--Domains start-->
   <div id="addDomains">
      @yield('addDomains')
    </div>

    <div id="manageDomains">
      @yield('manageDomains')
    </div>
   <!--Domains end-->

   <!-- Schedule  -->
   <div id="addSchedule">
      @yield('addSchedule')
    </div>
    <div id="manageSchedule">
      @yield('manageSchedule')
    </div>
    <div id="extendLastDate">
      @yield('extendLastDate')
    </div>
   <!-- End schedule -->

   <!-- Manage users -->
   <div id="manageUsers">
      @yield('manageUsers')
    </div>

    <!-- all registered users -->
    <div id="allRegisteredUsers">
        @yield('allRegisteredUsers')
      </div>
   <!-- all registered users end -->


     <!-- admin users profile -->
     <div id="adminUserProfile">
        @yield('adminUserProfile')
      </div>
   <!-- admin profile end -->
    
    <!-- <script src="{{asset('assets/js/jquery.min.js')}}"></script> -->
    <!-- <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <!-- <script src="{{asset('assets/js/style.js')}}"></script> -->

    </body>
</html>