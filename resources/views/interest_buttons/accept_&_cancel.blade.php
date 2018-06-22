<div class="btn-group dropdown " id="primary_{{$user_id}}">
  <button type="button" class="btn btn-primary btn-fw btn-xs interest_update_3" data-interest_record_id="{{$interest_record_id}}" data-user_id="{{$user_id}}" data-interest_id="{{$interest_id}}">
    ACCEPT
  </button>
  <button type="button" class="btn btn-dark btn-fw btn-xs dropdown-toggle" style="min-width: 20px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-caret-down fa-fw" style="margin-right: 0rem;"></i>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item interest_delete_3" data-user_id="{{$user_id}}" data-interest_id="{{$interest_id}}"><i class="fa fa-times text-danger fa-fw"></i>Cancel</a>
  </div>
</div>
{{-- done --}}

{{-- if accept --}}
<div class="btn-group dropdown" id="secondary_{{$user_id}}" style="display: none;">
  <button type="button" class="btn btn-success btn-fw btn-xs dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="mdi mdi-heart"></i> INTERESTED
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item interest_delete_4" data-user_id="{{$user_id}}" data-interest_id="{{$interest_id}}"><i class="fa fa-times text-danger fa-fw"></i>Cancel</a>
  </div>
</div>


{{-- if accept->cancle --}}
<button class="btn btn-warning btn-xs interest_request_3" id="thired_{{$user_id}}" data-user_id="{{$interest_id}}" data-interest_id="{{$user_id}}" style="background-color: #ec6190; border-color: #ec6190;display: none">
	<i class="fa fa-paper-plane fa-fw" ></i>REQUEST
</button>


{{-- if interest_request_3 --}}
<div class="btn-group dropdown" id="fourth_{{$user_id}}" style="display: none;">
  <button type="button" class="btn btn-dark btn-fw btn-xs dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    REQUEST SENT
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item interest_delete_5" data-user_id="{{$interest_id}}" data-interest_id="{{$user_id}}"><i class="fa fa-times text-danger fa-fw"></i>Cancel</a>
  </div>
</div>

{{-- User_id uniqe --}}