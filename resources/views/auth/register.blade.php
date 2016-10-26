@extends('layouts.master')

@section('title')
    Student Sign Up
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 pull-right">
                <div class="lock-container">
                    <section class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <h1 class="margin-none">Sign Up</h1>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="index.html">
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="firstName" type="text" class="form-control"
                                               placeholder="Enter your Matric Number here">
                                        <label for="firstName">Username</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="firstName" type="text" class="form-control"
                                               placeholder="First Name">
                                        <label for="firstName">First name</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="lastName" type="text" class="form-control"
                                               placeholder="Last Name">
                                        <label for="lastName">Last name</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="email" type="email" class="form-control"
                                               placeholder="Email">
                                        <label for="email">Email address</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="password" type="password" class="form-control"
                                               placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="passwordConfirmation" type="password"
                                               class="form-control" placeholder="Password Confirmation">
                                        <label for="passwordConfirmation">Re-type password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input type="checkbox" id="agree" />
                                        <label for="agree">* I Agree with
                                            <a href="#">Terms &amp; Conditions!</a></label>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="student-profile.blade.php"
                                       class="btn btn-primary">Create an Account</a>
                                </div>
                            </form>
                        </div>
                        <div class="#">
                            <ol class="breadcrumb text-right">
                                <li><a href="{{ Route('auth.login') }}"
                                       class="link-text-color">Sign in</a></li>
                                <li class="forgot-password">
                                    <a href="password.html">Forgot password?</a>
                                </li>
                                <li class="active">About this project</li>
                            </ol>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection
