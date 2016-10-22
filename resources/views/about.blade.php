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
          <a href="yearbook.blade.php">
          <div class="logo"> Yearbook</div>
            
          </a>
        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav navbar-nav-margin-left">
          
          <li class="dropdown">
            <a href="student-profile.blade.php"> Profile </a>
          </li>
          <li class="dropdown active">
            <a href="about.blade.html">About This Project </a>
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
               
                <li><a href="student-profile.blade.php"><i class="fa fa-user"></i> Profile</a></li>
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


  <div class="separator_75"></div>


  <div class="container">
  <div class="row">

  <div class="col-md-2"></div>
  <div class="col-md-8"> 

                  <section class="panel panel-default paper-shadow" data-z="0.5">

                                       <div class="panel-heading yrabout">
                                        <h1 class="margin-none">About This Project</h1>
                                       </div>
                               

                                    <div class="panel-body text-center recover-txt">
                                        
                                       <div class="yrabout">
                                       It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                                       </div>
                                     
                                    </div>
                           

                 
                    <div class="yrabout">
                       
                            <ol class="breadcrumb">
                              <li><a href="login.blade.php" class="link-text-color"><i class="fa fa-fw fa-chevron-left"></i>Go back to profile page</a></li>
                                    
                            </ol>
                    </div>
                </section>

</div>

<div class="col-md-2"></div></div>



 
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