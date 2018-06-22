@extends('layouts.app_nav')

@section('title', 'Search - ')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">

      {{-- ::::::Page Content Here:::::: --}}

      <div class="row">

      @if($all_users->count()!=0)
      	@foreach($all_users as $user_from_all)
      	{{-- new card start --}}
      	<div class="col-md-4 col-sm-6 grid-margin stretch-card">
			<div class="card text-center">
			  <div class="card-body">
			    @if($user_from_all->Avatar->filename == null)
			      @if($user_from_all->UserDetail->gender=="Male")
			      <img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
			      @else
			      <img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
			      @endif
			    @else
			      <img src="{{ asset('theme_src/profile_pics/'.$user_from_all->Avatar->filename) }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
			    @endif

			    <a href="{{ url('/profile/'.$user_from_all->id) }}">
			    <h4>{{$user_from_all->firstname}}</h4>
			    <p class="text-muted">{{$user_from_all->UserDetail->age}} - {{$user_from_all->UserDetail->district}}</p>
				</a>
			    
			    
			    	{!! App\Helper::interest_button($user->id, $user_from_all->id) !!}

			    </div>
			</div>
		</div>
      	@endforeach
      	@else
      	<div class="col-md-12 col-sm-12 grid-margin stretch-card">
			<div class="card text-center">
			  <div class="card-body">
			  	No Requests sent yet
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

