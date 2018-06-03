@if(count($errors)>0)
	<div class="alert alert-danger ">
	@foreach($errors->all() as $error)
		<i class="icon-genius"></i> <strong>{{$error}}</strong><br>
	@endforeach
	</div>
@endif

@if(session('success'))
	<div class="alert alert-success">
	  <i class="icon-happy"></i> <strong>{{session('success')}}</strong>
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger">
	  <i class="icon-genius"></i> <strong>{{session('error')}}</strong>
	</div>
@endif