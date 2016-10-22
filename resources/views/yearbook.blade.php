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
            <a href="about.blade.php">About This Project </a>
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

<div class="container">
<div class="yearbook-intro">
<div class="row">
<div class="col-md-12">

          <div class="panel panel-default">
            <div class="yearbook-pad">

              <div class="col-md-4 col-sm-6 yearbook-titlefont">University of Lagos MIT 2014 / 2015 </div>
              

             
            </div>
          </div>

</div>
</div>
</div>
</div>

  <div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-headline" id="myModalLabel">Chidi Nweke</h4>
      </div>
      <div class="modal-body modalash">


      <div class="row">
      <div class="col-md-4 paper-shadow">
        
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        </div>


      </div>

      <div class="col-md-4">
      <div class="panel panel-default paper-shadow" data-z="0.5">


      <div class="card-inner">

                  <div class="media">
                    <div class="media-left"><i class="fa fa-fw fa-briefcase fa-lg text-headline"></i></div>


                    <div class="media-body">
                      <p class="yrdetail">Web Designer</p>
                 
                    </div>
                  
                  </div>



                  <div class="media">
                    <div class="media-left"><i class="fa fa-fw fa-phone-square fa-lg text-headline"></i></div>


                    <div class="media-body"><p class="yrdetail">2348066077313</p></div>
                  
                  </div>


                   <div class="media">
                    <div class="media-left"><i class="fa fa-fw fa-home fa-lg text-headline"></i></div>


                    <div class="media-body"><p class="yrdetail">Lagos, Nigeria</p></div>
                  
                  </div>



                  <div class="media">
                    <div class="media-left"><i class="fa fa-fw fa-map-marker fa-lg text-headline"></i></div>


                    <div class="media-body"><p class="yrdetail">2120 Shefield Crescent Close GRA VGC Lekki Phase 6</p></div>
                  
                  </div>




                 
                 
                  
                </div>

      
      </div>
      </div>

      <div class="col-md-4">
      <div class="panel panel-default paper-shadow" data-z="0.5">

      <div class="yrdetail-bio">

      <div class="media">
                    <div class="media-left"><i class="fa fa-fw fa-user fa-lg text-headline"></i></div>


                    <div class="media-body"><p class="yrdetail">Bio:</p></div>
                  
                  </div>


      <p>To stack multiple icons, use the fa-stack class on the parent, the fa-stack-1x for the regularly sized icon, and fa-stack-2x for the larger icon. fa-inverse can be used as an alternative icon color. You can even throw larger icon classes on the parent to get further control of sizing.</p>

      </div>


      </div>
      </div>


      <div class="col-md-8">
      <div class="panel panel-default paper-shadow" data-z="0.5">

      <div class="row yrshare-pad">

      <div class="col-md-6"> <span class="pull-left"><span class="yr-headline">Profile Views:</span><span class="yr-padwy">3000</span></span> </div>
      <div class="col-md-6"> <span class="pull-right yr-headline">
      <span class="yr-headline">Share This:</span>
      <a href="#" class="fa fa-fw fa-facebook"></a>
      <a href="#" class="fa fa-fw fa-twitter"></a>
      <a href="#" class="fa fa-fw fa-google-plus"></a>
      </span> </div>

      </div>

      </div>

      </div>


      </div>

        ...
      </div>
      
    </div>
  </div>
</div>




    <div class="yearbook-content">
      <div class="row">
        <div class="col-md-12">  
           <div class="row">


      <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a href="#" class="text-headline" data-toggle="modal" data-target="#myModal">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


      <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a href="#" class="text-headline" data-toggle="modal" data-target="#myModal">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>
      

      <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a href="#" class="text-headline" data-toggle="modal" data-target="#myModal">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


      <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
               <div class="panel-body"><a href="#" class="text-headline" data-toggle="modal" data-target="#myModal">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


            <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a href="#" class="text-headline" data-toggle="modal" data-target="#myModal">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


            <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
               <div class="panel-body"><a href="#" class="text-headline" data-toggle="modal" data-target="#myModal">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


            <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a class="text-headline">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


            <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a class="text-headline">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


      <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a class="text-headline">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


      <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a class="text-headline">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


      <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a class="text-headline">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>


      <div class="col-sm-6 col-md-3 text-center">
        <div class="panel panel-default paper-shadow" data-z="0.5">
          
          <div class="cover overlay cover-image-full hover" style="height: 150px;">
          <img src="images/chid.jpg" alt="person" class="width-100pc">
          </div>

        <hr class="margin-none">
                <div class="panel-body"><a class="text-headline">Chidi Nweke</a></div>
                <hr>
                <div class="panel-body">
                    <span><a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a></span>
                    <span><a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-linkedin"></i></a></span>

                  </div>


        </div>
      </div>




    </div>

    <ul class="pagination margin-top-none">
            <li class="disabled"><a href="#">«</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
          </ul>





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
  <script src="js/vendor/core/jquery.hotkeys.js"></script>
  <script src="js/vendor/core/handlebars.js"></script>
  <script src="js/vendor/core/jquery.hotkeys.js"></script>
  <script src="js/vendor/core/load_image.js"></script> 
  <script src="js/vendor/core/jquery.debouncedresize.js"></script>
  <script src="js/vendor/core/modernizr.js"></script> 
  <script src="js/vendor/core/velocity.js"></script> 
  <script src="js/vendor/tables/all.js"></script> 
  <script src="js/vendor/forms/all.js"></script> 
  <script src="js/vendor/media/slick.js"></script> 
  <script src="js/vendor/charts/flot/all.js"></script> 
  <script src="js/vendor/nestable/jquery.nestable.js"></script> 
  <script src="js/vendor/countdown/all.js"></script> 
  <script src="js/vendor/angular/all.js"></script> 
  <script src="js/app/essentials.js"></script>
  <script src="js/app/material.js"></script>
  <script src="js/app/layout.js"></script>

  <script src="js/app/media.js"></script> 
  <script src="js/app/messages.js"></script>


</body>

</html>