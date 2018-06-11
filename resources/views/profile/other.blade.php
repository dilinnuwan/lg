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
              @if($some_user->Avatar->filename == null)
                @if($some_user->UserDetail->gender=="Male")
                <img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                @else
                <img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                @endif
              @else
                <img src="{{ asset('theme_src/profile_pics/'.$some_user->Avatar->filename) }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
              @endif
              <h4>{{$some_user->name}}</h4>
              <p class="text-muted">{{$some_user->UserDetail->age}} - {{$some_user->UserDetail->district}}</p>
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

              <button class="btn btn-primary btn-block btn-sm mt-3 mb-4">Follow</button>

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
              <div class="wrapper d-flex align-items-center py-2 
              @if( !$loop->last )
                border-bottom
              @endif
              ">
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
          {{-- new card start --}}
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Basic Details</h4>
                
                <div class="row border-bottom py-3">
                  <div class="col-md-3">Name</div>
                  <div class="col"><h5>{{$some_user->firstname.' '.$some_user->lastname}}</h5></div>
                </div>

                {{-- <div class="row border-bottom py-3">
                  <div class="col-md-3">Email</div>
                  <div class="col"><h5>{{$some_user->email}}</h5></div>
                </div> --}}

                <div class="row border-bottom py-3">
                  <div class="col-md-3">Gender</div>
                  <div class="col"><h5>{{$some_user->UserDetail->gender}}</h5></div>
                </div>

                <div class="row border-bottom py-3">
                  <div class="col-md-3">Nationality</div>
                  <div class="col"><h5>{{$some_user->UserDetail->nationality}}</h5></div>
                </div>

                <div class="row border-bottom py-3">
                  <div class="col-md-3">Religion</div>
                  <div class="col"><h5>{{$some_user->UserDetail->religion}}</h5></div>
                </div>

                <div class="row border-bottom py-3">
                  <div class="col-md-3">Marital Status</div>
                  <div class="col"><h5>{{$some_user->UserDetail->maritalstatus}}</h5></div>
                </div>

                <div class="row py-3">
                  <div class="col-md-3">Height</div>
                  <div class="col"><h5>{{$some_user->UserDetail->height}}</h5></div>
                </div>

                {{-- <div class="row py-3">
                  <div class="col-md-3">Date of birth</div>
                  <div class="col"><h5>{{date('d/m/Y', $some_user->UserDetail->dob)}}</h5></div>
                </div> --}}

            </div>
          </div>

          {{-- new card start --}}
          <div class="card mt-4">
            <div class="card-body">
              <h4 class="card-title">Contact</h4>

              {{-- <div class="row border-bottom py-3">
                <div class="col-md-3">Mobile Number</div>
                <div class="col"><h5>{{$some_user->UserDetail->mobilenumber}}</h5></div>
              </div>

              <div class="row border-bottom py-3">
                <div class="col-md-3">Address</div>
                <div class="col"><h5>{{$some_user->UserDetail->address}}</h5></div>
              </div> --}}

              <div class="row py-3">
                <div class="col-md-3">District</div>
                <div class="col"><h5>{{$some_user->UserDetail->district}}</h5></div>
              </div>

            </div>
          </div>

          {{-- new card start --}}
          <div class="card mt-4">
            <div class="card-body">
                  <h4 class="card-title">Work & Education</h4>

                  <div class="row py-3
                  @if($some_user->UserDetail->workingsector=="Not Working" || $some_user->UserDetail->workingsector=="Student")
                  @else
                    border-bottom
                  @endif
                  ">
                    <div class="col-md-3">Working Sector</div>
                    <div class="col"><h5>{{$some_user->UserDetail->workingsector}}</h5></div>
                  </div>

                  @if($some_user->UserDetail->workingsector=="Not Working" || $some_user->UserDetail->workingsector=="Student")
                  @else
                  <div class="row border-bottom py-3">
                    <div class="col-md-3">Profession</div>
                    <div class="col"><h5>
                      @if($some_user->UserDetail->workingas !== "Not listed here")
                      {{$some_user->UserDetail->workingas}}
                      @else
                      {{$some_user->UserDetail->profession}}
                      @endif
                    </h5></div>
                  </div>
                  @endif

                  @if($some_user->UserDetail->workingsector=="Not Working" || $some_user->UserDetail->workingsector=="Student")
                  @else
                  <div class="row py-3">
                    <div class="col-md-3">Income</div>
                    <div class="col"><h5>{{$some_user->UserDetail->income}}</h5></div>
                  </div>
                  @endif
                  
            </div>
          </div>

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

