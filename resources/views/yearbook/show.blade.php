@extends('layouts.yearbookmaster')

@section('title')
    Year Book
@endsection
@section('content')
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="media media-grid media-clearfix-xs">
                        <div class="media-left">
                            <div class="width-200 width-auto-xs">
                                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                                    <img src="{{ $requestedUser->getAvatarUrl() }}"
                                         alt="{{ $requestedUser->username }}" class="width-100pc" />
                                    <div class="panel-body">
                                        <a href="{{ route('user.profile', $requestedUser->username) }}"
                                           class="text-headline">{{ $requestedUser->first_name }}
                                            {{ $requestedUser->last_name }}</a>
                                    </div>
                                    <hr/>
                                </div>
                                <div class="panel panel-default">
                                    <ul class="list-group text-subhead">
                                        @if($requestedUser->profile->facebook)
                                            <li class="list-group-item">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <i class="fa fa-facebook fa-fw text-blue-800"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="{{ $requestedUser->profile->facebook }}"
                                                           target="_blank" class="link-text-color">Facebook</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        @if($requestedUser->profile->twitter)
                                            <li class="list-group-item">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <i class="fa fa-twitter fa-fw text-blue-300"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="{{ $requestedUser->profile->twitter }}"
                                                           target="_blank" class="link-text-color">Twitter</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        @if($requestedUser->profile->linkedin)
                                            <li class="list-group-item">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <i class="fa fa-linkedin fa-fw text-blue-300"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="{{ $requestedUser->profile->linkedin }}"
                                                           target="_blank" class="link-text-color">Linkedin</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        @if($requestedUser->profile->instagram)
                                            <li class="list-group-item">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <i class="fa fa-instagram fa-fw text-pink-300"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="{{ $requestedUser->profile->instagram }}"
                                                           target="_blank" class="link-text-color">Instagram</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        @if($requestedUser->profile->google)
                                            <li class="list-group-item">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <i class="fa fa-google-plus fa-fw text-red-800"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="{{ $requestedUser->profile->google }}"
                                                           target="_blank" class="link-text-color">Google-Plus</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="row yrshare-pad">
                                    <div class="col-md-6">
                                        <span class="pull-left">
                                            <a href="{{ route('yearbook') }}"
                                               class="yr-headline">Go Back to Previous Page</a>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="pull-right yr-headline">
                                            <span class="yr-headline">Share This:</span>
                                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(route('user.profile', $requestedUser->username))?>&title=<?php echo urlencode('Check out ' . $requestedUser->username . ' on MIT 2014/2015 E-YearBook')?>" class="fa fa-fw fa-facebook"></a>
                                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(route('user.profile', $requestedUser->username))?>&text=<?php echo urlencode('Check out ' . $requestedUser->username . ' on MIT 2014/2015 E-YearBook')?>" target="_blank" class="fa fa-fw fa-twitter"></a>
                                            <a href="https://plus.google.com/share?url=<?php echo urlencode(route('user.profile', $requestedUser->username))?>" target="_blank" class="fa fa-fw fa-google-plus"></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="text-headline">
                                        About {{ $requestedUser->first_name }} {{ $requestedUser->last_name }}
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <p>{{ $requestedUser->profile->description }}</p>
                                </div>
                            </div>
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="card-inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-fw fa-briefcase fa-lg text-headline"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="yrdetail">{{ $requestedUser->profile->occupation }}</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-fw fa-phone-square fa-lg text-headline"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="yrdetail">{{ $requestedUser->phone_no }}</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-fw fa-home fa-lg text-headline"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="yrdetail">{{ $requestedUser->profile->country }}</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-fw fa-map-marker fa-lg text-headline"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="yrdetail">{{ $requestedUser->profile->address }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">My Account</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item">
                                    <a class="link-text-color" href="{{ url('/') }}">Profile</a>
                                </li>
                                @if(Auth::check())
                                    <li class="list-group-item">
                                        <a class="link-text-color"
                                           href="{{ url('/profile/edit') }}">Manage Profile</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="link-text-color" href="{{ route('logout') }}">
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <h3>Related Profile</h3>
                    @foreach($randomUsers as $randomUser)
                        <div class="related-profile panel-default">
                            <div class="panel-body">
                                <div class="media media-clearfix-xs">
                                    <div class="media-left">
                                        <div class="cover width-90 width-100pc-xs overlay cover-image-full hover"
                                             style="height: 90px;">
                                            <span class="img icon-block s90 bg-default"></span>
                                            <span class="overlay overlay-full padding-none icon-block s90 bg-default"
                                                  style="height: 90px;">
                                                <span class="v-center">
                                                     <img src="{{ $randomUser->getAvatarUrl() }}"
                                                          alt="{{ $randomUser->username }}" class="width-100pc" />
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading margin-v-5-3">
                                            <a href="{{ route('user.profile', $randomUser->username) }}"
                                                >{{ $randomUser->first_name }}
                                                {{ $randomUser->last_name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection