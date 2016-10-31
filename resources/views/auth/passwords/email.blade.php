@extends('layouts.master')

@section('title')
    Recover Password
@endsection
<!-- Main Content -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <section class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading">
                        <h1 class="margin-none">Recover Password</h1>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="form-control-material">
                                <input class="form-control" id="username" type="text"
                                       placeholder="Enter your Matric Number here">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="student-profile.blade.php"
                               class="btn btn-primary text-right">Recover<i class="fa fa-fw fa-unlock-alt"></i></a>
                        </div>
                    </div>
                    <div class="text-center">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/login') }}" class="link-text-color">
                                    <i class="fa fa-fw fa-chevron-left"></i>Cancel and go back to login page.</a></li>
                        </ol>
                    </div>
                </section>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection
