@extends('layouts.app_nav')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      
      <div class="row content">

        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Basic Details</h4>
                @include('inc.messages')
                <form action="{{ route('auth.password-change') }}" method="post" role="form" class="form-horizontal">
                    @csrf

                        <div class="row form-group{{ $errors->has('old') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-3 col-form-label">Old Password</label>

                            <div class="col-sm-9">
                                <input id="password" type="password" class="form-control" name="old">
                            </div>
                        </div>

                            <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>

                                <div class="col-sm-9">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="row form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-sm-3 col-form-label">Confirm Password</label>

                                <div class="col-sm-9">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                        <div class="row form-group mt-5">
                            <div class="col-md-12">
                            <input type="hidden" name="_method" value="PUT" />
                            <button type="submit" class="btn btn-primary form-control">Change</button>
                                </div>
                        </div>
                </form>

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