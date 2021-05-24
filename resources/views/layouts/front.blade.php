<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GoCargo - Freight, Logistics & Transportation Website Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- LOAD CSS FILES -->
    <link href="{{URL::asset('front/css/main.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
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
                            <a href="index.html">
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
                        <ul id="mainmenu">
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Homepage 1</a></li>
                                    <li><a href="index-2.html">Homepage 2</a></li>
                                    <li><a href="index-3.html">Homepage 3</a></li>
                                </ul>
                            </li>
                            <li><a href="services.html">Services</a>
                                <ul>
                                    <li><a href="services.html">All Services 1</a></li>
                                    <li><a href="services-2.html">All Services 2</a></li>
                                    <li><a href="#">Details + Sidebar</a>
                                        <ul>
                                            <li><a href="service-details-1.html">Service Details 1</a></li>
                                            <li><a href="service-details-2.html">Service Details 2</a></li>
                                            <li><a href="service-details-3.html">Service Details 3</a></li>
                                            <li><a href="service-details-4.html">Service Details 4</a></li>
                                            <li><a href="service-details-5.html">Service Details 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Details Full Page</a>
                                        <ul>
                                            <li><a href="service-details-alt-2.html">Service Details 1</a></li>
                                            <li><a href="service-details-alt-3.html">Service Details 2</a></li>
                                            <li><a href="service-details-alt-4.html">Service Details 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a>
                                <ul>
                                    <li><a href="#">About</a>
                                        <ul>
                                            <li><a href="about.html">About Us 1</a></li>
                                            <li><a href="about-2.html">About Us 2</a></li>
                                            <li><a href="about-3.html">About Us 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Clients</a>
                                        <ul>
                                            <li><a href="clients.html">Clients 1</a></li>
                                            <li><a href="clients-2.html">Clients 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="company.html">Company</a></li>
                                    <li><a href="people.html">People</a></li>
                                    <li><a href="history.html">History</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="careers.html">Careers</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </li>
                            <li><a href="#">News</a>
                                <ul>
                                    <li><a href="news.html">News Layout 1</a></li>
                                    <li><a href="news-2.html">News Layout 2</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mainmenu close -->

                    <!-- search -->
                    <div class="search text-right">
                        <input type="text" name="search" id="search" placeholder="search">
                        <button type="submit" class="btn-search-icon">
                            <i class="fa fa-search"></i>
                        </button>
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
