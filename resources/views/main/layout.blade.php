<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <title> {{ __('VujaDe Education') }} </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

{{-- Google Tag  --}}

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ERFW2LV1ZW"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-ERFW2LV1ZW');
</script>


<body>
    <div class="bg-top navbar-light" style="margin-bottom: -22px">
        <div class="container header-section">
            <div class="row no-gutters d-flex align-items-end">
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span>
                </button>
                <div class="col-md-4 d-flex align-items-center logo">
                    <a class="navbar-brand" href="{{route('home')}}" style="width: 170px; height: 170px"><img
                            src="{{asset('logo-new.jpg')}}" alt="" style="width : 192px;height : 192px" /></a>
                </div>
                <div class="col-lg-8 d-block"></div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center px-4">
            <form action="{{route('courses.search')}}" method="POST" class="searchform order-lg-last">
                @csrf
                <div class="form-group d-flex">
                    <input type="text"  name="search" class="form-control pl-3" placeholder="{{__("Search")}}" />
                    <button type="submit" placeholder="" class="form-control search">
                        <span class="ion-ios-search"></span>
                    </button>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="{{ route('home') }}" class="nav-link pl-0">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">{{ __('About') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('courses') }}" class="nav-link">{{ __('Courses') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">{{ __('Staff') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link">{{ __('Blog') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">{{ __('Contact') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (App::getLocale() == 'en')
                            <a href="{{ route('locale', ['locale' => 'ar']) }}" class="nav-link">{{ __('Ar') }}</a>
                        @else
                            <a href="{{ route('locale', ['locale' => 'en']) }}" class="nav-link">{{ __('En') }}</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    {{-- Content Here --}}

    @yield('content')
    {{-- End Of Contnet --}}

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">{{ __('Have a Question?') }}</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <span class="icon icon-map-marker"></span><span class="text">Thaka center <br>
                                        Roshen front - Riyadh
                                    </span>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-phone"></span><span
                                            class="text">+966544615194</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@vujadesa.com</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg)"></a>
                            <div class="text">
                                <h3 class="heading">
                                    <a href="#">Even the all-powerful Pointing has no control about</a>
                                </h3>
                                <div class="meta">
                                    <div>
                                        <a href="#"><span class="icon-calendar"></span> June 27, 2019</a>
                                    </div>
                                    <div>
                                        <a href="#"><span class="icon-person"></span> Admin</a>
                                    </div>
                                    <div>
                                        <a href="#"><span class="icon-chat"></span> 19</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-5 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg)"></a>
                            <div class="text">
                                <h3 class="heading">
                                    <a href="#">Even the all-powerful Pointing has no control about</a>
                                </h3>
                                <div class="meta">
                                    <div>
                                        <a href="#"><span class="icon-calendar"></span> June 27, 2019</a>
                                    </div>
                                    <div>
                                        <a href="#"><span class="icon-person"></span> Admin</a>
                                    </div>
                                    <div>
                                        <a href="#"><span class="icon-chat"></span> 19</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6 col-lg-4">
                    <div class="ftco-footer-widget mb-5 ml-md-4">
                        <h2 class="ftco-heading-2">{{__("Links")}}</h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ route('home') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>{{ __('Home') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>{{ __('About') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}"><span
                                        class="ion-ios-arrow-round-forward mr-2"></span>{{ __('Contact') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    {{-- <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Subscribe Us!</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center"
                                    placeholder="Enter email address" />
                                <input type="submit" value="Subscribe" class="form-control submit px-3" />
                            </div>
                        </form>
                    </div> --}}
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2 mb-0">{{__("Connect with Us")}}</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate">
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="ftco-animate">
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved |
                        <i class="icon-heart" aria-hidden="true"></i>
                        <a href="https://vujadesa.com" target="_blank">VujaDe</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
    <script src="{{ asset('assets/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
