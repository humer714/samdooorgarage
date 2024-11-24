@extends('front.layout_pages.app')


@section('meta_title')
{{ __('About Us') }}
@endsection
@section('meta_tags')
{{ __('About Us, Sam Garage Door') }}
@endsection
@section('meta_description')
{{ __('Garage Door Revolution, in modern times, marks the shift from manual garage door operation to one dominated by advanced automatic door opener systems and repair services.') }}
@endsection

@section('content')
<!-- Start Bottom Header -->

<div class="breadcroumb-area bread-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1>About Us</h1>
                    <h6><a href="{{ route('home') }}">Home</a> / About Us</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END Header -->

<!-- About Section -->

<div class="about-area sky-bg section-padding">
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-5">
                <div class="mt-10"></div>
                <div class="about-bg-wrapper wow fadeInUp" data-wow-delay=".2s">
                    <div class="about-bg-innner bg-cover"></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-content-wrapper wow fadeInUp" data-wow-delay=".4s">
                    <div class="section-title">
                        <h6>About Us</h6>
                        <h2>We're the 24/7 <br><b>Opener Repair Experts in</b> <br> United States</h2>
                    </div>
                    <p> Fast 24/7 Certified, experienced technicians provide Garage door opener repair services
                        in all 50 states, covering residential and commercial properties. </p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="key-feature">
                                <div class="row gx-0">
                                    <div class="col-lg-4">
                                        <div class="about-icon">
                                            <img src="{{ asset('front/asset2/img/icon/oil.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4>100% Reliable Repair</h4>
                                        <p>Trustworthy garage door repair solutions every time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="key-feature">
                                <div class="row gx-0">
                                    <div class="col-lg-4">
                                        <div class="about-icon">
                                            <img src="{{ asset('front/asset2/img/icon/meter-checker.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4>Door Repair Masters</h4>
                                        <p>Your garage door repair experts, always ready.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Achievement Section-->

<div class="achievement-area">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box wow fadeInLeft" data-wow-delay=".2s">
                    <p class="counter-number"><span>2150</span>+</p>
                    <h6>Satisfied Client</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box wow fadeInLeft" data-wow-delay=".4s">
                    <p class="counter-number"><span>132</span></p>
                    <h6>Worldwide Branches</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box wow fadeInLeft" data-wow-delay=".6s ">
                    <p class="counter-number"><span>55</span></p>
                    <h6>Countries Covered</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter-box wow fadeInLeft" data-wow-delay=".8s">
                    <p class="counter-number"><span>4.8</span></p>
                    <h6>Review</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Choose Us Section -->

<div class="chooseus-area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <h6>Best Feature</h6>
                    <h2 class="section-heading">Top-Notch Garage <b> <br>Door</b> Services Guaranteed</h2>
                </div>
                <p class="highlight mb-20">Trusted Partner for Domestic and International Deliveries, Ensuring Timely and Secure Solutions Always.</p>
                <div class="single-feature-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="num"><i class="las la-external-link-alt"></i></div>
                    <div class="feature-content">
                        <h5>Free Estimate</h5>
                        <p>Get a free, hassle-free quote for garage door opener repair solutions</p>
                    </div>
                </div>
                <div class="single-feature-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="num"><i class="las la-external-link-alt"></i></div>
                    <div class="feature-content">
                        <h5>24/7 Services</h5>
                        <p>Round-the-clock garage door Opener repair services, every day of the year.</p>
                    </div>
                </div>
                <div class="single-feature-item wow fadeInUp" data-wow-delay=".6s">
                    <div class="num"><i class="las la-external-link-alt"></i></div>
                    <div class="feature-content">
                        <h5>Flat Rate Fees</h5>
                        <p>Clear, fixed pricing for all garage door repair and installation.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="feature-img wow fadeInUp" data-wow-delay=".6s">
                    <img src="{{ asset('front/asset2/img/feature.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Testimonial Section -->

<div class="testimonial-area dark-bg section-padding">
    <div class="capricorn-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <div class="section-title">
                        <h6>Testimonial</h6>
                        <h2 class="text-white">What Our Clients Say About Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="client-carousel owl-carousel">
                        <div class="single-client-item">
                            <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                            <p>I had a broken garage door opener and Sam Garage Door Opener Repair
                                Replacement was fantastic. They were quick to respond,
                                and the technician who came out was very knowledgeable.
                                They repaired the opener in no time. Highly recommend their services!
                            </p>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="{{ asset('front/asset2/img/testimonial/1.jpg') }}" alt="">
                                </div>
                                <div class="author-desc">
                                    <h5>Ramon Vicente</h5><span>Customer</span>
                                </div>
                            </div>


                        </div>

                        <div class="single-client-item">
                            <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                            <p>Sam Garage Door Opener Repair Replacement did a fantastic job troubleshooting and fixing my garage door remote.
                                The technician was professional and friendly, and the price was fair.
                                I’ll definitely call them again for any future repairs.</p>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="{{ asset('front/asset2/img/testimonial/2.jpg') }}" alt="">
                                </div>
                                <div class="author-desc">
                                    <h5>Natosha Jacobs</h5><span>Customer</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-client-item">
                            <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                            <p>Our garage door opener was making strange noises, so we contacted
                                Sam Garage Door Opener Repair Replacement for maintenance.
                                They did a thorough job and the opener is working smoothly now.
                                Definitely a reliable company.</p>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="{{ asset('front/asset2/img/testimonial/3.jpg') }}" alt="">
                                </div>
                                <div class="author-desc">
                                    <h5>Betty Clark</h5><span>Customer</span>
                                </div>
                            </div>
                        </div>

                        <div class="single-client-item">
                            <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                            <p>I had an issue with my garage door motor, and Sam Garage Door Opener Repair Replacement fixed it right away.
                                Their technician was efficient and very knowledgeable.
                                I would recommend them to anyone needing garage door repairs.</p>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="{{ asset('front/asset2/img/testimonial/4.jpg') }}" alt="">
                                </div>
                                <div class="author-desc">
                                    <h5>Louise Powell</h5><span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection