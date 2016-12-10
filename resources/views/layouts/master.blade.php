<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> @yield('title') </title>
        <link href="{{ asset('css/all.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('styles')
    </head>
    <body>
          @if (!Auth::guest())
            @include('layouts.navigation')
          @endif
        <!-- <div class="content"> -->
        @yield('content')
        <!--  </div> -->
        <!-- Footer -->
        <footer class="footer">
            @if(Auth::check() and Auth::user()->active == false)
                <div role="provisionFail" class="provision-status provision-status-orange">
                    Your account is currently being provisioned. You can start exploring, and we'll let you know when your profile appears in the yearbook.
                </div>
            @endif
            <div class="container">
                <strong>MIT Yearbook</strong> v1.0 &copy; Copyright 2016
            </div>
        </footer>
        <!-- // Footer -->
        <script src="{{ asset('js/inlineJS.js') }}"></script>
        <script src="{{ asset('js/vendor/core/jquery.js') }}"></script>
        <script src="{{ asset('js/vendor/core/bootstrap.js') }}"></script>
        <script src="{{ asset('js/vendor/core/breakpoints.js') }}"></script>
        <script src="{{ asset('js/vendor/core/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('js/vendor/core/isotope.pkgd.js') }}"></script>
        <script src="{{ asset('js/vendor/core/packery-mode.pkgd.js') }}"></script>
        <script src="{{ asset('js/vendor/core/jquery.grid-a-licious.js') }}"></script>
        <script src="{{ asset('js/vendor/core/jquery.cookie.js') }}"></script>
        <script src="{{ asset('js/vendor/core/jquery-ui.custom.js') }}"></script>
        <script src="{{ asset('js/vendor/core/load_image.js') }}"></script>
        <script src="{{ asset('js/vendor/core/jquery.debouncedresize.js') }}"></script>
        <script src="{{ asset('js/vendor/core/modernizr.js') }}"></script>
        <script src="{{ asset('js/vendor/core/velocity.js') }}"></script>
        <script src="{{ asset('js/vendor/forms/all.js') }}"></script>
        <script src="{{ asset('js/vendor/media/slick.js') }}"></script>
        <script src="{{ asset('js/vendor/nestable/jquery.nestable.js') }}"></script>
        <script src="{{ asset('js/vendor/countdown/all.js') }}"></script>
        <script src="{{ asset('js/app/essentials.js') }}"></script>
        <script src="{{ asset('js/app/layout.js') }}"></script>
        <script src="{{ asset('js/app/media.js') }}"></script>
        <script src="{{ asset('js/app/material.js') }}"></script>
        <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
              ga('create', 'UA-88764117-1', 'auto');
              ga('send', 'pageview');
        </script>
        @yield('scripts')
    </body>
</html>
