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
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form role="form" action="{{ url('/register') }}" method="post" novalidate>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input type="text" class="form-control" name="username"
                                               placeholder="Enter your Matric Number here" id="username">
                                        <label for="username">Username</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="first_name" name="first_name" type="text" class="form-control"
                                               placeholder="First Name">
                                        <label for="firstName">First name</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="last_name" name="last_name" type="text" class="form-control"
                                               placeholder="Last Name">
                                        <label for="lastName">Last name</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="email" name="email" type="email" class="form-control"
                                               placeholder="Email">
                                        <label for="email">Email address</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="password" name="password" type="password" class="form-control"
                                               placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input id="password_confirmation" name="password_confirmation" type="password"
                                               class="form-control" placeholder="Password Confirmation">
                                        <label for="password_confirmation">Re-type password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input type="checkbox" id="agree" name="agreement" />
                                        <label for="agree">* I Agree with
                                            <a href="#">Terms &amp; Conditions!</a></label>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit"
                                        class="btn btn-primary">Create an Account</button>
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
