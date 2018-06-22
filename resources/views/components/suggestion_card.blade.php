{{-- new card start --}}
<div class="card mt-2 mb-2">
  <div class="card-body">
    <h4 class="card-title">Suggestions</h4>
    @if($suggestions->count() == 0)
      <div class="wrapper d-flex py-2">
        <p class="text-muted text-center" >No suggestions yet.</p>
      </div>
    @endif

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
        <button type="button" class="btn btn-warning btn-xs interest" data-user_id="{{$suggestion->User->id}}" data-type="interest" style="background-color: #ec6190; border-color: #ec6190;">
          <i class="mdi mdi-heart"></i>
          INTEREST
        </button>
      </div>
    </div>
    @endforeach

  </div>
</div>