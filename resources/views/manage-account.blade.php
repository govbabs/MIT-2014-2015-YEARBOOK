<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>student-profile</title>

  <link href="css/all.css" rel="stylesheet">
  <link href="css/app.css" rel="stylesheet">

</head>

<body>

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
          <a href="index.html">
          <div class="logo"> Yearbook</div>
            
          </a>
        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav navbar-nav-margin-left">
          
          <li class="dropdown">
            <a href="#"> Profile </a>
          </li>
          <li class="dropdown active">
            <a href="#">About This Project </a>
          </li>
         
        </ul>
        <div class="navbar-right">
          <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
            <!-- user -->
            <li class="dropdown user active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/chid.jpg" alt="" class="img-circle" /> Chidi<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
               
                <li><a href="website-student-courses.html"><i class="fa fa-envelope"></i> Messages</a></li>
                <li><a href="website-student-profile.html"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="login.blade.php"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </li>
            <!-- // END user -->
          </ul>
          <a href="login.blade.php" class="navbar-btn btn btn-primary">Log In</a>
        </div>
      </div>
      <!-- /.navbar-collapse -->

    </div>
  </div>

  <div class="parallax overflow-hidden bg-blue-400 page-section third">
    <div class="container parallax-layer" data-opacity="true">
      <div class="media v-middle">
        <div class="media-left text-center">
          <a href="#">
            <img src="images/chid.jpg" alt="people" class="img-circle width-80" />
          </a>
        </div>
        <div class="media-body">
          <h1 class="text-white text-display-1 margin-v-0">Chidi Nweke</h1>
          <p class="text-subhead"><a class="link-white text-underline" href="#">View public profile</a></p>
        </div>
        
      </div>
    </div>
  </div>

  <div class="container">

    <div class="page-section">
      <div class="row">

       
         <div class="st-pusher" id="content">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="padding-none">

          <div class="container-fluid">

            <div class="page-section third">
              <!-- Tabbable Widget -->
              <div class="tabbable paper-shadow relative" data-z="0.5">

                <!-- Tabs -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="manage-account.html"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                  <li><a href="edit-student-profile.blade.php"><i class="fa fa-fw fa-user"></i> <span class="hidden-sm hidden-xs">Profile Details</span></a></li>
                </ul>
                <!-- // END Tabs -->

                <!-- Panes -->
                <div class="tab-content">

                  <div id="profile" class="tab-pane active">
                    <form class="form-horizontal">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Matric Number </label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                              <input type="number" class="form-control" id="inputnumber" placeholder="Your matric number will be used for login">
                              <label for="inputnumber">Username</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                     
                      <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                              <label for="inputEmail">Email address</label>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Change Password</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            <label for="inputPassword">Password</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputPassword3" class="col-md-2 control-label">Re-type Password</label>
                        <div class="col-md-6">
                          <div class="form-control-material">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            <label for="inputPassword">Password Confirmation</label>
                          </div>
                        </div>
                      </div>
                    
                      <div class="form-group margin-none">
                        <div class="col-md-offset-2 col-md-10">
                          <button type="submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>
                <!-- // END Panes -->

              </div>
              <!-- // END Tabbable Widget -->

            </div>

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>



        </div>
       

      </div>
    </div>

  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
    <strong>MIT Yearbook</strong> v1.0 &copy; Copyright 2016
    </div>
  </footer>
  <!-- // Footer -->

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "html",
      skins: {
        "default": {
          "primary-color": "#42a5f5"
        }
      }
    };
  </script>

 <script src="js/vendor/core/jquery.js"></script>
  <script src="js/vendor/core/bootstrap.js"></script> 
  <script src="js/vendor/core/breakpoints.js"></script>
  <script src="js/vendor/core/jquery.nicescroll.js"></script>
  <script src="js/vendor/core/isotope.pkgd.js"></script>
  <script src="js/vendor/core/packery-mode.pkgd.js"></script>
  <script src="js/vendor/core/jquery.grid-a-licious.js"></script>
  <script src="js/vendor/core/jquery.cookie.js"></script>
  <script src="js/vendor/core/jquery-ui.custom.js"></script> 
  <script src="js/vendor/core/load_image.js"></script> 
  <script src="js/vendor/core/jquery.debouncedresize.js"></script>
  <script src="js/vendor/core/modernizr.js"></script> 
  <script src="js/vendor/core/velocity.js"></script> 
  <script src="js/vendor/forms/all.js"></script> 
  <script src="js/vendor/media/slick.js"></script> 
  <script src="js/vendor/nestable/jquery.nestable.js"></script> 
  <script src="js/vendor/countdown/all.js"></script> 
  <script src="js/app/essentials.js"></script>
  <script src="js/app/material.js"></script>
  <script src="js/app/layout.js"></script>
  <script src="js/app/media.js"></script> 


</body>

</html>