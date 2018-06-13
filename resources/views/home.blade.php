{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.app_nav')

@section('title', 'Home - ')

@section('content')

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row">
        <div class="col-md-8 col-sm-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                
                <div class="fluid-container">
                  <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-1">
                      <img class="img-sm rounded-circle mb-4 mb-md-0" src="{{ asset('theme_src/images/faces/face1.jpg') }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-9">
                      <div class="d-flex">
                        <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">James :</p>
                        <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                        <p class="font-weight-semibold mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
                      </div>
                      <p class="text-small text-gray mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim vivamus.</p>
                      <div class="row text-gray d-md-flex d-none">
                        <div class="col-4 d-flex">
                          <p class="mb-0 mr-2 text-muted text-muted">Last responded :</p>
                          <p class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</p>
                        </div>
                        <div class="col-4 d-flex">
                          <p class="mb-0 mr-2 text-muted text-muted">Due in :</p>
                          <p class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</p>
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                      <div class="btn-group dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          LIKE
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                    <div class="col-md-1">
                      <img class="img-sm rounded-circle mb-4 mb-md-0" src="{{ asset('theme_src/images/faces/face2.jpg') }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-9">
                      <div class="d-flex">
                        <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">Stella :</p>
                        <p class="font-weight-medium mr-1 mb-0">[#23135]</p>
                        <p class="font-weight-semibold mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
                      </div>
                      <p class="text-small text-gray mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl.</p>
                      <div class="row text-gray d-md-flex d-none">
                        <div class="col-4 d-flex">
                          <p class="mb-0 mr-2 text-muted">Last responded :</p>
                          <p class="Last-responded mr-2 mb-0 text-muted">3 hours ago</p>
                        </div>
                        <div class="col-4 d-flex">
                          <p class="mb-0 mr-2 text-muted">Due in :</p>
                          <p class="Last-responded mr-2 mb-0 text-muted">2 Days</p>
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                      <div class="btn-group dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          LIKE
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ticket-card mt-3">
                    <div class="col-md-1">
                      <img class="img-sm rounded-circle mb-4 mb-md-0" src="{{ asset('theme_src/images/faces/face3.jpg') }}" alt="profile image">
                    </div>
                    <div class="ticket-details col-md-9">
                      <div class="d-flex">
                        <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">John Doe :</p>
                        <p class="font-weight-medium mr-1 mb-0">[#23246]</p>
                        <p class="font-weight-semibold mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                      </div>
                      <p class="text-small text-gray mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
                      <div class="row text-gray d-md-flex d-none">
                        <div class="col-4 d-flex">
                          <p class="mb-0 mr-2 text-muted">Last responded :</p>
                          <p class="Last-responded mr-2 mb-0 text-muted">3 hours ago</p>
                        </div>
                        <div class="col-4 d-flex">
                          <p class="mb-0 mr-2 text-muted">Due in :</p>
                          <p class="Last-responded mr-2 mb-0 text-muted">2 Days</p>
                        </div>
                      </div>
                    </div>
                    <div class="ticket-actions col-md-2">
                      <div class="btn-group dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          LIKE
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 grid-margin stretch-card">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{ asset('theme_src/images/faces/face5.jpg') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                    <h4>Maria Johnson</h4>
                    <p class="text-muted">Developer</p>
                    <p class="mt-4 card-text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Lorem
                    </p>
                    <button class="btn btn-primary btn-sm mt-3 mb-4">Follow</button>
                    <div class="border-top pt-3">
                        <div class="row">
                            <div class="col-4">
                                <h6>5896</h6>
                                <p>Post</p>
                            </div>
                            <div class="col-4">
                                <h6>1596</h6>
                                <p>Followers</p>
                            </div>
                            <div class="col-4">
                                <h6>7896</h6>
                                <p>Likes</p>
                            </div>
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