@extends('layouts.layout_navigation')

@section('welcome')
<div class="container-fluid mt-15">
  <div class="col-sm-6 m-auto">
      <h3 class="text-center color-mg">Welcome to Scholarship Application <hr class="border-bottom border-dark"> </h3><br>
      </div>
   <div class="col-xl-6 mx-auto">
    
    <div class="card-body mt-2">
      <a class="font-xl color-mg" href="#" onclick="javascipt:window.open('/assets/downloadInstruction/Application-for-Nursing-schol.pdf');">Download Guidelines for Nursing Scholarship</a><br>
      <a class="font-xl color-mg" href="#" onclick="javascipt:window.open('/assets/downloadInstruction/Application-for-HHDL-Schol.pdf');">Download Guidelines for HHDLSS Scholarship</a><br>
      <a class="font-xl color-mg" href="#" onclick="javascipt:window.open('/assets/annexure-II/DeclarationForm.pdf');">Download Application form for Nursing Scholarship</a><br>
      <a class="font-xl color-mg" href="#" onclick="javascipt:window.open('/assets/annexure-II/DeclarationForm.pdf');">Download Application form for HHDLSS Scholarship</a><br>
      @if (Auth::check())

      @php

      @endphp
       <a class="font-xl color-mg" href="/dashboard">Online Application</a>
       @else
        <a class="font-xl color-mg" href="/login">Online Application (You must be logged in) </a>
      @endif
    </div>
   </div>
 </div>
 @endsection
