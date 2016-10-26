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
               
                <li><a href="#"><i class="fa fa-envelope"></i> Messages</a></li>
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
                  <li><a href="manage-account.blade.php"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Manage Account</span></a></li>
                  <li class="active"><a href="edit-student-profile.html"><i class="fa fa-fw fa-user"></i> <span class="hidden-sm hidden-xs">Profile Details</span></a></li>
                </ul>
                <!-- // END Tabs -->

                <!-- Panes -->
                <div class="tab-content">

                  <div id="account" class="tab-pane active">
                    <form action="#" class="form-horizontal">

                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>
                        <div class="col-md-6">
                          <div class="media v-middle">
                            <div class="media-left">
                              <div class="icon-block width-100 bg-grey-100">
                                <i class="fa fa-photo text-light"></i>
                              </div>
                            </div>
                            <div class="media-body">
                              <a href="#" class="btn btn-white btn-sm paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated> Add Image<i class="fa fa-upl"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="text" class="form-control" id="InputFirstName" placeholder="Your first name">
                                <label for="InputFirstName">First name</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-control-material">
                                <input type="text" class="form-control" id="InputLastName" placeholder="Your last name">
                                <label for="InputLastName">Last name</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="country" class="col-md-2 control-label">Date of Birth</label>
                        <div class="col-md-6">
                          <input id="datepicker" type="text" class="form-control datepicker">
                            
                          </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="col-md-2 control-label" for="textarea">Address</label>
                        <div class="col-md-6">
                        <div class="form-control-material">
                      <textarea id="textarea" class="form-control" id="Inputtextarea" Vrows="5" placeholder="Your Contact Address"></textarea><span class="ma-form-highlight"></span><span class="ma-form-bar"></span>
                      <label for="Inputtextarea">Contact Address</label>
                    </div>
                        </div>
                      </div>




                      <div class="form-group">
                        <label class="col-md-2 control-label" for="textarea">Country</label>
                        <div class="col-md-6">
                        <div class="form-control-material">
                      <textarea id="textarea" class="form-control" rows="5"></textarea><span class="ma-form-highlight"></span><span class="ma-form-bar"></span>
                      <label for="textarea">Country</label>
                    </div>
                        </div>
                      </div>


                      <!-- Textarea -->
                      <div class="form-group">
                        <label class="col-md-2 control-label" for="textarea">About YourSelf</label>
                        <div class="col-md-6">
                        <div class="form-control-material">
                      <textarea id="textarea" class="form-control" rows="5" placeholder="About yourself"></textarea><span class="ma-form-highlight"></span><span class="ma-form-bar"></span>
                      <label for="textarea">Enter about yourself here.</label>
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
                        <label class="col-md-2 control-label" for="textarea">Occupation</label>
                        <div class="col-md-6">
                        <div class="form-control-material">
                      <textarea id="textarea" class="form-control" rows="5" placeholder="Current job occupation"></textarea><span class="ma-form-highlight"></span><span class="ma-form-bar"></span>
                      <input type="text" class="form-control" id="InputOccupation">
                      <label for="InputOccupation">Enter your current job occupation..</label>
                    </div>
                        </div>
                      </div>


                      <div class="form-group">
                    <label class="col-md-2 control-label" for="website">Website</label>
                    <div class="col-md-6">
                      <div class="form-control-material">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-link"></i></span>
                          <input type="text" class="form-control used" id="website" placeholder="Enter your website URL here">
                          <label for="website">Website</label>
                        </div>
                      </div>
                    </div>
                  </div>


                   <div class="form-group">
                    <label class="col-md-2 control-label" for="facebook">Facebook</label>
                    <div class="col-md-6">
                      <div class="form-control-material">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                          <input type="text" class="form-control used" id="facebook" placeholder="Enter your facebook URL profile here">
                          <label for="facebook">Facebook</label>
                        </div>
                      </div>
                    </div>
                  </div>

                     <div class="form-group">
                    <label class="col-md-2 control-label" for="twitter">Twitter</label>
                    <div class="col-md-6">
                      <div class="form-control-material">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                          <input type="text" class="form-control used" id="facebook" placeholder="Enter your twitter URL profile here">
                          <label for="twitter">Twitter</label>
                        </div>
                      </div>
                    </div>
                  </div>


                    <div class="form-group">
                    <label class="col-md-2 control-label" for="google">Google Plus</label>
                    <div class="col-md-6">
                      <div class="form-control-material">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-google"></i></span>
                          <input type="text" class="form-control used" id="google" placeholder="Enter your Google-Plus URL profile here">
                          <label for="google">Google Plus</label>
                        </div>
                      </div>
                    </div>
                  </div>
   
                   
                    </form>
                    <hr/>

                    <div class="media v-middle s-container">
                      <div class="media-body">
                        
                      </div>
                      <div class="media-right">
                        <a href="student-profile.blade.php" data-toggle="modal" class="btn btn-success paper-shadow relative" data-animated data-z="0.5" data-hover-z="1" href="">Update Profile</a>
                      </div>
                    </div>
                    
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
  
  <!--- <script src="js/mit.js"></script> -->
  <!--- <script src="js/all.js"></script> --> 
  <!--- <script src="js/app.js"></script> -->

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