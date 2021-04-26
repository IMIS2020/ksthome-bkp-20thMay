@extends('layouts.layout_navigation')
@section('contactUs')
<body class="bg-magenta">
<section>
      <div class="container mt-4">
          <div class="row">
              <div class="col-xl-8 offset-xl-2 mb-2">
                  <h3 class="text-white">Contact Us</h3>
                  <h6 class="text-white mb-3">Fill up this form, in case you&#39;re facing any problem submitting the application.<br>or<br>
                                              You may also call on the nos. 9990503759 or 9891572290 </h6>
                  <br>
                  @if(Session::has('message'))
                  <div class="alert alert-success">{{Session::get('message')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  </div>
               @endif
              </div>
            
              <div class="col-xl-8 offset-xl-2">
                  <div class="login-box">
                      <form method="POST" action="{{url('/send')}}">
                      @csrf
                      <input type="hidden" name="firstname" value= "{{ Auth::user()->firstname }}">
                      <input type="hidden" name="lastname"  value= "{{ Auth::user()->lastname }}">
                          <div class="form-row">
                              <div class="col-xl-4 mb-3">
                                  <div class="form-group">
                                     <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->firstname }} {{ Auth::user()->middlename}} {{ Auth::user()->lastname }}" readonly >
                                       <!-- @if($errors->has('name'))
                                       <span class="invalid-feedback">
                                          <strong>{{ $errors->first('name') }}</strong>
                                       </span>
                                    @endif -->
                                 </div>
                              </div>
                              <div class="col-xl-4 mb-3">
                                  <div class="form-group">
                                     <input type="email" name = "email" class="form-control @error('email') is-invalid @enderror" value="{{Auth::user()->email}}" readonly >
                                       <!-- @if($errors->has('email'))
                                          <span class="invalid-feedback">
                                             <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                       @endif -->
                                 </div>
                              </div>
 
                              <div class="col-xl-4 mb-3">
                                  <div class="form-group">
                                     <input type="text" class="form-control @error('contactNumber') is-invalid @enderror" name="contactNumber" placeholder="Contact number" value="{{Auth::user()->contactno}}" readonly>
                                     <!-- @if($errors->has('contactNumber'))
                                          <span class="invalid-feedback">
                                             <strong>{{$errors->first('contactNumber')}}</strong>
                                          </span>
                                       @endif -->
                                    </div>
                              </div>

                              <!-- <div class="col-xl-6 mb-3">
                              <div class="form-group">
                              <select class="form-control form-control-sm @error('topic') is-invalid @enderror" name="topic" >
                                    <option value="" selected>-- select --</option>
                                    <option>Eligibility criteria</option>
                                    <option>General queries </option>
                                    <option>Documentation related queries </option>
                                    <option>Nursing related queries</option>
                                    <option>HHDLSS  related queries</option>
                                 </select>
                                 @if ($errors->has('topic'))
                                    <span class="invalid-feedback">
                                       <strong>{{ $errors->first('topic') }}</strong>
                                    </span>
                                 @endif
                               </div>
                              </div> -->
                              <div class="col-xl-6 mb-3">
                              <!-- <label>Application Type</label> -->
                              
                                 <div class="form-group">
                                    <select class="form-control @error('scholarshipType') is-invalid @enderror" name="scholarshipType" >
                                       <option  value="" selected="" disabled>-- Application Type --</option>
                                       <option @if (old('scholarshipType') == 'Nursing Scholarship') selected="selected" @endif value="Nursing">Nursing Scholarship</option>
                                       <option @if (old('scholarshipType') == 'HHDLSS  Scholarship') selected="selected" @endif value="HHDLS">HHDLSS  Scholarship</option>
                                  </select>
                                @if ($errors->has('scholarshipType'))
                                    <span class="invalid-feedback">
                                       <strong>{{ $errors->first('scholarshipType') }}</strong>
                                    </span>
                                 @endif
                                </div>
                                </div>

                              <div class="col-xl-6 mb-3">
                                 <div class="form-group">
                                    <select class="form-control @error('msgCategory') is-invalid @enderror" name="msgCategory" >
                                    <option  value="" selected="" disabled>-- Message regarding --</option>
                                    <option @if (old('msgCategory') == 'Eligibility criteria') selected="selected" @endif value="Eligibility criteria">Eligibility criteria</option>
                                    <option @if (old('msgCategory') == 'Documentation related queries') selected="selected" @endif value="Documentation related queries">Documentation related queries </option>
                                    <option @if (old('msgCategory') == 'Nursing related queries') selected="selected" @endif value="Nursing related queries">Nursing related queries</option>
                                    <option @if (old('msgCategory') == 'HHDLSS related queries') selected="selected" @endif value="HHDLSS related queries">HHDLSS  related queries</option>
                                    <option @if (old('msgCategory') == 'General queries') selected="selected" @endif value="General queries">General queries</option>
                                    <option @if (old('msgCategory') == 'Others') selected="selected" @endif value="Others">Others</option>
                                </select>
                                @if ($errors->has('msgCategory'))
                                    <span class="invalid-feedback">
                                       <strong>{{ $errors->first('msgCategory') }}</strong>
                                    </span>
                                 @endif
                                </div>
                                </div>

                              <div class="col-xl-12 mb-3">
                                  <div class="form-group">
                                     <input type="text" name="msgSubject" class="form-control @error('msgSubject') is-invalid @enderror" placeholder="Subject" value="{{old('msgSubject')}}" >
                                     @if($errors->has('msgSubject'))
                                          <span class="invalid-feedback">
                                             <strong>{{ $errors->first('msgSubject') }}</strong>
                                          </span>
                                       @endif
                                    </div>
                              </div>

                              <div class="col-xl-12 mb-3">
                                  <div class="form-group">
                                  <textarea style="height:200px;" name="msgBody" maxlength="500"  class="form-control @error('msgBody') is-invalid @enderror" placeholder="Maximum 500 characters.." rows="4">{{old('msgBody')}}</textarea>
                                    @if($errors->has('msgBody'))
                                       <span class="invalid-feedback">
                                          <strong>{{ $errors->first('msgBody') }}</strong>
                                       </span>
                                    @endif
                                 </div>
                              </div>
                              <div class="col-xl-4 offset-xl-2"><button class="btn btn-block btn-sm btn-mg" type="submit"><strong>Send Message</strong></button></div>
                              <div class="col-xl-4 offset-xl-0"><a href="/" class="btn btn-block btn-sm btn-cancel" ><strong>Cancel</strong></a></div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </section>
</body>
@endsection