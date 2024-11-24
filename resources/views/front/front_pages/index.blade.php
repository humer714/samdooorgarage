@extends('front.layout_pages.app')
@section('meta_title')
{{ __('Home') }}
@endsection
@section('meta_tags')
{{ __('Home, Sam Garage Door') }}
@endsection
@section('meta_description')
{{ __('Garage Door Revolution, in modern times, marks the shift from manual garage door operation to one dominated by advanced automatic door opener systems and repair services.') }}
@endsection


@section('content')
<!-- Start Slider Area -->

<div class="homepage-slides owl-carousel">
    <div class="single-slide-item" style="background-image: url('{{ asset('front/asset2/img/slider/slide-1.jpg') }}');">
        <div class="overlay"></div>
        <div class="hero-area-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                        <div class="section-title">
                            <h6>Welcome to Sam Garage Door</h6>
                            <h1>Repair Solutions <br>for Garage Openers</h1>
                            <p> Garage Door Revolution, in modern times, marks the shift from manual garage door <br>
                                operation to one dominated by advanced automatic door opener systems and repair services.</p>
                        </div>
                        <a href="{{ route('services') }}" class="main-btn">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-slide-item hero-area-bg-2"
        style="background-image: url('{{ asset('front/asset2/img/slider/slide-2.jpg') }}');">
        <div class="overlay"></div>
        <div class="hero-area-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
                        <div class="section-title">
                            <h6>Since in 1995</h6>
                            <h1>Your Garage Opener <br> <b>Repair Specialists</b></h1>
                            <p> Garage Door Revolution, in modern times, marks the shift from manual garage door <br>
                                operation to one dominated by advanced automatic door opener systems and repair services.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="main-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Slider Area -->


<!-- About Section-->

<div class="about-area section-padding pt-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay=".3s">
                <div class="info-content-area">
                    <div class="section-title">
                        <h6>About Us</h6>
                        <h2>Quality Garage Door Opener Services Near You</h2>
                    </div>
                    <p>Since 1995, we have focused on delivering outstanding service, emphasizing communication and a
                        keen attention to detail to ensure our clients receive the highest value in every interaction.</p>
                    <p class="highlight"><i class="las la-check-circle"></i>Committed to integrity and professional service always.</p>
                    <p class="highlight"><i class="las la-check-circle"></i>Flexible, high-quality solutions tailored to clients.
                    </p>
                    <p class="highlight"><i class="las la-check-circle"></i>Using the latest machinery for efficient service.</p>

                    <a href="{{ route('about_us') }}" class="main-btn">Learn More</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".4s">

                <div class="info-img">
                    <img src="{{ asset('front/asset2/img/about/about.jpg') }}" alt="">

                    <div class="experience-wrap">
                        <img src="{{ asset('front/asset2/img/electric-station.png') }}" alt="">
                        <span>25+</span>
                        <p>Year of Experience</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ENd About Section-->

<!-- Start Service area -->

<div class="service-area gray-bg service-3 section-padding pt-100">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <div class="section-title">
                    <h6>Services</h6>
                    <h2>Expert Service for<br> all type of Garage Door  Openers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $item)
            @if ($item->status == 1 && $item->is_active == 1)
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="service-single wow fadeInLeft animated" data-wow-delay="100ms">
                    <div class="service-img-wrap">
                        <div class="service-thumb">
                            <img src="{{ $item->image ?? asset('front/asset2/img/service/3-1.jpg') }}"
                                alt="">
                        </div>
                    </div>

                    <div class="service-content">
                        <h4>{{ $item->title ?? '' }}</h4>
                        <p>
                            {{ $item->excerpt ?? '' }}
                        </p>
                        <a class="main-btn primary" href="{{ route('service_detail', $item->slug) }}">Read
                            More</a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
</div>

<!-- End Service area -->

<!-- Start project Area -->

<!-- <div id="xtra" class="xtra-service-wrap section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <div class="section-title">
                    <h6>Our Projects</h6>
                    <h2>More <b>Additional</b> Projects in <br> Filling Station</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($projects as $item)
            @if ($item->status == 1 && $item->is_active == 1)
            <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="xtra-serve-area mt-50 wow fadeInLeft" data-wow-delay=".3s">
                    <a href="{{ route('project_detail', $item->slug) }}">
                        <img src="{{ $item->image ?? asset('front/asset2/img/xtra/01.jpg') }}" alt="">
                    </a>
                    <a href="{{ route('project_detail', $item->slug) }}">
                        <h5>{{ $item->title ?? '' }}</h5>
                    </a>
                    <a href="{{ route('project_detail', $item->slug) }}"
                        class="read-more">{{ $item->category ?? '' }}</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div> -->
<!-- End project Area -->

<!-- Testimonial Section -->

<div class="testimonial-area  section-padding">
    <div class="capricorn-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <div class="section-title">
                        <h6>Testimonial</h6>
                        <h2>What Our Clients Say About Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="client-carousel owl-carousel">
                        <div class="single-client-item " style="background: #f6f6f6;">
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

                        <div class="single-client-item " style="background: #f6f6f6;">
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

                        <div class="single-client-item" style="background: #f6f6f6;">
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

                        <div class="single-client-item" style="background: #f6f6f6;">
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

<!-- End Testimonial Section -->

<!--Blog Area Start-->

<div class="blog-area gray-bg section-padding mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="section-title">
                    <h6>Blog</h6>
                    <h2>Latest <b>News</b> & <b>Blogs</b></h2>
                </div>
            </div>

            <div class="col-lg-6 text-end">

            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $item)
            @if ($item->status == 1 && $item->is_active == 1)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="single-blog-item wow fadeInLeft" data-wow-delay=".4s">
                    <div class="blog-bg">
                        <a href="{{ route('blog_detail', $item->slug) }}">
                            <img src="{{ $item->image ?? asset('front/asset2/img/blog/1.jpg') }}"
                                alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <p class="blog-meta"><i class="las la-user-circle"></i>Admin | <i
                                class="las la-calendar-check"></i>{{ $item->created_at ? $item->created_at->format('d F, Y') : '' }}
                        </p>
                        <h5><a href="{{ route('blog_detail', $item->slug) }}">{{ $item->title ?? '' }}</a>
                        </h5>
                        <p>{{ $item->excerpt ?? '' }}</p>
                        <a href="{{ route('blog_detail', $item->slug) }}" class="read-more">Read More</a>
                    </div>

                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>



<!--End of Blog Area-->
@endsection