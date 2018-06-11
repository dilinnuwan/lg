@extends('layouts.app_nav')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      
      <div class="row content">

        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Settings</h4>
                @include('inc.messages')
                

            </div>
          </div>

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

@endsection

@section('css_script')
@endsection

@section('js_script')
@endsection