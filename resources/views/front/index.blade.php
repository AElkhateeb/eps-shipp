
@extends('layouts.front')
@section('content')

    <!-- section begin -->
    <section id="section-welcome" class="no-padding autoheight light-text" data-stellar-background-ratio="0.5">
        <div class="center-y">
            <div class="inner text-center">
                <div class="sub-intro-text"><span>We are commited to be the leading</span></div>
                <div class="divider-single"></div>
                <h1><span class="id-color">WORLD CLASS</span></h1>
                <div class="type-wrap title">
                    <div class="typed-strings">
                        <p>Logistic</p>
                        <p>Freight</p>
                        <p>Brokerage</p>
                    </div>
                    <span class="typed"></span>
                </div>
                <div class="divider-double"></div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section class="no-padding mt-90 absolute width100 z-index10 height90px overlaydark70">
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-4">
                    <div class="info-box padding20">
                        <i class="fa fa-clock-o"></i>
                        <div class="info-box_text">
                            <div class="info-box_title">Opening Times</div>
                            <div class="info-box_subtite">Monday - Friday: 08:00 - 16:00</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-box padding20">
                        <i class="fa fa-home"></i>
                        <div class="info-box_text">
                            <div class="info-box_title">Our Location</div>
                            <div class="info-box_subtite">777 Street Fourth Avenue</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-box padding20">
                        <i class="fa fa-phone"></i>
                        <div class="info-box_text">
                            <div class="info-box_title">Our Phone</div>
                            <div class="info-box_subtite">+22 090 1777 1999</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4"></div>
            </div>
        </div>
    </section>


    <!-- section begin -->
    <section id="section-side-2" class="side-bg">
        <div class="col-md-6 col-md-offset-6 pull-right image-container">
            <div class="background-image"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5">

                    <h2>Who We Are</h2>
                    <p class="lead">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                    <div class="divider-deco"><span></span></div>
                    <p>
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna. Nam nec tellus a odio tincidunt auctor.
                    </p>
                    <a href="#" class="btn-arrow id-color"><span class="line"></span><span class="url">View Details</span></a>

                </div>

                <div class="col-md-5 col-md-offset-2">
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-tracking">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="cta-form wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                        <input type="text" name="track" value="" placeholder="Insert tracking number here...">
                        <input type="submit" id="track-it" name="submit" value="TRACK IT">
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>

        <div id="section-tracking-result" class="light-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="divider-double"></div>
                        <div class="text-center">
                            <h3><span class="grey">Product ID:</span> 112345679087328</h3>
                        </div>


                        <div class="divider-double"></div>

                        <div class="wrapper-line padding40 rounded10">


                            <ul class="progress">
                                <li><a href="">Accepted</a></li>
                                <li class="beforeactive"><a href="">Order Processing</a></li>
                                <li class="active"><a href="">Shipment Pending</a></li>
                                <li><a href="">Estimated Delivery</a></li>
                            </ul>

                            <div class="divider-double"></div>

                            <ul class="timeline custom-tl">

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 03, 2015
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge success"><i class="fa fa-check-square-o wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment has been successfully delivered
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 03, 2015
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge warning"><i class="fa fa-warning wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment could not be delivered
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 03, 2015
                                        <span>20:07 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment has arrived in destination country
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 02, 2015
                                        <span>18:05 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The shipment is being transformed to destination country
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="timeline-inverted">
                                    <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                        Nov 01, 2015
                                        <span>10:08 pm</span>
                                    </div>
                                    <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                    <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                        <div class="timeline-body">
                                            The international shipment has been processed
                                            <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section close -->
    <!-- section begin -->
    <section id="section-features">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="wow fadeIn" data-wow-delay="0">Why Choose Us?
                        <span>Find reasons to choose us as your freight partner</span>
                    </h2>
                    <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s"></div>
                </div>
                <div class="col-md-6">
                    <div class="box-with-icon-left">
                        <i class="fa fa-ship icon-big"></i>
                        <div class="text">
                            <h2>Ocean Freight</h2>
                            <p>The word cargo refers in particular to goods or produce being conveyed generally for commercial gain by ship, boat, or aircraft, although the term is now often extended to cover all types of freight, including that carried by train, van, truck, or container. </p>
                            <div class="divider-single"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-with-icon-left">
                        <i class="fa fa-send-o icon-big"></i>
                        <div class="text">
                            <h2>Air Freight</h2>
                            <p>The word cargo refers in particular to goods or produce being conveyed generally for commercial gain by ship, boat, or aircraft, although the term is now often extended to cover all types of freight, including that carried by train, van, truck, or container. </p>
                            <div class="divider-single"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-with-icon-left">
                        <i class="fa fa-cubes icon-big"></i>
                        <div class="text">
                            <h2>Logistics</h2>
                            <p>The word cargo refers in particular to goods or produce being conveyed generally for commercial gain by ship, boat, or aircraft, although the term is now often extended to cover all types of freight, including that carried by train, van, truck, or container. </p>
                            <div class="divider-single"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-with-icon-left">
                        <i class="fa fa-train icon-big"></i>
                        <div class="text">
                            <h2>Cargo Express</h2>
                            <p>The word cargo refers in particular to goods or produce being conveyed generally for commercial gain by ship, boat, or aircraft, although the term is now often extended to cover all types of freight, including that carried by train, van, truck, or container. </p>
                            <div class="divider-single"></div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </section>
    <!-- section close -->
    <!-- section begin -->
    <section class="no-padding">
        <div class="container-fullwidth">
            <div id="bg-box-service-1" class="one-fourth">
                <div class="bg-color-fx light-text padding-5 text-center">
                    <h3>Ocean Freight</h3>
                    <div class="tiny-border margintop10 marginbottom10"></div>
                    <img src="front/img/services/1.png" class="img-responsive margintop20 marginbottom20 wow fadeInRight" alt="" />
                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                    <a href="service-details-1.html" class="btn-arrow hover-light"><span class="line"></span><span class="url">View Details</span></a>
                </div>
            </div>

            <div id="bg-box-service-2" class="one-fourth">
                <div class="bg-color-fx light-text padding-5 text-center">
                    <h3>Air Freight</h3>
                    <div class="tiny-border margintop10 marginbottom10"></div>
                    <img src="front/img/services/2.png" class="img-responsive margintop20 marginbottom20 wow fadeInRight" data-wow-delay=".3s" alt="" />
                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                    <a href="service-details-1.html" class="btn-arrow hover-light"><span class="line"></span><span class="url">View Details</span></a>
                </div>
            </div>

            <div id="bg-box-service-3" class="one-fourth">
                <div class="bg-color-fx light-text padding-5 text-center">
                    <h3>Contract Logistic</h3>
                    <div class="tiny-border margintop10 marginbottom10"></div>
                    <img src="front/img/services/3.png" class="img-responsive margintop20 marginbottom20 wow fadeInRight" data-wow-delay=".6s" alt="" />
                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                    <a href="service-details-1.html" class="btn-arrow hover-light"><span class="line"></span><span class="url">View Details</span></a>
                </div>
            </div>

            <div id="bg-box-service-4" class="one-fourth">
                <div class="bg-color-fx light-text padding-5 text-center">
                    <h3>Cargo Express</h3>
                    <div class="tiny-border margintop10 marginbottom10"></div>
                    <img src="front/img/services/4.png" class="img-responsive margintop20 marginbottom20 wow fadeInRight" data-wow-delay=".9s" alt="" />
                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                    <a href="service-details-1.html" class="btn-arrow hover-light"><span class="line"></span><span class="url">View Details</span></a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- section close -->



    <!-- section begin -->
    <section id="explore-4" class="side-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
                    <h2>They Says</h2>
                    <div class="divider-deco"><span></span></div>

                    <div id="testi-carousel-2" class="testi-slider wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                        <div class="item">
                            <blockquote>
                                Gocargo people professional and courteous attitude, expert knowledge and patience handling our specific issues are very important to our customer

                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="front/img/about/testimonials/testimonial-1.jpg" class="img-circle" alt="">
                                <span class="name"><strong>Jane Salima</strong>, General Manager<br>
                                            Nexus Motors</span>
                            </div>
                        </div>

                        <div class="item">
                            <blockquote>
                                Your representatives have very helpful attitude and their attention to detail help us to move our work smoothly without any delay...good job guys

                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="front/img/about/testimonials/testimonial-2.jpg" class="img-circle" alt="">
                                <span class="name"><strong>Dave Smith</strong>, Sales Manager<br>
                                            Jepara Furniture</span>
                            </div>
                        </div>

                        <div class="item">
                            <blockquote>
                                I'm really impressed by the professionalism that the Gocargo relocation. Now we stay with our new studio at Metro city thanks Gocargo

                            </blockquote>
                            <div class="arrow-down"></div>
                            <div class="testi-by">
                                <img src="front/img/about/testimonials/testimonial-3.jpg" class="img-circle" alt="">
                                <span class="name"><strong>Mike Martien</strong>, Web Designer<br>
                                            Bamskies Studio</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </section>
    <!-- section close -->


    <section id="section-contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="light-text">
                        <div class="bg-2 padding30">

                            <h2 class="id-color">Gocargo Commitment</h2>
                            <div class="tiny-border"></div>
                            <p class="lead big">
                                <i>Fell free to asking about Gocargo or Just say hello to us </i>
                            </p>
                            <div class="text-center">
                                <img src="front/img/contact/truck.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="row form-transparent">
                        <div class="col-md-12 wow fadeInDown">
                            <div class="text-label bg-color text-center light-text">
                                <h3>Quick Quote</h3>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control wow fadeInLeft" name="qq-name" id="qq-name" placeholder="Location">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control wow fadeInRight" name="qq-weight" id="qq-weight" placeholder="Weight">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control wow fadeInLeft" name="qq-destination" id="qq-destination" placeholder="Destination">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control wow fadeInRight" name="qq-packages" id="qq-packages" placeholder="No. of packages">
                        </div>

                        <div class="col-md-12 wow fadeInUp">
                            <input type="submit" class="form-control btn btn-custom" name="qq-submit" id="qq-submit" value="Get Rate Quote">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
