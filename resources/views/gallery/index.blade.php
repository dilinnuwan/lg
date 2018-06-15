@extends('layouts.app_nav')

@section('title', 'Gallery - ')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">

      {{-- ::::::Page Content Here:::::: --}}
      <div class="row content">
        <div class="col-md-12 mt-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Gallery</h4>

            @if($user->Gallery->count() != 0)
            <div class="row mb-4">
              	@foreach($user->Gallery as $image)
              	<div class="col-md-3 mt-2">
              		<div class="card" style="border-width: 0px;">
              			<span style=""></span>
              			<img class="card-img-top img-fluid" style="border-radius: 1px; width: auto; 
                    @if(!$image->active)
                    -webkit-filter: grayscale(100%) blur(5px);
                    filter: grayscale(100%) blur(5px);
                    @endif
                    " src="{{asset('storage/upload_images_thumb/'.$image->image_path)}}" alt="card image">
                    {{-- <div class="btn-group"  role="group">

                       <a href="{{url('/gallery/delete/'.$image->id)}}" class="btn btn-light btn-block mt-1"><i class="link-icon mdi mdi-delete"></i>Hide</a>
              			   <a href="{{url('/gallery/delete/'.$image->id)}}" class="btn btn-danger btn-block mt-1"><i class="link-icon mdi mdi-delete"></i>Remove</a>
                    </div> --}}

                      <div class="btn-group dropdown mt-1" style="border:none;">
                        <button type="button" class="btn
                          @if(!$image->active)
                          btn-secondary
                          @else
                          btn-primary
                          @endif
                          btn-block dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Settings <i class="fa fa-caret-down fa-fw"></i>
                        </button>
                        <div class="dropdown-menu">
                          @if($image->active)
                            <a class="dropdown-item" href="{{url('/gallery/stat/'.$image->id.'/hide')}}"><i class="fa fa-eye-slash fa-fw"></i>Hide</a>
                          @else
                            <a class="dropdown-item" href="{{url('/gallery/stat/'.$image->id.'/show')}}"><i class="fa fa-eye fa-fw"></i>Activate</a>
                          @endif
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{url('/gallery/delete/'.$image->id)}}"><i class="fa fa-trash-o text-danger fa-fw"></i>Delete</a>
                        </div>
                      </div>


              		</div>
              	</div>
              	@endforeach
      			</div>
      			@endif


              {{-- If the gallery is empty --}}
              @if($user->Gallery->count() < 8)
              <form action="{{ route('gallery.upload') }}" enctype="multipart/form-data" class="dropzone" id="fileupload" method="POST">
	            @csrf
	            <div class="dz-message" data-dz-message><span>Your Can Upload {{8-$user->Gallery->count()}} Images</span></div>
	            <div class="fallback">
	              <input name="file" type="files" multiple accept="image/jpeg, image/jpg" />
	            </div>
	          </form>
	          @endif

	          {{-- <form action="{{ route('gallery.upload') }}" enctype="multipart/form-data" method="post">
			    Select image to upload:
			    <input type="file" name="file[]" id="fileToUpload" multiple accept="image/jpeg, image/jpg">
			    @csrf
			    <input type="submit" value="Upload Image" name="submit">
			</form> --}}

          	</div>
          </div>
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
<link rel="stylesheet" href="{{ asset('theme_src/vendors/lightgallery/css/lightgallery.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css">
<style type="text/css">
    .dropzone {
        border:2px dashed #0088ff;
        border-radius: 10px;
        height: auto;
        min-height: 0px !important;
        text-align: center;
    }
    .dropzone .dz-default.dz-message {
        height: 70px;
        background-size: 132px 132px;
        margin-top: -101.5px;
        background-position-x:center;


    }
    .dropzone .dz-default.dz-message span {
        display: block;
        margin-top: 145px;
        font-size: 20px;
        text-align: center;
        color: #CCC;
    }
</style>
@endsection

@section('js_script')
<script src="{{ asset('theme_src/vendors/lightgallery/js/lightgallery-all.min.js') }}"></script>
<script src="{{ asset('theme_src/js/light-gallery.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script type="text/javascript">
  Dropzone.options.fileupload = {
  	paramName: 'file[]',
  	acceptedFiles: ".jpeg,.jpg",
  	maxFiles: {{8-$user->Gallery->count()}},
  	maxFilesize: 5.0,
  	init: function () {
        // Set up any event handlers
        this.on("queuecomplete", function (file) {
		      location.reload();
		  });
    }
  }



</script>
@endsection