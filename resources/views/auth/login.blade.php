{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                
                <div class="card-body">
                    @include('inc.messages')
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.app')

@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
  <div class="content-wrapper auth p-0 theme-two">
    <div class="row d-flex align-items-stretch">
      <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center" style="background: url({{ asset('theme_src/images/cover.svg') }}) no-repeat center center; background-size: cover;">

      </div>
      <div class="col-12 col-md-8 h-100 bg-white">
        <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
          <div class="nav-get-started">
            <p>Don't have an account?</p>
            <a class="btn get-started-btn" href="{{ route('register') }}">REGISTER</a>
          </div>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- <h3 class="mr-auto"></h3> -->
            <img src="{{ asset('theme_src/images/logo.png') }}" class="mr-auto">
            <p class="mb-5 mr-auto">Hello! let's get started</p>

            @include('inc.messages')
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                </div>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail">

              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                </div>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

              </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary submit-btn">
                        {{ __('Login') }}
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>


            <div class="wrapper mt-5 text-gray">
              <p class="footer-text">Copyright © 2018 Loveguru. All rights reserved.</p>
              <ul class="auth-footer text-gray">
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Cookie Policy</a></li>
              </ul>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
</div>
@endsection