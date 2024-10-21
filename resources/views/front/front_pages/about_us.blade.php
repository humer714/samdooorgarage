@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('About Us') }}
@endsection
@section('meta_tags')
    {{ __('About Us, proschimneyclening') }}
@endsection
@section('meta_description')
    {{ __('Pros Chimney Cleaning is committed to quality customer service and practical, repeatable results in chimney sweeping, air duct cleaning.') }}
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
                            <h2>We're the Top <br><b>Filling Station</b> in Downdown</h2>
                        </div>
                        <p>Fuel ennovation for freight plan Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                            natus ipsam ea vero placeat? Quia consequuntur odio nemo incidunt, perferendis. </p>
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
                                            <h4>100% Pure Oil</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
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
                                            <h4>Accurate Meter</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
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
                        <h2 class="section-heading">Great Experience of<b> <br>Vehicle</b> Services</h2>
                    </div>
                    <p class="highlight mb-20">The Most Popular courier & delivery service provider. We are served domestic
                        and over world wide.</p>
                    <div class="single-feature-item wow fadeInUp" data-wow-delay=".2s">
                        <div class="num"><i class="las la-external-link-alt"></i></div>
                        <div class="feature-content">
                            <h5>Free Estimate</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et doloribus, omnis!</p>
                        </div>
                    </div>
                    <div class="single-feature-item wow fadeInUp" data-wow-delay=".4s">
                        <div class="num"><i class="las la-external-link-alt"></i></div>
                        <div class="feature-content">
                            <h5>24/7 Services</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et doloribus, omnis!</p>
                        </div>
                    </div>
                    <div class="single-feature-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="num"><i class="las la-external-link-alt"></i></div>
                        <div class="feature-content">
                            <h5>Flat Rate Fees</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et doloribus, omnis!</p>
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
                                <p>Tempore, cum soluta nobis est opio
                                    cumque nihil impedit quo minus ide
                                    maxime placeat facere possimus
                                    nis voluptas assumenda est, omni
                                    dolor repellendus emoribus autem
                                    quibusdam et aut officiis.
                                </p>
                                <div class="testimonial-author">
                                    <div class="author-img">
                                        <img src="{{ asset('front/asset2/img/testimonial/1.jpg') }}" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Paul Scholes</h5><span>Customer</span>
                                    </div>
                                </div>


                            </div>

                            <div class="single-client-item">
                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                                <p>Doloremue laudantium totam
                                    rem aperiam eaque iesa zuae
                                    ab illo inventore veritatis et ua
                                    i architecto beatae vitae dicta
                                    sunt explicabo nemo am voluptatem vitae dicta
                                    suntruia.enim is
                                    am voluptatem ruia.</p>
                                <div class="testimonial-author">
                                    <div class="author-img">
                                        <img src="{{ asset('front/asset2/img/testimonial/2.jpg') }}" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Monica Lisa</h5><span>Customer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-client-item">
                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                                <p>Nam libero tempore, cum soluta nobi
                                    est eligendi optio cumque nihil impeit
                                    quo minus id quod maxime placeat
                                    facere possimus, omnis voluptas ass
                                    umenda est, omnis dolor repellendus
                                    emporibus autem zrosi.</p>
                                <div class="testimonial-author">
                                    <div class="author-img">
                                        <img src="{{ asset('front/asset2/img/testimonial/3.jpg') }}" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Ryans Gigs</h5><span>Customer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-client-item">
                                <div class="testimonial-icon"><i class="las la-quote-left"></i></div>
                                <p>Doloremue laudantium totam
                                    rem aperiam eaque iesa zuae
                                    ab illo inventore veritatis et ua
                                    i architecto beatae vitae dicta
                                    sunt explicabo nemo am voluptatem vitae dicta
                                    suntruia.enim is
                                    am voluptatem ruia.</p>
                                <div class="testimonial-author">
                                    <div class="author-img">
                                        <img src="{{ asset('front/asset2/img/testimonial/4.jpg') }}" alt="">
                                    </div>
                                    <div class="author-desc">
                                        <h5>Sarah Fatima</h5><span>Customer</span>
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
