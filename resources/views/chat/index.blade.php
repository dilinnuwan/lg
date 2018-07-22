@extends('layouts.app_nav')

@section('title', 'CHAT - ')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">

      {{-- ::::::Page Content Here:::::: --}}

      <div class="email-wrapper wrapper">
            <div class="row align-items-stretch">
              <div class="mail-sidebar col-md-3 pt-3 bg-white border-right sidemenu_email_scroll">
                <div class="menu-bar">
                  <div class="wrapper">
                    <div class="online-status d-flex justify-content-between align-items-center">
                    <p class="chat">Chats</p> <span class="status offline online"></span></div>
                  </div>
                  <ul class="profile-list">
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face1.jpg" alt=""></span><div class="user"><p class="u-name">David</p><p class="u-designation">Python Developer</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face2.jpg" alt=""></span><div class="user"><p class="u-name">Stella Johnson</p><p class="u-designation">SEO Expert</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face20.jpg" alt=""></span><div class="user"><p class="u-name">Catherine</p><p class="u-designation">IOS Developer</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face12.jpg" alt=""></span><div class="user"><p class="u-name">John Doe</p><p class="u-designation">Business Analyst</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face25.jpg" alt=""></span><div class="user"><p class="u-name">Daniel Russell</p><p class="u-designation">Tester</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face10.jpg" alt=""></span><div class="user"><p class="u-name">Sarah Graves</p><p class="u-designation">Admin</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face23.jpg" alt=""></span><div class="user"><p class="u-name">Sophia Lara</p><p class="u-designation">UI/UX</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face11.jpg" alt=""></span><div class="user"><p class="u-name">Catherine Myers</p><p class="u-designation">Business Analyst</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face9.jpg" alt=""></span><div class="user"><p class="u-name">Tim</p><p class="u-designation">PHP Developer</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face9.jpg" alt=""></span><div class="user"><p class="u-name">Tim</p><p class="u-designation">PHP Developer</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face25.jpg" alt=""></span><div class="user"><p class="u-name">Daniel Russell</p><p class="u-designation">Tester</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face10.jpg" alt=""></span><div class="user"><p class="u-name">Sarah Graves</p><p class="u-designation">Admin</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face23.jpg" alt=""></span><div class="user"><p class="u-name">Sophia Lara</p><p class="u-designation">UI/UX</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face11.jpg" alt=""></span><div class="user"><p class="u-name">Catherine Myers</p><p class="u-designation">Business Analyst</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face9.jpg" alt=""></span><div class="user"><p class="u-name">Tim</p><p class="u-designation">PHP Developer</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face9.jpg" alt=""></span><div class="user"><p class="u-name">Tim</p><p class="u-designation">PHP Developer</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face10.jpg" alt=""></span><div class="user"><p class="u-name">Sarah Graves</p><p class="u-designation">Admin</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face23.jpg" alt=""></span><div class="user"><p class="u-name">Sophia Lara</p><p class="u-designation">UI/UX</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face11.jpg" alt=""></span><div class="user"><p class="u-name">Catherine Myers</p><p class="u-designation">Business Analyst</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face9.jpg" alt=""></span><div class="user"><p class="u-name">Tim</p><p class="u-designation">PHP Developer</p></div> </a></li>
                    <li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="{{ asset('theme_src/images/faces') }}/face9.jpg" alt=""></span><div class="user"><p class="u-name">Tim</p><p class="u-designation">PHP Developer</p></div> </a></li>
                  </ul>
                </div>
              </div>
                
              <div class="mail-view col-md-9 col-lg-9 bg-white">
                <div class="message-body">
                  <div class="sender-details">
                    <img class="img-sm rounded-circle mr-3" src="{{ asset('theme_src/images/faces') }}/face11.jpg" alt="">
                    <div class="details">
                      <p class="msg-subject">
                        Dilina Gunarathna
                      </p>
                      <p class="sender-email">
                        94
                        <a href="#">- colombo</a>
                      </p>
                    </div>
                  </div>
                  <div class="message-content message_scroll scroll_to_bottom">

                    <div class="message_item">
                      <div class="message_item_bubble">
                      <p class="chat_text">This week has been a great week and the team is right on schedule with the set deadline..</p>
                      </div>
                      <p class="chat_timestamp"> 18 Jan 2012 10:12:00pm</p>
                    </div>

                    <div class="message_item_active">
                      <div class="message_item_active_bubble">
                      <p class="chat_text">This week has been a great week and the team is right on schedule with the set deadline. The team has made great progress and achievements this week. At the current rate we will be able to deliver the product right on time and meet the quality that is expected of us. </p>
                      </div>
                      <p class="chat_timestamp"> 18 Jan 2012 10:12:00pm</p>
                    </div>

                    

                    </div>
                  </div>
                  <div class="attachments-sections border-top">
                  	<div class="row">
                  	<div class="col-md-12 grid-margin mt-3">
                  		<div class="form-group">
                  			<textarea class="form-control" style="width:100%; border-radius: 8px" rows="2" placeholder="Write a message...."></textarea>
                  		</div>
			  		</div>
			  		</div>
                  </div>
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
@endsection

@section('js_script')
<script type="text/javascript">

  var messageBody = document.querySelector('.scroll_to_bottom');
  messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
</script>
@endsection

