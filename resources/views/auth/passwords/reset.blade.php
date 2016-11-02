@extends('layouts.master')

@section('title')
    Reset Password
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
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">
                                {!! session('warning') !!}
                            </div>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form role="form" action="{{ url('/password/reset') }}" method="post" novalidate>
                            {!! csrf_field() !!}

                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <div class="form-control-material">
                                    <input class="form-control" id="email" type="email" name="email"
                                       placeholder="Enter your Username here" value="{{ $email or old('email') }}">
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <input class="form-control" id="password" type="password" name="password"
                                           placeholder="Enter your password here">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <input class="form-control" id="password_confirmation" type="password"
                                           name="password_confirmation"
                                           placeholder="Enter your Username here">
                                    <label for="password_confirmation">Confirm Password</label>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary text-righ">Reset Password
                                    <i class="fa fa-fw fa-unlock-alt"></i></button>
                            </div>
                        </form>
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
