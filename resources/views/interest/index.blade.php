@extends('layouts.app_nav')

@section('title', 'Interests - ')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">

      {{-- ::::::Page Content Here:::::: --}}

      <div class="row">

      	@if($interests->count()!=0)
      	@foreach($interests as $interest)

      		@if($interest->interest_user->id == $user->id)
	      	{{-- new card start --}}
	      	<div class="col-md-4 col-sm-6 grid-margin stretch-card">
				<div class="card text-center">
				  <div class="card-body">
				    @if($interest->user->Avatar->filename == null)
				      @if($interest->user->UserDetail->gender=="Male")
				      <img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
				      @else
				      <img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
				      @endif
				    @else
				      <img src="{{ asset('theme_src/profile_pics/'.$interest->user->Avatar->filename) }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
				    @endif

				    <a href="{{ url('/profile/'.$interest->user->id) }}">
				    <h4>{{$interest->user->firstname}}</h4>
				    <p class="text-muted">{{$interest->user->UserDetail->age}} - {{$interest->user->UserDetail->district}}</p>
					</a>
				    
				    {!! App\Helper::interest_button($user->id, $interest->user->id) !!}

				    </div>
				</div>
			</div>
			@else
			{{-- new card start --}}
	      	<div class="col-md-4 col-sm-6 grid-margin stretch-card">
				<div class="card text-center">
				  <div class="card-body">
				    @if($interest->interest_user->Avatar->filename == null)
				      @if($interest->interest_user->UserDetail->gender=="Male")
				      <img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
				      @else
				      <img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
				      @endif
				    @else
				      <img src="{{ asset('theme_src/profile_pics/'.$interest->interest_user->Avatar->filename) }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
				    @endif

				    <a href="{{ url('/profile/'.$interest->interest_user->id) }}">
				    <h4>{{$interest->interest_user->firstname}}</h4>
				    <p class="text-muted">{{$interest->interest_user->UserDetail->age}} - {{$interest->interest_user->UserDetail->district}}</p>
				    </a>

				    {!! App\Helper::interest_button($user->id, $interest->interest_user->id) !!}

				    </div>
				</div>
			</div>
			@endif


      	@endforeach
      	@else
      	<div class="col-md-12 col-sm-12 grid-margin stretch-card">
			<div class="card text-center">
			  <div class="card-body">
			  	No Interests yet
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

