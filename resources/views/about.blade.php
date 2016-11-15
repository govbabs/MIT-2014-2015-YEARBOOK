@extends('layouts.master')

@section('title')
    About MIT E-YEAR
@endsection
@section('content')
    @if(Auth::check())
        @include('layouts.secondaryTitleBar')
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <section class="panel panel-default paper-shadow" data-z="0.5">
                    <div class="panel-heading yrabout">
                        <h1 class="margin-none">About This Project</h1>
                    </div>
                    <div class="panel-body text-center recover-txt">
                        <div class="yrabout">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </div>
                    </div>
                    <div class="yrabout">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}" class="link-text-color"><i class="fa fa-fw fa-chevron-left"></i>Go back to profile page</a></li>
                        </ol>
                    </div>
                </section>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
