@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('contact Us') }}
@endsection
@section('meta_tags')
    {{ __('contact Us, proschimneyclening') }}
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
                        <h1>Contact us</h1>
                        <h6><a href="{{ route('home') }}">Home</a> / Contact</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END Header -->
    <div id="contact-us" class="contact-us-area section-padding">
        <div class="container">
            <div class="contact-us-wrapper">
                <div class="row gx-0">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="contact-us-inner">
                            <div class="info-i"><span><i class="las la-map-marker"></i></span></div>
                            <h5>Location</h5>
                            <p>66 Broklyn Streat <br>New York, USA</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="contact-us-inner">
                            <div class="info-i"><span><i class="las la-clock"></i></span></div>
                            <h5>Office Hour</h5>
                            <p>Monday-Friday <br>08.00-20.00</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="contact-us-inner">
                            <div class="info-i"><span><i class="las la-mobile"></i></span></div>
                            <h5>Phone Number</h5>
                            <p>(+1)212-946-2064 <br>(+3)112-976-2067</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="contact-us-inner">
                            <div class="info-i"><span><i class="las la-envelope"></i></span></div>
                            <h5>E-mail Address</h5>
                            <p>info@expoint.com<br>info@webmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-page" class="contact-section blue-bg section-padding">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 text-center wow fadeInRight">
                    <div class="contact-form-wrapper">
                        <div class="section-title">
                            <h2>Get in <b>Touch</b></h2>
                        </div>
                        <div class="contact-form">
                            @if (Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }} mb-2">
                                    {{ Session::get('message') }}
                                </p>
                            @endif
                            <form action="{{ route('contact.store') }}" method="POST" id="contact_form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" id="name" placeholder="Name" name="name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" class="email" id="eemail" placeholder="Email"
                                            name="email" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" id="msg_subject" placeholder="Subject" name="subject"
                                            required>
                                    </div>
                                    <div class="col-lg-12">
                                        {{-- <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message"></textarea> --}}
                                        <textarea id="message" rows="7" placeholder="Massage" required name="message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-12 text-center">
                                        <button class="main-btn" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start contact Area -->
    <div class="map-area-top">
        <div class="container-full">
            <div class="row">
                <!-- Start contact icon column -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Start Map -->
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.547206339729!2d74.33781015!3d31.509127499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919045d068c3be1%3A0xb5921f5500b949c1!2sBlock%20E2%20Block%20E%202%20Gulberg%20III%2C%20Lahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1724777464483!5m2!1sen!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <!-- End Map -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
@endsection
