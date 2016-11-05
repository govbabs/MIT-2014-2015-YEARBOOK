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
                                            <li class="active">
                                                <a href="{{ url('/account/edit') }}">
                                                    <i class="fa fa-fw fa-lock"></i>
                                                    <span class="hidden-sm hidden-xs">Manage Account</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/profile/edit') }}">
                                                    <i class="fa fa-fw fa-user"></i>
                                                    <span class="hidden-sm hidden-xs">Profile Details</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- // END Tabs -->
                                        <!-- Panes -->
                                        <div class="tab-content">
                                            <div id="profile" class="tab-pane active">
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
                                                <form class="form-horizontal" action="{{ route('account.update') }}"
                                                    method="post">
                                                    {!! method_field('PUT') !!}
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-2
                                                        control-label">Username </label>
                                                        <div class="col-md-6">
                                                            <div class="form-control-material">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-user"></i></span>
                                                                    <input type="text" class="form-control"
                                                                       id="username" name="username"
                                                                       placeholder="Username"
                                                                       value="{{ Auth::user()->username}}">
                                                                    <label for="username">Username</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="col-md-2
                                                            control-label">Email</label>
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
                                                        <label class="col-md-2 control-label"></label>
                                                        <div class="col-md-6">
                                                            <span>leave the below fields empty to keep your original password</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="col-md-2
                                                            control-label">Change Password</label>
                                                        <div class="col-md-6">
                                                            <div class="form-control-material">
                                                                <input type="password" class="form-control"
                                                                    id="password" placeholder="Password"
                                                                    name="password">
                                                                <label for="password">Password</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password_confirmation" class="col-md-2
                                                            control-label">Re-type Password</label>
                                                        <div class="col-md-6">
                                                            <div class="form-control-material">
                                                                <input type="password" class="form-control"
                                                                       id="password_confirmation"
                                                                       name="password_confirmation"
                                                                       placeholder="Confirm Password">
                                                                <label for="password_confirmation"
                                                                    >Password Confirmation</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group margin-none">
                                                        <div class="col-md-offset-2 col-md-10">
                                                            <button type="submit" data-z="0.5" data-hover-z="1"
                                                                class="btn btn-primary paper-shadow relative"
                                                                data-animated>Save Changes</button>
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