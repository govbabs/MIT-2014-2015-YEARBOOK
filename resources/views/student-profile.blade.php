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
          <p class="text-subhead"><a class="link-white text-underline" href="yearbook.blade.php">View public profile</a></p>
        </div>
        
      </div>
    </div>
  </div>

  <div class="container">

    <div class="page-section">
      <div class="row">

        <div class="col-md-9">

         <div class="panel panel-default">
            

           

              <div class="row yrshare-pad">

              <div class="col-md-6"> 
              <span class="pull-left"><span class="yr-headline">Profile Views:</span>
              <span class="yr-padwy">3000</span></span> 
              </div>

              

              <div class="col-md-6"> 
              </div>





              </div>

            


             
       
          </div>

          <div class="row" data-toggle="isotope">
            
            
            <div class="item col-xs-12 col-lg-6" style="position: absolute; left: 0px; top: 0px;">
              <div class="panel panel-default paper-shadow" data-z="0.5">

                <div class="panel-heading">
                    <div class="media v-middle">
                      <div class="media-body">
                        <h4 class="text-headline margin-none">About</h4>
                      </div>
                      <div class="media-right">
                        <a href="edit-student-profile.blade.php" class="btn btn-white btn-flat"><i class="fa fa-pencil fa-fw"></i></a>
                      </div>
                    </div>
                  </div>

                <ul class="list-group aboutpad">

                <div class="media">
                    <div class="media-left"><i data-toggle="tooltip" data-placement="top" title="Occupation" class="fa fa-fw fa-briefcase fa-lg text-headline"></i></div>


                    <div class="media-body">
                      <p class="yrdetail">Web Designer</p>
                 
                    </div>
                  
                  </div>



                  <div class="media">
                    <div class="media-left"><i data-toggle="tooltip" data-placement="top" title="Phone Number" class="fa fa-fw fa-phone-square fa-lg text-headline"></i></div>


                    <div class="media-body"><p class="yrdetail">2348066077313</p></div>
                  
                  </div>


                  <div class="media">
                    <div class="media-left"><i data-toggle="tooltip" data-placement="top" title="Email Address" class="fa fa-fw fa-at fa-lg text-headline"></i></div>


                    <div class="media-body"><p class="yrdetail">nwekechidiebere@gmail.com</p></div>
                  
                  </div>


                   <div class="media">
                    <div class="media-left"><i data-toggle="tooltip" data-placement="top" title="location" class="fa fa-fw fa-home fa-lg text-headline"></i></div>


                    <div class="media-body"><p class="yrdetail">Lagos, Nigeria</p></div>
                  
                  </div>



                  <div class="media">
                    <div class="media-left"><i data-toggle="tooltip" data-placement="top" title="Address" class="fa fa-fw fa-map-marker fa-lg text-headline"></i></div>


                    <div class="media-body"><p class="yrdetail">2120 Shefield Crescent Close GRA VGC Lekki Phase 6</p></div>
                  
                  </div>

               
               
                <div class="biopad-up">
                <h4 class="text-headline">Bio:</h4> 

               
                <p class="biopad">So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like.So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like.</p>
                </div>
                    
                 
                  
                </ul>

                
              </div>
            </div>



            <div class="item col-xs-12 col-lg-6">

              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                              <div class="mediamodal v-middle">
                                <div class="media-left">
                                  <div class="icon-block half img-circle bg-purple-300">
                                    <i class="fa fa-star text-white"></i>
                                  </div>
                                </div>
                                <div class="media-body">
                                  <div href="#" class="text-modalusermsg" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet dolor sit meler</div>
                                  <div class="text-light">
                                    <div class="shifttwo">3 Minutes Ago </div> 12th May 2016
                                  </div>
                                </div>
                                
                              </div>
                           


                            
                          </div>
                          <div class="modal-image">

                          <a href="#">
                          <img src="images/profile-cover.jpg" alt="news" />
                            </a>

                          </div>
                          <div class="modal-body">

                          <h4 class="text-modalusermsg">Lorem ipsum dolor sit amet dolor sit meler</h4>

                            <p>So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like.So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like

                            </br>

                            So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like.So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you likeSo if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like.So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you likeSo if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like.So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you likeSo if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like.So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you likeSo if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like.So if you have the time, and I assure you that you do, get ready for a journey that is certain to, if not buy you more time to do what you like


                            </p>

                          </div>
                          <div class="modal-footer">
                            
                            <i class="fa fa-fw fa-facebook"></i><i class="fa fa-fw fa-twitter"></i><i class="fa fa-fw fa-google-plus"></i>
                    
                          </div>
                        </div>
                      </div>
                    </div>







              <h4 class="text-headline margin-none">Yearbook Timeline</h4>
              <p class="text-subhead text-light">Latest updates &amp; events</p>
              
              <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated="">

                
                

                <li class="list-group-item paper-shadow">


                  <div class="media v-middle">
                    <div class="media-left">
                      <div class="icon-block half img-circle bg-purple-300">
                        <i class="fa fa-star text-white"></i>
                      </div>
                    </div>


                    <div class="media-body">
                      <a href="#" class="text-subhead link-text-color" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet dolor sit meler</a>
                      <div class="text-light">
                        By: <a href="#">Babs Fash</a>
                      </div>
                    </div>
                    <div class="media-right">
                      <div class="width-60 text-right">
                        <span class="text-caption text-light">1 hr ago</span>
                      </div>
                    </div>
                  </div>
                </li>


                <li class="list-group-item paper-shadow">
                  <div class="media v-middle">
                    <div class="media-left">
                      <div class="icon-block half img-circle bg-purple-300">
                        <i class="fa fa-star text-white"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <a href="#" class="text-subhead link-text-color" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet dolor sit meler</a>
                      <div class="text-light">
                        By: <a href="#">Babs Fash</a>
                      </div>
                    </div>
                    <div class="media-right">
                      <div class="width-60 text-right">
                        <span class="text-caption text-light">2 hrs ago</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item paper-shadow">
                  <div class="media v-middle">
                    <div class="media-left">
                      <div class="icon-block half img-circle bg-purple-300">
                        <i class="fa fa-star text-white"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <a href="#" class="text-subhead link-text-color" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet dolor sit meler</a>
                      <div class="text-light">
                        By: <a href="#">Babs Fash</a>
                      </div>
                    </div>
                    <div class="media-right">
                      <div class="width-60 text-right">
                        <span class="text-caption text-light">3 hr ago</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item paper-shadow">
                  <div class="media v-middle">
                    <div class="media-left">
                      <div class="icon-block half img-circle bg-purple-300">
                        <i class="fa fa-star text-white"></i>
                      </div>
                    </div>
                    <div class="media-body">
                      <a href="#" class="text-subhead link-text-color" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet dolor sit meler</a>
                      <div class="text-light">
                        By: <a href="#">Babs Fash</a>
                      </div>
                    </div>
                    <div class="media-right">
                      <div class="width-60 text-right">
                        <span class="text-caption text-light">4 hr ago</span>
                      </div>
                    </div>
                  </div>

                </li>
              </ul>

              <div class="text-center"><button class="btn btn-primary">LOAD MORE</button></div>

            </div>
          </div>

          <br/>
          <br/>

        </div>
        <div class="col-md-3">

        <div class="modal fade yrfeature" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        
           <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="mySmallModalLabel">Hi, Chidi</h4>
              </div>
              <div class="modal-body">
                <p> This feature is not yet available for this version of yearbook. 
                Please expect this feature in our next update.
                   
                <br>

                Thank you.

                </p>
              </div>
            </div><!-- /.modal-content -->
          </div>


        </div>

          <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
            <div class="panel-heading panel-collapse-trigger">
              <h4 class="panel-title">My Account</h4>
            </div>
            <div class="panel-body list-group">
              <ul class="list-group list-group-menu">
                <li class="list-group-item active"><a class="link-text-color" href="student-profile.blade.php">Profile</a></li>

                <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="#"><span class="badge pull-right">42</span>Notifications</a></li>

                <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="#">Friends</a></li>

                <li class="list-group-item"><a class="link-text-color" data-toggle="modal" data-target=".yrfeature" href="#">Lecturers</a></li>

                <li class="list-group-item"><a class="link-text-color" href="login.blade.php"><span>Logout</span></a></li>

              </ul>
            </div>
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