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
    <h4>{{$user->firstname}}</h4>
    <p class="text-muted">{{$user->UserDetail->age}} - {{$user->UserDetail->district}}</p>
    

    {{-- <button class="btn btn-primary btn-block btn-sm mt-3 mb-4">Follow</button> --}}

    </div>
</div>