@extends('layouts.master')

@section('title')
    Profile
@endsection
@section('content')



  @include('layouts.secondaryTitleBar')
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

@endsection