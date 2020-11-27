<!DOCTYPE html>
<html lang="en">
<!-- index18:21  -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Smart Tutor - {{ $title ?? ''}}</title>
    <!-- Css Files -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyphoto.css') }}" rel="stylesheet">
    <link href="{{ asset('build/mediaelementplayer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-two.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-three.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-four.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    @yield('styles')
</head>

<body>
    <header id="wm-header" class="wm-header-one">
        @guest
            @include('layouts.nav.guest')
        @else
            @include('layouts.nav.auth')
        @endguest
    </header>

    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
        @yield('content')
        @include('layouts.footer.footer')
    </div>

     <!-- ModalSearch Box -->
     <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form">
                        <span class="wm-color">Search Your KeyWord</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                                <li> <input type="submit" value="Search"> </li>
                            </ul>
                        </form>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalSearch Box -->

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.prettyphoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fitvideo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/skills.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.slider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/waypoints-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/mediaelement-and-player.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    @stack('scripts')
</body>

<!-- index18:22  -->

</html>
