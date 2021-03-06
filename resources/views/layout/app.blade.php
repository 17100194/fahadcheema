<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Fahad Cheema - UI/UX Web Developer</title>


    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

    <!-- Web Fonts
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/colors/color.css')}}"/>

    <!-- Favicons
    ================================================== -->
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">


</head>
<body>

<div class="loader">
    <div class="loader__figure"></div>
</div>

<div class="main content">

    <!-- Nav and Logo
    ================================================== -->
    @if(!request()->is('/'))
    {{--<header class="cd-header">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 ml-3 mr-md-3">--}}
                    {{--<div class="logo-wrap">--}}
                        {{--<a href="{{url('/')}}"><h3>Fahad Cheema</h3></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</header>--}}
    @endif
    <div class="nav">
        <div class="nav__content">
            <ul class="nav__list">
                <li class="nav__list-item active-nav"><a data-toggle="collapse" href="#collapseSub" role="button" aria-expanded="false" aria-controls="collapseSub">work</a>
                    <ul class="sub-links collapse" id="collapseSub">
                        <li class="active-nav"><a href="index.html">slice revealer</a></li>
                        <li><a href="index-1.html">scrolling letters</a></li>
                        <li><a href="index-2.html">slider hero</a></li>
                        <li><a href="index-3.html">video showcase</a></li>
                        <li><a href="index-4.html">masonry portfolio</a></li>
                        <li><a href="index-5.html">title follow mouse</a></li>
                        <li><a href="index-6.html">parallax portfolio</a></li>
                    </ul>
                </li>
                <li class="nav__list-item"><a href="studio.html">studio</a></li>
                <li class="nav__list-item"><a href="blog.html">journal</a></li>
                <li class="nav__list-item"><a href="contact.html">contact</a></li>
            </ul>
        </div>
    </div>

    @yield('content')

    <div class="section padding-top-bottom-big background-grey">
        <div class="container-fluid mx-0" data-enllax-ratio=".15" data-enllax-type="foreground" data-enllax-direction="horizontal">
            <div class="row">
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="{{asset('img/laravel.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-2 mt-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="{{asset('img/wordpress.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="{{asset('img/jquery.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="{{asset('img/htmlcss.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="{{asset('img/php.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-img">
                        <img src="{{asset('img/mysql.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-big padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 footer" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
                    <p>2018 © All rights reserved. Developed by <a href="{{url('/')}}">Fahad Cheema</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="social-fixed-left">
        <a href="https://www.facebook.com/fahadcreed" target="_blank">facebook</a>
        <a href="https://www.instagram.com/fahadcreed10" target="_blank">instagram</a>
    </div>

    <div class="scroll-to-top">to top</div>

</div>

<!-- JAVASCRIPT
================================================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/uncover.js')}}"></script>
<script src="{{asset('js/sliceRevealer.js')}}"></script>
<script src="{{asset('js/scrollingLettersAnimation.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@yield('scripts')

<!-- End Document
================================================== -->
</body>
</html>