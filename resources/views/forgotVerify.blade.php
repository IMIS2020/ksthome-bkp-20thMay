@extends('layouts.app')
@section('content')
<div class="form-row updt-pwd">
   <div class="col-xl-12 mb-2">
      <form method="POST" action="{{ url('/forgot-verify') }}">
         @csrf
      @if(Session::has('msg'))
         <div class="alert alert-success">{{Session::get('msg')}}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
         </div>
      @endif
   </div>
   <div class="col-xl-5 mt-2">
         <div class="form-group">
            <input class="form-control form-control-sm" type="text" name="code" placeholder="Verification code"></div>
         <div class="form-group">
            <input class="form-control form-control-sm" type="text" name="password"  placeholder="New password"></div>
         <div class="form-group">
            <input class="form-control form-control-sm" type="text" name="password_confirmation" placeholder="Verify password">
         </div>
         <div class="form-group mt-3">
            <button class="btn btn-sm btn-mg" type="submit">Update Password</button>
         </div>
      </div>
   </form>
</div>
@endsection