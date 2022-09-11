@extends('layouts.backend')

@section('content')

<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" style="margin-top: 20px">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
          <i class="fa fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fa fa-chart-bar fa-fw me-3"></i><span>Products</span></a>

        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fa fa-money-bill fa-fw me-3"></i><span>CAMERAS</span></a>
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img src="{{asset('frontend/img/logo.png')}}" height="50" alt="" loading="lazy" />
      </a>
      <!-- Search form -->
      <form class="d-none d-md-flex input-group w-auto my-auto">
        <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
        <span class="input-group-text border-0"><i class="fa fa-search"></i></span>
      </form>

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        <!-- Notification dropdown -->



        <!-- Avatar -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="50" alt="" loading="lazy" />
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">My profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>

<main>
  <div class="container pt-4" style="margin-top: 80px">

    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h3 class="text-danger">278</h3>
                <p class="mb-0">New Projects</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-rocket text-danger fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h3 class="text-success">156</h3>
                <p class="mb-0">New Clients</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-user text-success fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h3 class="text-warning">64.89 %</h3>
                <p class="mb-0">Conversion Rate</p>
              </div>
              <div class="align-self-center">
                <i class="fas fa-chart-pie text-warning fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div>
                <h3 class="text-info">423</h3>
                <p class="mb-0">Support Tickets</p>
              </div>
              <div class="align-self-center">
                <i class="fa fa-life-ring text-info fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <ul class="row nav nav-pills mb-3" id="ex1" role="tablist">
      <li class="nav-item col-xl-3 col-sm-6 col-12 mb-4" role="presentation">
        <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Tab 1</a>
      </li>
      <li class="nav-item col-xl-3 col-sm-6 col-12 mb-4" role="presentation">
        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="false">Tab 2</a>
      </li>
      <li class="nav-item col-xl-3 col-sm-6 col-12 mb-4" role="presentation">
        <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false">Tab 3</a>
      </li>
      <li class="nav-item col-xl-3 col-sm-6 col-12 mb-4" role="presentation">
        <a class="nav-link" id="ex1-tab-4" data-mdb-toggle="pill" href="#ex1-pills-4" role="tab" aria-controls="ex1-pills-4" aria-selected="false">Tab 4</a>
      </li>
    </ul>
    <!-- Pills navs -->

    <!-- Pills content -->
    <div class="row tab-content" id="ex1-content">
      <div class="tab-pane fade show active col-12" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
        test1
        <form method="POST" action="/signin">
          {{ csrf_field() }}

          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="name" name="name" class="form-control" />
            <label class="form-label" for="name">Name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" />
            <label class="form-label" for="email">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="password">Password</label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerRepeatPassword" class="form-control" />
            <label class="form-label" for="registerRepeatPassword">Repeat password</label>
          </div>

          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
            <label class="form-check-label" for="registerCheck">
              I have read and agree to the terms
            </label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
        </form>
      </div>
      <div class="tab-pane fade col-12" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
        TEST2
        <form method="POST" action="/signin">
          {{ csrf_field() }}

          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="name" name="name" class="form-control" />
            <label class="form-label" for="name">Name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" />
            <label class="form-label" for="email">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="password">Password</label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerRepeatPassword" class="form-control" />
            <label class="form-label" for="registerRepeatPassword">Repeat password</label>
          </div>

          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
            <label class="form-check-label" for="registerCheck">
              I have read and agree to the terms
            </label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
        </form>
      </div>
      <div class="tab-pane fade col-12" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
        TEST 3
        <form method="POST" action="/signin">
          {{ csrf_field() }}

          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="name" name="name" class="form-control" />
            <label class="form-label" for="name">Name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" />
            <label class="form-label" for="email">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="password">Password</label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerRepeatPassword" class="form-control" />
            <label class="form-label" for="registerRepeatPassword">Repeat password</label>
          </div>

          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
            <label class="form-check-label" for="registerCheck">
              I have read and agree to the terms
            </label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
        </form>
      </div>
      <div class="tab-pane fade col-12" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
        TEST 4
        <form method="POST" action="/signin">
          {{ csrf_field() }}

          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="name" name="name" class="form-control" />
            <label class="form-label" for="name">Name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control" />
            <label class="form-label" for="email">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" />
            <label class="form-label" for="password">Password</label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerRepeatPassword" class="form-control" />
            <label class="form-label" for="registerRepeatPassword">Repeat password</label>
          </div>

          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
            <label class="form-check-label" for="registerCheck">
              I have read and agree to the terms
            </label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</main>
<!--Main layout-->


@endsection