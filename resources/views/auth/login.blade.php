@extends('layouts.master')

@section('title')
    Student Sign In
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 pull-right">
                <div class="lock-container">
                    <section class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <h1 class="margin-none">Sign In</h1>
                        </div>
                        <div class="panel-body">
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form role="form" action="{{ url('/register') }}" method="post" novalidate>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input class="form-control" id="username" type="text" placeholder="Enter your Matric Number here">
                                        <label for="username">Username</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-control-material">
                                        <input class="form-control" id="password" type="password"
                                               placeholder="Enter Password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="" class="btn btn-primary text-right">Login
                                        <i class="fa fa-fw fa-unlock-alt"></i></a>
                                </div>
                            </form>
                        </div>
                        <div class="#">
                            <ol class="breadcrumb">
                                <li><a href="{{ Route('auth.register') }}"
                                       class="link-text-color">Create account</a></li>
                                <li class="forgot-password">
                                    <a href="recover.blade.php">Forgot password?</a>
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
