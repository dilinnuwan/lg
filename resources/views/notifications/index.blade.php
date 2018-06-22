@extends('layouts.app_nav')

@section('title', 'Notifications - ')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">

      {{-- ::::::Page Content Here:::::: --}}
      <div class="row">
      	<div class="col-md-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                
                <div class="fluid-container">
                @if($user->Notification->count() == 0)
                	<div class="col-md-12 text-center">No notifications yet.</div>
                @else

	                @foreach($notifications as $notification)

	                	@if($notification->type == "interest_request")

	                 		<div class="row ticket-card mt-3 pb-2 @if(!$loop->last) border-bottom @endif pb-3 mb-3">
	                    		<div class="col-md-1">
	                      			@if($notification->sent_user->Avatar->filename == null)
						              @if($user->UserDetail->gender=="Male")
						              <img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-sm rounded-circle mb-4 mb-md-0" alt="profile image"/>
						              @else
						              <img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-sm rounded-circle mb-4 mb-md-0" alt="profile image"/>
						              @endif
						            @else
						              <img src="{{ asset('theme_src/profile_pics/'.$notification->sent_user->Avatar->filename) }}" class="img-sm rounded-circle mb-4 mb-md-0" alt="{{$notification->sent_user->firstname}}"/>
						            @endif
	                    		</div>
	                    		<div class="ticket-details col-md-9 ">
	                      			<div class="d-flex">
	                        			<p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">{{$notification->sent_user->firstname.' '.$notification->sent_user->lastname}}</p>
	                      			</div>
	                      			<p class="text-small text-gray mb-2">is interested to know you. Do you want to accept @if($notification->sent_user->UserDetail->gender == "Male") his @else her @endif request?</p>
		                      		<div class="row text-gray d-md-flex d-none">
		                        		<div class="col-4 d-flex">
		                          			<p class="mb-0 mr-2 text-muted text-muted">{{date('Y/m/d H:m A', $notification->timestamp)}}</p>
		                        		</div>
		                      		</div>
	                    		</div>
	                    		<div class="ticket-actions col-md-2">
	                      			<div class="btn-group dropdown">
	                        			<a href="{{ url('/profile/'.$notification->sent_user->id) }}" class="btn btn-warning btn-sm" >
	                          				View
	                        			</a>
	                      			</div>
	                    		</div>
	                  		</div>
	                  	@elseif($notification->type == "interest_request_accept")
	                  		<div class="row ticket-card mt-3 pb-2 @if(!$loop->last) border-bottom @endif pb-3 mb-3">
	                    		<div class="col-md-1">
	                      			@if($notification->sent_user->Avatar->filename == null)
						              @if($user->UserDetail->gender=="Male")
						              <img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-sm rounded-circle mb-4 mb-md-0" alt="profile image"/>
						              @else
						              <img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-sm rounded-circle mb-4 mb-md-0" alt="profile image"/>
						              @endif
						            @else
						              <img src="{{ asset('theme_src/profile_pics/'.$notification->sent_user->Avatar->filename) }}" class="img-sm rounded-circle mb-4 mb-md-0" alt="{{$notification->sent_user->firstname}}"/>
						            @endif
	                    		</div>
	                    		<div class="ticket-details col-md-9">
	                      			<div class="d-flex">
	                        			<p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">{{$notification->sent_user->firstname.' '.$notification->sent_user->lastname}}</p>
	                      			</div>
	                      			<p class="text-small text-gray mb-2">accepted your request.</p>
		                      		<div class="row text-gray d-md-flex d-none">
		                        		<div class="col-4 d-flex">
		                          			<p class="mb-0 mr-2 text-muted text-muted">{{date('Y/m/d H:m A', $notification->timestamp)}}</p>
		                        		</div>
		                      		</div>
	                    		</div>
	                    		<div class="ticket-actions col-md-2">
	                      			<div class="btn-group dropdown">
	                        			<a href="{{ url('/profile/'.$notification->sent_user->id) }}" class="btn btn-success btn-sm" >
	                          				View
	                        			</a>
	                      			</div>
	                    		</div>
	                  		</div>
	                	@endif
	                @endforeach
	            @endif

                </div>
              </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 grid-margin">
        	{{$notifications->links()}}
        </div>

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

