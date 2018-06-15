{{-- new card start --}}
@if($some_user->Gallery->count() != 0)
<div class="card mt-2">
  <div class="card-body">
    <h4 class="card-title">Gallery</h4>
    <div id="lightgallery" class="row lightGallery">
      @foreach($some_user->Gallery as $image)
      @if($image->active)
      	<a href="{{asset('storage/upload_images/'.$image->image_path)}}" class="image-tile"><img src="{{asset('storage/upload_images_thumb/'.$image->image_path)}}"></a>
      	@endif
      @endforeach
    </div>
  </div>
</div>
@endif