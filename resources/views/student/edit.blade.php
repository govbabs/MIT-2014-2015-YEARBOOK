@extends('layouts.master')

@section('title')
    Edit Profile
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
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw fa-lock"></i>
                                                <span class="hidden-sm hidden-xs">Manage Account</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ url('/profile/edit') }}">
                                                <i class="fa fa-fw fa-user"></i>
                                                <span class="hidden-sm hidden-xs">Profile Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- // END Tabs -->
                                    <!-- Panes -->
                                    <div class="tab-content">
                                        <div id="account" class="tab-pane active">
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <ul class="list-unstyled">
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if (session('status'))
                                                <div class="alert alert-success">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <form method="post" action="{{ route('user.update') }}"
                                                  class="form-horizontal" enctype="multipart/form-data">
                                                {!! method_field('PUT') !!}
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="inputEmail3"
                                                           class="col-sm-2 control-label">Avatar</label>
                                                    <div class="col-md-6">
                                                        <div class="media v-middle">
                                                            <div class="media-left">
                                                                <div class="icon-block width-100 bg-grey-100">
                                                                    <i class="fa fa-photo text-light"></i>
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="#" data-z="0.5" data-hover-z="1"
                                                               class="btn btn-white btn-sm paper-shadow relative"
                                                                   data-animated> Add Image
                                                                    <i class="fa fa-upl"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3"
                                                           class="col-md-2 control-label">Full Name</label>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-control-material">
                                                                    <input type="text" class="form-control"
                                                                        id="firstname" name="firstname"
                                                                        placeholder="Your first name"
                                                                        value="{{Auth::user()->first_name}}">
                                                                    <label
                                                                        for="firstname">First name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-control-material">
                                                                    <input type="text" class="form-control"
                                                                           id="lastname" name="lastname"
                                                                           placeholder="Your last name"
                                                                           value="{{Auth::user()->last_name}}">
                                                                    <label for="lastname">Last name</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="dateofbirth"
                                                           class="col-md-2 control-label">Date of Birth</label>
                                                    <div class="col-md-6">
                                                        <input id="dateofbirth" type="text" name="dateofbirth"
                                                           class="form-control datepicker"
                                                           value="{{ Auth::user()->profile->date_of_birth }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"
                                                           for="address">Address</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <textarea class="form-control"
                                                              id="address" rows="5" name="address"
                                                              placeholder="Your Contact Address">{{ Auth::user()->profile->address }}</textarea>
                                                            <span class="ma-form-highlight"></span>
                                                            <span class="ma-form-bar"></span>
                                                            <label for="address">Contact Address</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"
                                                           for="country">Country</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <textarea id="country" class="form-control" name="country"
                                                            rows="5">{{ Auth::user()->profile->country }}</textarea>
                                                            <span class="ma-form-highlight"></span>
                                                            <span class="ma-form-bar"></span>
                                                            <label for="country">Country</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Textarea -->
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"
                                                       for="bio">About YourSelf</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <textarea id="bio" name="bio" rows="5"
                                                                class="form-control" placeholder="About yourself"
                                                                >{{ Auth::user()->profile->description }}</textarea>
                                                            <span class="ma-form-highlight"></span>
                                                            <span class="ma-form-bar"></span>
                                                            <label for="bio">
                                                                Enter about yourself here.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email"
                                                           class="col-md-2 control-label">Email</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i></span>
                                                                <input type="email" class="form-control"
                                                                       id="email" name="email" placeholder="Email"
                                                                value="{{ Auth::user()->email}}">
                                                                <label for="email">Email address</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone"
                                                           class="col-md-2 control-label">Phone Number</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-mobile-phone"></i></span>
                                                                <input type="text" class="form-control"
                                                                       id="phone" name="phone"
                                                                       placeholder="Phone Number"
                                                                       value="{{ Auth::user()->phone_no}}">
                                                                <label for="phone">Phone Number</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"
                                                           for="occupation">Occupation</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <textarea id="occupation" class="form-control"
                                                                  rows="5" placeholder="Current job occupation"
                                                                  name="occupation"
                                                                  >{{ Auth::user()->profile->occupation}}</textarea>
                                                            <span class="ma-form-highlight"></span>
                                                            <span class="ma-form-bar"></span>
                                                            <input type="text" class="form-control"
                                                                   id="occupation">
                                                            <label for="InputOccupation">Enter your current job occupation..</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"
                                                           for="website">Website</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-link"></i></span>
                                                                <input type="text" class="form-control"
                                                                       id="website" name="website"
                                                                       value="{{ Auth::user()->profile->website }}"
                                                                       placeholder="Enter your website URL here">
                                                                <label for="website">Website</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"
                                                           for="facebook">Facebook</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-facebook"></i></span>
                                                                <input type="text" class="form-control"
                                                                       id="facebook" name="facebook"
                                                                       value="{{ Auth::user()->profile->facebook }}"
                                                                       placeholder="Enter your facebook URL profile here">
                                                                <label for="facebook">Facebook</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"
                                                           for="twitter">Twitter</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-twitter"></i></span>
                                                                <input type="text" id="twitter" name="twitter"
                                                                       class="form-control"
                                                                       value="{{ Auth::user()->profile->twitter }}"
                                                                       placeholder="Enter your twitter URL profile here">
                                                                <label for="twitter">Twitter</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"
                                                           for="google">Google Plus</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-google"></i></span>
                                                                <input type="text" class="form-control"
                                                                       value="{{ Auth::user()->profile->google }}"
                                                                       id="google" name="google"
                                                                       placeholder="Enter your Google-Plus URL profile here">
                                                                <label for="google">Google Plus</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"
                                                           for="instagram">Instagram</label>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-instagram"></i>
                                                                </span>
                                                                <input type="text" name="instagram"
                                                                   class="form-control"
                                                                   value="{{ Auth::user()->profile->instagram }}"
                                                                   id="instagram" name="instagram"
                                                                   placeholder="Enter your Instagram URL profile here">
                                                                <label for="instagram">Instagram</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="media v-middle s-container">
                                                    <div class="media-body">
                                                    </div>
                                                    <div class="media-right">
                                                        <button type="submit" data-toggle="modal"
                                                            class="btn btn-success paper-shadow relative"
                                                            data-animated data-z="0.5" data-hover-z="1"
                                                            >Update Profile</button>
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
@endsection
