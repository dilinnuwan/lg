<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
  <div class="container d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top">
      <a class="navbar-brand brand-logo" href="{{ url('/') }}"><img src="{{ asset('theme_src/images/logo.png') }}" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('theme_src/images/logo.png') }}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <span class="search-field ml-auto" >
      </span>
      <ul class="navbar-nav navbar-nav-right mr-0">
        <li class="nav-item dropdown ml-4">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count bg-warning">4</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <a class="dropdown-item py-3">
              <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
              </p>
              <span class="badge badge-pill badge-inverse-info float-right">View all</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-inverse-success">
                  <i class="mdi mdi-alert-circle-outline mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                <p class="font-weight-light small-text mb-0">
                  Just now
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-inverse-warning">
                  <i class="mdi mdi-comment-text-outline mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                <p class="font-weight-light small-text mb-0">
                  Private message
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-inverse-info">
                  <i class="mdi mdi-email-outline mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                <p class="font-weight-light small-text mb-0">
                  2 days ago
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown d-none d-xl-inline-block">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            @if($user->Avatar->filename == null)
              @if($user->UserDetail->gender=="Male")
              <img src="{{ asset('theme_src/images/faces/boy.png') }}" class="img-xs rounded-circle" alt="profile image"/>
              @else
              <img src="{{ asset('theme_src/images/faces/girl.png') }}" class="img-xs rounded-circle" alt="profile image"/>
              @endif
            @else
              <img src="{{ asset('theme_src/profile_pics/'.$user->Avatar->filename) }}" class="img-xs rounded-circle" alt="profile image"/>
            @endif

          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <a class="dropdown-item mt-2" href="/profile/{{$user->id}}">
              Profile
            </a>
            <a class="dropdown-item">
              Settings
            </a>
            <a class="dropdown-item">
              Change Password
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Sign Out') }}

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </div>
  <div class="nav-bottom">
    <div class="container">
      <ul class="nav page-navigation">
        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
          <a href="{{ url('/') }}" class="nav-link"><i class="link-icon mdi mdi-television"></i><span class="menu-title">HOME</span></a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link"><i class="link-icon mdi mdi-apple-safari"></i><span class="menu-title">SEARCH</span></a>
        </li>
        <li class="nav-item mega-menu">
          <a href="#" class="nav-link"><i class="link-icon mdi mdi-atom"></i><span class="menu-title">LIKES</span></a>
        </li>
        <li class="nav-item mega-menu">
          <a href="#" class="nav-link"><i class="link-icon mdi mdi-flag-outline"></i><span class="menu-title">LIKED</span></a>
        </li>
        <li class="nav-item mega-menu">
          <a href="#" class="nav-link"><i class="link-icon mdi mdi-android-studio"></i><span class="menu-title">CHAT</span></a>
        </li>
        <li class="nav-item mega-menu">
          <a href="#" class="nav-link"><i class="link-icon mdi mdi-android-studio"></i><span class="menu-title">HOROSCOPES</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>