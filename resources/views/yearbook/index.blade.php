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
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title text-headline" id="myModalLabel">Chidi Nweke</h4>
                    </div>
                    <div class="modal-body modalash">
                        <div class="row">
                            <div class="col-md-4 paper-shadow">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="cover overlay cover-image-full hover" style="height: 150px;">
                                        <img src="images/chid.jpg" alt="person" class="width-100pc">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="card-inner">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="fa fa-fw fa-briefcase fa-lg text-headline"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="yrdetail">Web Designer</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="fa fa-fw fa-phone-square fa-lg text-headline"></i>
                                            </div>
                                            <div class="media-body"><p class="yrdetail">2348066077313</p></div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="fa fa-fw fa-home fa-lg text-headline"></i>
                                            </div>
                                            <div class="media-body"><p class="yrdetail">Lagos, Nigeria</p></div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="fa fa-fw fa-map-marker fa-lg text-headline"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="yrdetail">
                                                    2120 Shefield Crescent Close GRA VGC Lekki Phase 6
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="yrdetail-bio">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="fa fa-fw fa-user fa-lg text-headline"></i>
                                            </div>
                                            <div class="media-body"><p class="yrdetail">Bio:</p></div>
                                        </div>
                                        <p>To stack multiple icons, use the fa-stack class on the parent, the fa-stack-1x for the regularly sized icon, and fa-stack-2x for the larger icon. fa-inverse can be used as an alternative icon color. You can even throw larger icon classes on the parent to get further control of sizing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="row yrshare-pad">
                                        <div class="col-md-6">
                                            <span class="pull-left">
                                                <span class="yr-headline">Profile Views:</span>
                                                <span class="yr-padwy">3000</span></span>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="pull-right yr-headline">
                                                <span class="yr-headline">Share This:</span>
                                                <a href="#" class="fa fa-fw fa-facebook"></a>
                                                <a href="#" class="fa fa-fw fa-twitter"></a>
                                                <a href="#" class="fa fa-fw fa-google-plus"></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        <a class="text-headline">{{ $user->first_name }} {{ $user->last_name }}</a>
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
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <ul class="pagination margin-top-none">
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection