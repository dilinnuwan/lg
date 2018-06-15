@extends('layouts.setup')

@section('title', 'Profile Picture Setup - ')

@section('content')
<div class="container-fluid page-body-wrapper">
	<div class="main-panel">
		<div class="content-wrapper">

			<div class="row">
				<div class="col-12 grid-margin">
					<form id="form">
						@csrf
						<div>
							<h3>Profile Picture Setup</h3>
							@include('inc.messages')
							<section>
								<div class="card">
									<div class="card-body">
										<div class="form-group">

											<div class="row">
												<div class="col-md-4 offset-md-4 text-center ">
													@if($user_details->gender=="Male")
													<img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-lg rounded-circle mb-1 mt-5" alt="profile image"/>
													@else
													<img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-lg rounded-circle mb-1 mt-5" alt="profile image"/>
													@endif
								                    <p class="mt-4 card-text">
								                            Please upload your profile picture
								                    </p>
								                    <div class="border-top pt-3">
								                    	<div class="form-group">
									                      <input type="file" name="img[]"  accept="image/jpeg" id="upload_image" class="file-upload-default">
									                      <div class="input-group col-xs-12">
									                        <input type="text" class="form-control file-upload-info" disabled placeholder="Select Image">
									                        <span class="input-group-append">
									                          <button class="file-upload-browse btn btn-success" type="button">Select</button>
									                        </span>
									                      </div>
									                    </div>

								                    </div>
							                    </div>
						                    </div>




										</div>
	                				</div>
	            				</div>
	            			</section>
                       	</div>
                       </form>
                   </div>
               </div>
           </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('inc.footer')
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>

<!-- Modal Starts -->
<div class="modal" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel-2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadModallLabel-2">Crop Profile Picture</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          		<div id="image_demo" style="width:350px; margin-top:30px"></div>
          		<div class="col-md-4 offset-md-4">
	          		<button class="btn btn-success crop_image">Crop & Upload Image</button>
	          	</div>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-success">Submit</button> --}}
          <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
</div>
<!-- Modal Ends -->

<form id="image_form" action="{{ route('setup.avatar.update',$user->id) }}" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="_method" value="PUT" />
	<input type="hidden" name="avatar" id="submit_image">
</form>

@endsection


@section('css_script')
<link rel="stylesheet" href="{{ asset('theme_src/css/croppie.css') }}" />
<style type="text/css">
	.modal-lg {
	    max-width: 400px !important;
	}
</style>
@endsection

@section('js_script')
<script src="{{ asset('theme_src/js/select2.js') }}"></script>
<script src="{{ asset('theme_src/js/moment.js') }}"></script>
<script src="{{ asset('theme_src/js/file-upload.js') }}"></script>

<script src="{{ asset('theme_src/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme_src/js/modal-demo.js') }}"></script>
<script src="{{ asset('theme_src/js/croppie.js') }}"></script>

<script type="text/javascript">
$(document).ready(function(){

	$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
    	console.log(response);
    	$('#uploadModal').modal('hide');
    	$('#submit_image').val(response);
    	$('#image_form').submit();

      // $.ajax({
      //   url:"upload.php",
      //   type: "POST",
      //   data:{"image": response},
      //   success:function(data)
      //   {
      //     $('#uploadimageModal').modal('hide');
      //     $('#uploaded_image').html(data);
      //   }
      // });
    })
  });

});  
</script>
@endsection