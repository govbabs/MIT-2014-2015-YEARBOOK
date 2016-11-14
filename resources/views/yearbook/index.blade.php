@extends('layouts.master')

@section('title')
    Year Book
@endsection
@section('content')
    <div class="container">
        <div class="yearbook-intro">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="yearbook-pad">
                            <div class="col-md-4 col-sm-6 yearbook-titlefont">
                                University of Lagos MIT 2014 / 2015
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="yearbook-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($users as $user)
                            <div class="col-sm-6 col-md-3 text-center">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="cover overlay cover-image-full hover"
                                         style="height: 241px; !important;">
                                        <img src="{{ $user->getAvatarUrl() }}" alt="{{ $user->username }}"
                                             class="width-100pc">
                                    </div>
                                    <hr class="margin-none">
                                    <div class="panel-body">
                                        <a href="{{ route('user.profile', $user->username) }}"
                                           class="text-headline">{{ $user->first_name }} {{ $user->last_name }}</a>
                                    </div>
                                    <hr>
                                    <div class="panel-body">
                                        <span>
                                            <a href="#" target="_blank"
                                               class="btn  btn-circle" style="width: 0px !important;">
                                            </a>
                                        </span>
                                        @if(!is_null($user->profile->facebook))
                                            <span>
                                                <a href="{{ $user->profile->facebook }}" target="_blank"
                                                   class="btn btn-indigo-500 btn-circle">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </span>
                                        @endif
                                        @if(!is_null($user->profile->twitter))
                                            <span>
                                                <a href="{{ $user->profile->twitter }}" target="_blank"
                                                   class="btn btn-blue-500 btn-circle">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </span>
                                        @endif
                                        @if(!is_null($user->profile->google))
                                            <span>
                                                <a href="{{ $user->profile->google }}" target="_blank"
                                                   class="btn btn-danger btn-circle">
                                                        <i class="fa fa-google-plus"></i>
                                                </a>
                                            </span>
                                        @endif
                                        @if(!is_null($user->profile->linkedin))
                                            <span>
                                                <a href="{{ $user->profile->linkedin }}" target="_blank"
                                                   class="btn btn-blue-500 btn-circle">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </span>
                                        @endif
                                        @if(!is_null($user->profile->instagram))
                                            <span>
                                                <a href="{{ $user->profile->instagram }}" target="_blank"
                                                   class="btn btn-brown-600 btn-circle">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @include('pagination.default', ['paginator' => $users])
                </div>
            </div>
        </div>
    </div>
@endsection