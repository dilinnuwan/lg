@extends('layouts.app_nav')

@section('title', 'Requests Sent - ')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">

      {{-- ::::::Page Content Here:::::: --}}

      <div class="row">
        <div class="col-md-12">
        <h4>
          Requests
        </h4>
      </div>
      </div>
      <div class="row">
        @if($requests->count()!=0)
              @foreach($requests as $request)
              {{-- new card start --}}
              <div class="col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card text-center">
              <div class="card-body">
                @if($request->user->Avatar->filename == null)
                  @if($request->user->UserDetail->gender=="Male")
                  <img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                  @else
                  <img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                  @endif
                @else
                  <img src="{{ asset('theme_src/profile_pics/'.$request->user->Avatar->filename) }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                @endif

                <a href="{{ url('/profile/'.$request->user->id) }}">
                <h4>{{$request->user->firstname}}</h4>
                <p class="text-muted">{{$request->user->UserDetail->age}} - {{$request->user->UserDetail->district}}</p>
                </a>

                {!! App\Helper::interest_button($user->id, $request->user->id) !!}

                </div>
            </div>
          </div>
              @endforeach
              @else
              <div class="col-md-12 col-sm-12 grid-margin stretch-card">
            <div class="card text-center">
              <div class="card-body">
                No Requests yet
              </div>
            </div>
          </div>
        @endif


      </div>
      
      {{-- ::::::Page Content Stops:::::: --}}
      
    </div>
    <!-- content-wrapper ends -->
    @include('inc.footer')
  </div>
  <!-- main-panel ends -->
</div>

@endsection

@section('css_script')
@endsection

@section('js_script')
@endsection

