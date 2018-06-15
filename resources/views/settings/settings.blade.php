@extends('layouts.app_nav')

@section('title', 'Settings - ')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row content">
        <div class="col-md-12">
          <h3>Settings</h3>

          @include('inc.messages')
        </div>    
      </div>
      <div class="row content">

        <div class="col-md-6 mt-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Privacy Settings</h4>

              <form action="{{ route('privacy_settings') }}" method="post" role="form" class="form-horizontal">
                <div class="form-group row">
                  <label class="col-sm-9 col-form-label">Hide <b>Email Address</b></label>
                  <div class="col-sm-3">
                    <!-- Rounded switch -->
                    <label class="switch">
                      <input value="1" name="email" type="checkbox" {{ !$privacySettings->email ? "checked" : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-9 col-form-label">Hide <b>Date of birth</b></label>
                  <div class="col-sm-3">
                    <!-- Rounded switch -->
                    <label class="switch">
                      <input value="1" name="dob" type="checkbox" {{ !$privacySettings->dob ? "checked" : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-9 col-form-label">Hide <b>Mobile Number</b></label>
                  <div class="col-sm-3">
                    <!-- Rounded switch -->
                    <label class="switch">
                      <input value="1" name="mobile_number" type="checkbox" {{ !$privacySettings->mobile_number ? "checked" : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-9 col-form-label">Hide <b>Address</b></label>
                  <div class="col-sm-3">
                    <!-- Rounded switch -->
                    <label class="switch">
                      <input value="1" name="address" type="checkbox" {{ !$privacySettings->address ? "checked" : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-9 col-form-label">Hide <b>Income</b></label>
                  <div class="col-sm-3">
                    <!-- Rounded switch -->
                    <label class="switch">
                      <input value="1" name="income" type="checkbox" {{ !$privacySettings->income ? "checked" : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>

                <div class="row form-group mt-5">
                  <div class="col-md-12">
                    @csrf
                    <input type="hidden" name="_method" value="PUT" />
                    <button type="submit" class="btn btn-primary form-control">Save</button>
                  </div>
                </div>

              </form>

            </div>
          </div>
        </div>

        <div class="col-md-6 mt-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Account Settings</h4>

                <div class="form-group row">
                  <label class="col-sm-9 col-form-label">Password Change</label>
                  <div class="col-sm-3">
                    <a class="btn btn-primary" href="{{ url('/password-change') }}" >Change</a>
                  </div>
                </div>

            </div>
          </div>
        </div>

        <div class="col-md-6 mt-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Account Removal</h4>

                <div class="form-group row">
                  <label class="col-sm-9 col-form-label">Delete Account</label>
                  <div class="col-sm-3">
                    <button class="btn btn-danger" type="button">Remove</button>
                  </div>
                </div>

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