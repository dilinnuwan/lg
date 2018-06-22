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

    {!! App\Helper::interest_button($user->id, $some_user->id) !!}
    
    <button class="btn btn-light btn-block btn-xs mt-3 mb-4">Report</button>


    </div>
</div>