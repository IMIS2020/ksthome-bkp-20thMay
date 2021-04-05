<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- @if (Auth::check()) 
      <meta name="userName" content="{{ Auth::user()->name }}" >
     @endif  -->
    <title>I-MIS-APP</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
  
    <div id="adminDashboard">
      @yield('adminDashboard')
    </div>

    <div id="addDomains">
      @yield('addDomains')
    </div>

    <div id="manageDomains">
      @yield('manageDomains')
    </div>


    <div id="addNursingApplicationSchedule">
      @yield('addNursingApplicationSchedule')
    </div>

    <div id="addHHDLSSApplicationSchedule">
      @yield('addHHDLSSApplicationSchedule')
    </div>


    <div id="manageApplicationSchedule">
      @yield('manageApplicationSchedule')
    </div>

    <div id="extendLastDate">
      @yield('extendLastDate')
    </div>

    <div id="manageApplicationDetails">
      @yield('manageApplicationDetails')
    </div>

<!-- review-nursing -->
    <div id="applicationFormNursingReview">
      @yield('applicationFormNursingReview')
    </div>

    <div id="annexure1NursingReview">
      @yield('annexure1NursingReview')
    </div>

    <div id="annexure2NursingReview">
      @yield('annexure2NursingReview')
    </div>

    <div id="uploadDocumentsNursingReview">
      @yield('uploadDocumentsNursingReview')
    </div>

    <div id="reviewNursingReview">
      @yield('reviewNursingReview')
    </div>

    <!-- Start HHDLSS -->
    <div id="applicationFormHHDLSSReview">
      @yield('applicationFormHHDLSSReview')
    </div>

    <div id="annexure1HHDLSSReview">
      @yield('annexure1HHDLSSReview')
    </div>

    <div id="annexure2HHDLSSReview">
      @yield('annexure2HHDLSSReview')
    </div>

    <div id="uploadDocumentsHHDLSSReview">
      @yield('uploadDocumentsHHDLSSReview')
    </div>

    <div id="reviewHHDLSSReview">
      @yield('reviewHHDLSSReview')
    </div>
 <!-- End HHDLSS -->

    
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="{{asset('assets/js/style.js')}}"></script>
</body>
</html>