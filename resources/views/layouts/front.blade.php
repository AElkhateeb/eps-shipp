<?php
use Illuminate\Support\Facades\App;
use App\Models\Service;
?>
<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">
<head>
    <meta charset="utf-8">
    <title>GoCargo - Freight, Logistics & Transportation Website Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- LOAD CSS FILES -->
    <link href="{{URL::asset('front/css/main.css')}}" rel="stylesheet" type="text/css">
</head>

<body <?= (App::currentLocale()=='en')? 'dir="ltr"': 'dir="rtl" '?> >
<div id="preloader"></div>
<div id="wrapper">

    <!-- header begin -->
    <header class="transparent">
        <div class="container">
            <span id="menu-btn"></span>

            <div class="row">
                <div class="col-md-3">

                    <!-- logo begin -->
                    <div id="logo">
                        <div class="inner">
                            <a href="{{ url(App::currentLocale().'/') }}" >
                                <img src="img/logo.png" alt="" class="logo-1">
                                <img src="img/logo.png" alt="" class="logo-2">
                            </a>

                        </div>
                    </div>
                    <!-- logo close -->

                </div>

                <div class="col-md-9">

                    <!-- mainmenu begin -->
                    <nav id="mainmenu-container">
                        <ul id="mainmenu" class="text-right">
                            <li><a href="{{ url(App::currentLocale().'/') }}">{{__('front.home')}}</a></li>
                            <li><a href="{{ url(App::currentLocale().'/services') }}">{{__('front.services')}}</a>
                                <ul>
                                    <li><a href="{{ url(App::currentLocale().'/services') }}">{{__('front.services')}}</a></li>
                                    <?php
                                    $services = Service::limit(6)->get(); // return collection
                                    $services->makeHidden(['resource_url']);
                                    //$services->title['en']
                                    ?>
                                    @foreach($services as $service)
                                        <li><a href="{{ url(App::currentLocale().'/service/'.$service->id) }}">{{ $service->title  }}</a></li>
                                    @endforeach


                                </ul>
                            </li>
                            <li><a href="{{ url(App::currentLocale().'/about') }}">{{__('front.about')}}</a></li>
                            <li><a href="{{ url(App::currentLocale().'/career') }}">{{__('front.career')}}</a></li>
                            <li><a href="{{ url(App::currentLocale().'/pricing') }}">{{__('front.pricing')}}</a></li>
                            <li><a href="{{ url(App::currentLocale().'/contact') }}">{{__('front.contact')}}</a></li>
                        </ul>
                    </nav>
                    <!-- mainmenu close -->

                    <!-- search -->
                    <div class="search text-right">
                        <a class="btn-default" href="{{ url((App::currentLocale()=='en')? 'ar': 'en').'/' }}"> <?= (App::currentLocale()=='en')? 'العربية': 'English'?></a>
                        <!--button type="submit" class="btn-search-icon">
                            <i class="fa fa-search"></i>
                        </button-->
                    </div>
                    <!-- social icons close -->

                </div>
            </div>
        </div>
    </header>
    <!-- header close -->

    <!-- content begin -->
    <div id="content" class="no-padding">
@yield('content')

</div>


    <!-- footer begin -->
    <footer class="sticky">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="widget widget_tags">
                        <h3>About Us</h3>
                        <img src="img/logo.png" alt="" class="marginbottom20">
                        <div class="clearfix"></div>
                        Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae.
                        <br>
                        <a href="#" class="btn-arrow id-color hover-light"><span class="line"></span><span class="url">View Details</span></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget">
                        <h3>Twitter Feeds</h3>
                        <div id="tweecool" class="twitter-widget"></div>


                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget">
                        <h3>Newsletter</h3>
                        Subscribe to our newsletter and stay updated for special offers!
                        <div class="divider"></div>
                        <input type="text" class="form-control form-border text-center marginbottom10" name="email" id="email" placeholder="Your name" />
                        <input type="submit" id="send" value="Subscribe Now" class="btn btn-custom padding10 width100p" />
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget">
                        <h3>Useful Links</h3>
                        <ul class="list-1-col">
                            <li><a href="">Services</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Disclaimer</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Location</a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <div class="subfooter">
            &copy; Copyright 2016 - GoCargo by ExoTheme
        </div>
    </footer>
    <!-- footer close -->
    </div>

    <!-- LOAD JS FILES -->
    <script src="{{URL::asset('front/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('front/js/jquery.isotope.min.js')}}"></script>
    <script src="{{URL::asset('front/js/easing.js')}}"></script>
    <script src="{{URL::asset('front/js/jquery.ui.totop.js')}}"></script>
    <script src="{{URL::asset('front/js/selectnav.js')}}"></script>
    <script src="{{URL::asset('front/js/ender.js')}}"></script>
    <script src="{{URL::asset('front/js/owl.carousel.js')}}"></script>
    <script src="{{URL::asset('front/js/jquery.fitvids.js')}}"></script>
    <script src="{{URL::asset('front/js/jquery.plugin.js')}}"></script>
    <script src="{{URL::asset('front/js/wow.min.js')}}"></script>
    <script src="{{URL::asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('front/js/tweecool.js')}}"></script>
    <script src="{{URL::asset('front/js/jquery.stellar.js')}}"></script>
    <script src="{{URL::asset('front/js/typed.js')}}"></script>

    <!-- theme custom and plugin settings -->
    <script src="{{URL::asset('front/js/custom.js')}}"></script>
    <script src="{{URL::asset('front/js/custom-tweecool.js')}}"></script>

</body>
</html>
