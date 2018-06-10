@extends('layouts.app_nav')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      
      <div class="row content">
        <div class="col-md-4">
          
          {{-- new card start --}}
          <div class="card text-center">
            <div class="card-body">
              @if($user->Avatar->filename == null)
                @if($user->UserDetail->gender=="Male")
                <img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                @else
                <img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                @endif
              @else
                <img src="{{ asset('theme_src/profile_pics/'.$user->Avatar->filename) }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
              @endif
              <h4>{{$user->name}}</h4>
              <p class="text-muted">{{$user->UserDetail->age}} - {{$user->UserDetail->district}}</p>
              <div class="border-top pt-3">
                  <div class="row">
                      <div class="col-4">
                          <h6>5896</h6>
                          <p>Post</p>
                      </div>
                      <div class="col-4">
                          <h6>1596</h6>
                          <p>Followers</p>
                      </div>
                      <div class="col-4">
                          <h6>7896</h6>
                          <p>Likes</p>
                      </div>
                  </div>
              </div>

              {{-- <button class="btn btn-primary btn-block btn-sm mt-3 mb-4">Follow</button> --}}

              </div>
          </div>
          
          {{-- new card start --}}
          <div class="card mt-2">
            <div class="card-body">
              <h4 class="card-title">Gallery</h4>
              <div id="lightgallery" class="row lightGallery">
                <a href="{{ asset('theme_src') }}/images/samples/1280x768/1.jpg" class="image-tile"><img src="{{ asset('theme_src') }}/images/samples/300x300/1.jpg" alt="image small"></a>
                <a href="{{ asset('theme_src') }}/images/samples/1280x768/2.jpg" class="image-tile"><img src="{{ asset('theme_src') }}/images/samples/300x300/2.jpg" alt="image small"></a>
                <a href="{{ asset('theme_src') }}/images/samples/1280x768/3.jpg" class="image-tile"><img src="{{ asset('theme_src') }}/images/samples/300x300/3.jpg" alt="image small"></a>
                <a href="{{ asset('theme_src') }}/images/samples/1280x768/4.jpg" class="image-tile"><img src="{{ asset('theme_src') }}/images/samples/300x300/4.jpg" alt="image small"></a>
                <a href="{{ asset('theme_src') }}/images/samples/1280x768/5.jpg" class="image-tile"><img src="{{ asset('theme_src') }}/images/samples/300x300/5.jpg" alt="image small"></a>
                <a href="{{ asset('theme_src') }}/images/samples/1280x768/6.jpg" class="image-tile"><img src="{{ asset('theme_src') }}/images/samples/300x300/6.jpg" alt="image small"></a>
                <a href="{{ asset('theme_src') }}/images/samples/1280x768/7.jpg" class="image-tile"><img src="{{ asset('theme_src') }}/images/samples/300x300/7.jpg" alt="image small"></a>
                <a href="{{ asset('theme_src') }}/images/samples/1280x768/8.jpg" class="image-tile"><img src="{{ asset('theme_src') }}/images/samples/300x300/8.jpg" alt="image small"></a>
              </div>
            </div>
          </div>

          {{-- new card start --}}
          <div class="card mt-2 mb-2">
            <div class="card-body">
              <h4 class="card-title">Suggestions</h4>

              @foreach($suggestions as $suggestion)
              <div class="wrapper d-flex align-items-center py-2 border-bottom">
                <a href="{{ url('/profile/'.$suggestion->User->id) }}">
                  <img class="img-sm rounded-circle" src="{{ asset('theme_src/profile_pics/'.$suggestion->User->Avatar->filename) }}" alt="profile">
                </a>
                <div class="wrapper ml-3">
                  <a href="{{ url('/profile/'.$suggestion->User->id) }}">
                    <h6 class="ml-1 mb-1">{{$suggestion->User->firstname}}</h6>
                    <small class="text-muted mb-0">{{$suggestion->age}} - <i class="mdi mdi-map-marker-outline mr-1"></i>{{$suggestion->district}}</small>
                  </a>
                </div>
                <div class="ml-auto px-1 py-1">
                  <button type="button" class="btn btn-primary btn-xs">FOLLOW</button>
                </div>
              </div>
              @endforeach

            </div>
          </div>

        </div>
        <div class="col-md-8">
          @include('inc.messages')
          <form id="example-form" action="{{ route('profile.update',$user->id) }}" method="POST">
            @csrf
          {{-- new card start --}}
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Basic Details</h4>
                <div class="form-group">
                  <label>First Name:</label>
                  <input name="firstname" class="form-control" value="{{$user->firstname}}" />
                </div>
                <div class="form-group">
                  <label>Last Name:</label>
                  <input name="lastname" class="form-control" value="{{$user->lastname}}" />
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <div class="row">
                    <div class="col-md-10 col-sm-3 col-xs-3">
                      <input name="email" class="form-control" data-inputmask="'alias': 'email'" value="{{$user->email}}" disabled />
                    </div>
                    <div class="col">
                      <button class="btn btn-primary btn-block btn-sm" type="button">Change</button>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select name="gender" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus style="width:100%">
                    <option {{old('gender',$user->UserDetail->gender)=="Male"? 'selected':''}}>Male</option>
                    <option {{old('gender',$user->UserDetail->gender)=="Female"? 'selected':''}}>Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Nationality</label>
                  <select name="nationality" class="form-control {{ $errors->has('nationality') ? ' is-invalid' : '' }}" style="width:100%">
                    <option {{old('nationality',$user->UserDetail->nationality)=="Sinhalese"? 'selected':''}}>Sinhalese</option>
                    <option {{old('nationality',$user->UserDetail->nationality)=="Tamils"? 'selected':''}}>Tamils</option>
                    <option {{old('nationality',$user->UserDetail->nationality)=="Muslims"? 'selected':''}}>Muslims</option>
                    <option {{old('nationality',$user->UserDetail->nationality)=="Malays"? 'selected':''}}>Malays</option>
                    <option {{old('nationality',$user->UserDetail->nationality)=="Burghers/Eurasian"? 'selected':''}}>Burghers/Eurasian</option>
                    <option {{old('nationality',$user->UserDetail->nationality)=="Others"? 'selected':''}}>Others</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Religion</label>
                  <select name="religion" class="form-control {{ $errors->has('religion') ? ' is-invalid' : '' }}" style="width:100%">
                    <option {{old('religion',$user->UserDetail->religion)=="Buddhism"? 'selected':''}}>Buddhism</option>
                    <option {{old('religion',$user->UserDetail->religion)=="Hinduism"? 'selected':''}}>Hinduism</option>
                    <option {{old('religion',$user->UserDetail->religion)=="Islam"? 'selected':''}}>Islam</option>
                    <option {{old('religion',$user->UserDetail->religion)=="Christianity"? 'selected':''}}>Christianity</option>
                    <option {{old('religion',$user->UserDetail->religion)=="Other"? 'selected':''}}>Other</option>
                    <option {{old('religion',$user->UserDetail->religion)=="No Religion"? 'selected':''}}>No Religion</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Marital Status</label>
                  <select name="maritalstatus" class="form-control {{ $errors->has('maritalstatus') ? ' is-invalid' : '' }}" style="width:100%">
                    <option {{old('maritalstatus',$user->UserDetail->maritalstatus)=="Single"? 'selected':''}}>Single</option>
                    <option {{old('maritalstatus',$user->UserDetail->maritalstatus)=="Widowed"? 'selected':''}}>Widowed</option>
                    <option {{old('maritalstatus',$user->UserDetail->maritalstatus)=="Divorced"? 'selected':''}}>Divorced</option>
                    <option {{old('maritalstatus',$user->UserDetail->maritalstatus)=="Separated"? 'selected':''}}>Separated</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Height</label>
                  <select name="height" class="js-example-basic-single" style="width:100%">
                    <option {{old('height',$user->UserDetail->height)=="4ft 5in (134cm)"? 'selected':''}}>4ft 5in (134cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="4ft 6in (137cm)"? 'selected':''}}>4ft 6in (137cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="4ft 7in (139cm)"? 'selected':''}}>4ft 7in (139cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="4ft 8in (142cm)"? 'selected':''}}>4ft 8in (142cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="4ft 9in (144cm)"? 'selected':''}}>4ft 9in (144cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="4ft 10in (147cm)"? 'selected':''}}>4ft 10in (147cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="4ft 11in (149cm)"? 'selected':''}}>4ft 11in (149cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft (152cm)"? 'selected':''}}>5ft (152cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 1in (154cm)"? 'selected':''}}>5ft 1in (154cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 2in (157cm)"? 'selected':''}}>5ft 2in (157cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 3in (160cm)"? 'selected':''}}>5ft 3in (160cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 4in (162cm)"? 'selected':''}}>5ft 4in (162cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 5in (165cm)"? 'selected':''}}>5ft 5in (165cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 6in (167cm)"? 'selected':''}}>5ft 6in (167cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 7in (170cm)"? 'selected':''}}>5ft 7in (170cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 8in (172cm)"? 'selected':''}}>5ft 8in (172cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 9in (175cm)"? 'selected':''}}>5ft 9in (175cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 10in (177cm)"? 'selected':''}}>5ft 10in (177cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="5ft 11in (180cm)"? 'selected':''}}>5ft 11in (180cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft (182cm)"? 'selected':''}}>6ft (182cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 1in (18c5m)"? 'selected':''}}>6ft 1in (18c5m)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 2in (187cm)"? 'selected':''}}>6ft 2in (187cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 3in (190cm)"? 'selected':''}}>6ft 3in (190cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 4in (193cm)"? 'selected':''}}>6ft 4in (193cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 5in (195cm)"? 'selected':''}}>6ft 5in (195cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 6in (198cm)"? 'selected':''}}>6ft 6in (198cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 7in (200cm)"? 'selected':''}}>6ft 7in (200cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 8in (203cm)"? 'selected':''}}>6ft 8in (203cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 9in (205cm)"? 'selected':''}}>6ft 9in (205cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 10in (208cm)"? 'selected':''}}>6ft 10in (208cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="6ft 11in (210cm)"? 'selected':''}}>6ft 11in (210cm)</option>
                    <option {{old('height',$user->UserDetail->height)=="7ft (213cm)"? 'selected':''}}>7ft (213cm)</option>
                  </select>
                </div>
                <div class="form-group">
                    <label>Date of birth:</label>
                    <input class="form-control" name="dob" data-inputmask="'alias': 'date'" value="{{date('d/m/Y', $user->UserDetail->dob)}}" />
                </div>
            </div>
          </div>

          {{-- new card start --}}
          <div class="card mt-4">
            <div class="card-body">
              <h4 class="card-title">Contact</h4>
              <div class="form-group">
                <label>Mobile Number</label>
                <input name="mobilenumber" class="form-control" data-inputmask="'alias': 'phonebe'" value="{{ old('mobilenumber',$user->UserDetail->mobilenumber) }}" />
              </div>
              <div class="form-group">
                <label>Address</label>
                <input name="address" type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ old('address',$user->UserDetail->address) }}" placeholder="Address" maxlength="100" required autofocus>
              </div>
              <div class="form-group">
                <label for="district" class="col-form-label text-md-right">District</label>
                <select name="district"  class="js-example-basic-single" style="width:100%" id="date" required>
                  <option {{old('district',$user->UserDetail->district)=="Ampara"? 'selected':''}}>Ampara</option>
                  <option {{old('district',$user->UserDetail->district)=="Anuradhapura"? 'selected':''}}>Anuradhapura</option>
                  <option {{old('district',$user->UserDetail->district)=="Badulla"? 'selected':''}}>Badulla</option>
                  <option {{old('district',$user->UserDetail->district)=="Batticaloa"? 'selected':''}}>Batticaloa</option>
                  <option {{old('district',$user->UserDetail->district)=="Colombo"? 'selected':''}}>Colombo</option>
                  <option {{old('district',$user->UserDetail->district)=="Galle"? 'selected':''}}>Galle</option>
                  <option {{old('district',$user->UserDetail->district)=="Gampaha"? 'selected':''}}>Gampaha</option>
                  <option {{old('district',$user->UserDetail->district)=="Hambantota"? 'selected':''}}>Hambantota</option>
                  <option {{old('district',$user->UserDetail->district)=="Jaffna"? 'selected':''}}>Jaffna</option>
                  <option {{old('district',$user->UserDetail->district)=="Kalutara"? 'selected':''}}>Kalutara</option>
                  <option {{old('district',$user->UserDetail->district)=="Kandy"? 'selected':''}}>Kandy</option>
                  <option {{old('district',$user->UserDetail->district)=="Kegalle"? 'selected':''}}>Kegalle</option>
                  <option {{old('district',$user->UserDetail->district)=="Kilinochchi"? 'selected':''}}>Kilinochchi</option>
                  <option {{old('district',$user->UserDetail->district)=="Kurunegala"? 'selected':''}}>Kurunegala</option>
                  <option {{old('district',$user->UserDetail->district)=="Mannar"? 'selected':''}}>Mannar</option>
                  <option {{old('district',$user->UserDetail->district)=="Matale"? 'selected':''}}>Matale</option>
                  <option {{old('district',$user->UserDetail->district)=="Matara"? 'selected':''}}>Matara</option>
                  <option {{old('district',$user->UserDetail->district)=="Moneragala"? 'selected':''}}>Moneragala</option>
                  <option {{old('district',$user->UserDetail->district)=="Mullaitivu"? 'selected':''}}>Mullaitivu</option>
                  <option {{old('district',$user->UserDetail->district)=="Nuwara Eliya"? 'selected':''}}>Nuwara Eliya</option>
                  <option {{old('district',$user->UserDetail->district)=="Polonnaruwa"? 'selected':''}}>Polonnaruwa</option>
                  <option {{old('district',$user->UserDetail->district)=="Puttalam"? 'selected':''}}>Puttalam</option>
                  <option {{old('district',$user->UserDetail->district)=="Ratnapura"? 'selected':''}}>Ratnapura</option>
                  <option {{old('district',$user->UserDetail->district)=="Trincomalee"? 'selected':''}}>Trincomalee</option>
                  <option {{old('district',$user->UserDetail->district)=="Vavuniya"? 'selected':''}}>Vavuniya</option>
                </select>
              </div>
            </div>
          </div>

          {{-- new card start --}}
          <div class="card mt-4">
            <div class="card-body">
                  <h4 class="card-title">Work & Education</h4>
                  <div class="form-group">
                    <label>Working Sector</label>
                    <select class="js-example-basic-single" onchange="workingsector_select(this)" name="workingsector" style="width:100%">
                      <option {{old('workingsector',$user->UserDetail->workingsector)=="Private Sector"? 'selected':''}}>Private Sector</option>
                      <option {{old('workingsector',$user->UserDetail->workingsector)=="Government Sector"? 'selected':''}}>Government Sector</option>
                      <option {{old('workingsector',$user->UserDetail->workingsector)=="Defense / Civil Service"? 'selected':''}}>Defense / Civil Service</option>
                      <option {{old('workingsector',$user->UserDetail->workingsector)=="Self Employed"? 'selected':''}}>Self Employed</option>
                      <option {{old('workingsector',$user->UserDetail->workingsector)=="Student"? 'selected':''}}>Student</option>
                      <option {{old('workingsector',$user->UserDetail->workingsector)=="Not Working"? 'selected':''}}>Not Working</option>
                    </select>
                  </div>
                  <div class="form-group" id="workingas"
                    @if($user->UserDetail->workingsector=="Not Working" || $user->UserDetail->workingsector=="Student")
                      style="display: none"
                    @else
                      style=""
                    @endif
                  >
                    <label>Working As</label>
                    <select class="js-example-basic-single" name="workingas" id="workingas_input" onchange="workingas_select(this)" style="width:100%">
                      <option {{old('workingas',$user->UserDetail->workingas)=="Civil Engineer"? 'selected':''}}>Civil Engineer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Clerical Official"? 'selected':''}}>Clerical Official</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Commercial Pilot"? 'selected':''}}>Commercial Pilot</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Company Secretary"? 'selected':''}}>Company Secretary</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Computer Professional"? 'selected':''}}>Computer Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Consultant"? 'selected':''}}>Consultant</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Contractor"? 'selected':''}}>Contractor</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Cost Accountant"? 'selected':''}}>Cost Accountant</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Creative"? 'selected':''}}>Creative</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Customer"? 'selected':''}}>Customer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Defense"? 'selected':''}}>Defense</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Dentist"? 'selected':''}}>Dentist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Designer"? 'selected':''}}>Designer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Doctor"? 'selected':''}}>Doctor</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Economist"? 'selected':''}}>Economist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Engineer"? 'selected':''}}>Engineer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Entertainment Professional"? 'selected':''}}>Entertainment Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Event Manager"? 'selected':''}}>Event Manager</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Executive"? 'selected':''}}>Executive</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Factory"? 'selected':''}}>Factory</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Farmer"? 'selected':''}}>Farmer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Fashion Designer"? 'selected':''}}>Fashion Designer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Finance Professional"? 'selected':''}}>Finance Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Flight Attendant"? 'selected':''}}>Flight Attendant</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Government Employee"? 'selected':''}}>Government Employee</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Health Care Professional"? 'selected':''}}>Health Care Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Home Maker"? 'selected':''}}>Home Maker</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Hotel and Restaurant Professional"? 'selected':''}}>Hotel and Restaurant Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Human Resources Professional"? 'selected':''}}>Human Resources Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Interior Designer"? 'selected':''}}>Interior Designer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Investment Professional"? 'selected':''}}>Investment Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="IT / Telecoms"? 'selected':''}}>IT / Telecoms</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Journalist"? 'selected':''}}>Journalist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Lawyer"? 'selected':''}}>Lawyer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Lecturer"? 'selected':''}}>Lecturer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Legal Professional"? 'selected':''}}>Legal Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Manager"? 'selected':''}}>Manager</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Marketing Professional"? 'selected':''}}>Marketing Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Media Professional"? 'selected':''}}>Media Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Medical Professional"? 'selected':''}}>Medical Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Medical Transcriptionist"? 'selected':''}}>Medical Transcriptionist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Merchant Naval Officer"? 'selected':''}}>Merchant Naval Officer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Military"? 'selected':''}}>Military</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Nurse"? 'selected':''}}>Nurse</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Occupational"? 'selected':''}}>Occupational</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Optician"? 'selected':''}}>Optician</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Pharmacist"? 'selected':''}}>Pharmacist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Physician Assistant"? 'selected':''}}>Physician Assistant</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Physicist"? 'selected':''}}>Physicist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Physiotherapist"? 'selected':''}}>Physiotherapist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Pilot"? 'selected':''}}>Pilot</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Politician"? 'selected':''}}>Politician</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Production professional"? 'selected':''}}>Production professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Professor"? 'selected':''}}>Professor</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Psychologist"? 'selected':''}}>Psychologist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Public Relations Professional"? 'selected':''}}>Public Relations Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Real Estate Professional"? 'selected':''}}>Real Estate Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Research Scholar"? 'selected':''}}>Research Scholar</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Retail Professional"? 'selected':''}}>Retail Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Retired Person"? 'selected':''}}>Retired Person</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Sales Professional"? 'selected':''}}>Sales Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Scientist"? 'selected':''}}>Scientist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Social Worker"? 'selected':''}}>Social Worker</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Software Consultant"? 'selected':''}}>Software Consultant</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Sportsman"? 'selected':''}}>Sportsman</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Teacher"? 'selected':''}}>Teacher</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Technician"? 'selected':''}}>Technician</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Training Professional"? 'selected':''}}>Training Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Transportation Professional"? 'selected':''}}>Transportation Professional</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Veterinary Doctor"? 'selected':''}}>Veterinary Doctor</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Volunteer"? 'selected':''}}>Volunteer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Writer"? 'selected':''}}>Writer</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Zoologist"? 'selected':''}}>Zoologist</option>
                      <option {{old('workingas',$user->UserDetail->workingas)=="Not listed here"? 'selected':''}}>Not listed here</option>
                    </select>
                  </div>
                  <div class="form-group" id="profession"
                    @if($user->UserDetail->workingsector=="Not Working" || $user->UserDetail->workingsector=="Student")
                      style="display: none"
                    @else
                      @if($user->UserDetail->workingas=="Not listed here")
                        style=""
                      @else
                        style="display: none"
                      @endif
                    @endif
                    
                  >
                    <label>Your Profession</label>
                    <input type="text" class="form-control {{ $errors->has('profession') ? ' is-invalid' : '' }}" name="profession" value="{{old('profession',$user->UserDetail->profession)}}" placeholder="Soldier" maxlength="50" id="profession_input" autofocus>
                  </div>
                  <div class="form-group" id="income"
                    @if($user->UserDetail->workingsector=="Not Working" || $user->UserDetail->workingsector=="Student")
                      style="display: none"
                    @else
                      style=""
                    @endif
                  >
                    <label>Income</label>
                    <select class="js-example-basic-single" name="income" id="income_input" style="width:100%">
                      <option {{old('income',$user->UserDetail->income)=="Less than LKR 25000"? 'selected':''}}>Less than LKR 25000</option>
                      <option {{old('income',$user->UserDetail->income)=="LKR 25000 - 50000"? 'selected':''}}>LKR 25000 - 50000</option>
                      <option {{old('income',$user->UserDetail->income)=="LKR 50000 - 75000"? 'selected':''}}>LKR 50000 - 75000</option>
                      <option {{old('income',$user->UserDetail->income)=="LKR 75000 - 100000"? 'selected':''}}>LKR 75000 - 100000</option>
                      <option {{old('income',$user->UserDetail->income)=="LKR 100000 - 150000"? 'selected':''}}>LKR 100000 - 150000</option>
                      <option {{old('income',$user->UserDetail->income)=="LKR 150000 - 200000"? 'selected':''}}>LKR 150000 - 200000</option>
                      <option {{old('income',$user->UserDetail->income)=="LKR 250000 - 300000"? 'selected':''}}>LKR 250000 - 300000</option>
                      <option {{old('income',$user->UserDetail->income)=="Above LKR 300000"? 'selected':''}}>Above LKR 300000</option>
                    </select>
                  </div>
            </div>
          </div>

          {{-- new card start --}}
          <div class="card mt-4">
            <div class="card-body">
              <input type="hidden" name="_method" value="PUT" />

              <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
              </button>
            </div>
          </div>
          </form>
        </div>
      </div>
      
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('inc.footer')
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>

@endsection

@section('css_script')
<link rel="stylesheet" href="{{ asset('theme_src/vendors/lightgallery/css/lightgallery.css') }}">
@endsection

@section('js_script')
<script src="{{ asset('theme_src/js/select2.js') }}"></script>
<script src="{{ asset('theme_src/js/x-editable.js') }}"></script>
<script src="{{ asset('theme_src/vendors/lightgallery/js/lightgallery-all.min.js') }}"></script>
<script src="{{ asset('theme_src/js/light-gallery.js') }}"></script>
<script type="text/javascript">

    //working sector
    function workingsector_select(workingsectorObj){
      var working_sector = workingsectorObj.value;

      if(working_sector=="Not Working" || working_sector=="Student"){
        $('#workingas').hide();
        $('#income').hide();

        $('#workingas_input').val(null).change();
        $('#income_input').val(null).change();
        $('#profession_input').val(null).change();
      }
      else{
        $('#workingas_input').val('Civil Engineer').change();
        $('#income_input').val('Less than LKR 25000').change();

        $('#workingas').show();
        $('#income').show();
      }
      
    }

    //working as not listed
    function workingas_select(workingasObj) {
      var working_as = workingasObj.value;

      if(working_as=="Not listed here"){
        $('#profession').show();
        $('#profession_input').attr('required', '');
      }
      else{
        $('#profession').hide();
        $('#profession_input').removeAttr('required');
      }
    }

</script>
@endsection

