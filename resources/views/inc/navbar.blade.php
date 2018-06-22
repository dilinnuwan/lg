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
          <a class="nav-link count-indicator " href="{{ url('/notifications') }}">
            <i class="mdi mdi-bell-outline"></i>
            <div id="notification_count">
              <span class="count bg-warning" id="notification_count_span" @if(App\Helper::notification_count() ==0) style="display: none;" @endif>{!!App\Helper::notification_count()!!}</span>
            </div>
          </a>
          
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
            <a class="dropdown-item mt-2" href="{{ url('/profile/'.$user->id) }}">
              Profile
            </a>
            <a class="dropdown-item" href="{{ url('/settings') }}">
              Settings
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
          <a href="{{ url('/') }}" class="nav-link"><i class="link-icon fa fa-rocket"></i><span class="menu-title">HOME</span></a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/search') }}" class="nav-link"><i class="link-icon fa fa-search"></i><span class="menu-title">SEARCH</span></a>
        </li>
        {{-- <li class="nav-item mega-menu">
          <a href="{{ url('/requests') }}" class="nav-link"><i class="link-icon mdi mdi-atom"></i><span class="menu-title">REQUESTS</span></a>
        </li> --}}
        <li class="nav-item">
          <a href="#" class="nav-link"><i class="link-icon fa fa-bolt"></i><span class="menu-title">REQUESTS</span><i class="menu-arrow"></i></a>
          <div class="submenu">
            <ul class="submenu-item">
              <li class="nav-item"><a class="nav-link" href="{{ url('/requests/sent') }}">SENT</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/requests/received') }}">RECEIVED</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item mega-menu">
          <a href="{{ url('/interests') }}" class="nav-link"><i class="link-icon fa fa-heart"></i><span class="menu-title">INTERESTS</span></a>
        </li>
        <li class="nav-item mega-menu">
          <a href="#" class="nav-link"><i class="link-icon fa fa-paper-plane"></i><span class="menu-title">CHAT</span></a>
        </li>
        <li class="nav-item mega-menu">
          <a href="{{ url('/gallery') }}" class="nav-link"><i class="link-icon fa fa-image"></i><span class="menu-title">GALLERY</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>