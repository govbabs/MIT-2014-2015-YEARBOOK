<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand navbar-brand-logo">
        <a href="yearbook.blade.php">
        <div class="logo"> Yearbook</div>
        </a>
      </div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-nav">
      <ul class="nav navbar-nav navbar-nav-margin-left">

        <li class="dropdown">
          <a href="{{ url('/') }}"> Profile </a>
        </li>
        <li class="dropdown active">
          <a href="{{ url('/about') }}">About This Project </a>
        </li>

      </ul>
      <div class="navbar-right">
        <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
          <!-- user -->
          <li class="dropdown user active">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ Auth::user()->getAvatarUrl() }}" alt="" class="img-circle" />
                {{ Auth::user()->username }}<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="student-profile.blade.php"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>
          <!-- // END user -->
        </ul>
        @if(!Auth::check())
          <a href="{{ route('auth.login') }}" class="navbar-btn btn btn-primary">Log In</a>
        @endif
      </div>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</div>
