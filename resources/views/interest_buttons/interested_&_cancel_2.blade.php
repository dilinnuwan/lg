<div class="btn-group dropdown" id="primary_{{$interest_id}}">
  <button type="button" class="btn btn-success btn-fw btn-xs dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="mdi mdi-heart"></i> INTERESTED
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item interest_delete_8" data-user_id="{{$user_id}}" data-interest_id="{{$interest_id}}"><i class="fa fa-times text-danger fa-fw"></i>Cancel</a>
  </div>
</div>


<button class="btn btn-warning btn-xs interest_request_8" id="secondary_{{$interest_id}}" data-user_id="{{$user_id}}" data-interest_id="{{$interest_id}}" style="background-color: #ec6190; border-color: #ec6190;display: none">
	<i class="fa fa-paper-plane fa-fw" ></i>REQUEST
</button>


<div class="btn-group dropdown" id="thired_{{$interest_id}}" style="display: none;">
  <button type="button" class="btn btn-dark btn-fw btn-xs dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    REQUEST SENT
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item interest_delete_7" data-user_id="{{$user_id}}" data-interest_id="{{$interest_id}}"><i class="fa fa-times text-danger fa-fw"></i>Cancel</a>
  </div>
</div>