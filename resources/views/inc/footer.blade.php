<footer class="footer">
  <div class="container-fluid clearfix">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://loveguru.lk" target="_blank">LoveGuru.lk</a>. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
    	<ul class="list-inline">
		  <li class="list-inline-item"><a href="{{ url('/profile/'.$user->id) }}">Profile</a></li>
		  <li class="list-inline-item"><a href="{{ url('/settings') }}">Settings</a></li>
		  <li class="list-inline-item">
		  	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		  		Sign Out
		  		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              	</form>
		  	</a>
		  </li>
		</ul>
    </span>
  </div>
</footer>