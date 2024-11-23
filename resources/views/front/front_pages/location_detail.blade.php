@extends('front.layout_pages.app')

@section('css')
<style>
    .breadcroumb-area {
        background: url('{{ $detail_data->image ?? asset(' front/asset2/img/background/b.jpg') }}');
    }

    .choose-us-icon:after {
        background: #ffff !important;
    }

    /* hover show pink */
    .choose-us-inner:hover .choose-us-icon:after {
        background: #FF9999 !important;
    }
</style>
@endsection
@section('meta_title')
{{ $detail_data->meta_title ?? '' }}
@endsection
@section('meta_tags')
{{ $detail_data->meta_tag ?? '' }}
@endsection
@section('meta_description')
{{ $detail_data->meta_description ?? '' }}
@endsection

@section('content')
<!-- Start Bottom Header -->
<div class="breadcroumb-area bread-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <!-- <h1>{{ $detail_data->title ?? '' }}</h1> -->
                    <h1>Sam Garage Door Opener Repair Replacement, {{ $detail_data->title ?? '' }}, {{ $detail_data->state->title ?? '' }}</h1>
                    <h6><a href="{{ route('home') }}">Home</a> /<a href="{{ route('locations') }}">Location</a> / {{ $detail_data->title ?? '' }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<div id="service-page" class="service-details-section section-padding pb-0">
    <div class="container">
        <div class="choose-us-wrapper wow fadeInUp" data-wow-delay=".2s">
            <div class="row gx-0">
                <div class="col-lg-3 col-md-6 col-12" style="padding-right:5px">
                    <div class="choose-us-inner" style="background-color:#f6f6f6 !important;">
                        <div class="choose-us-icon">
                            <img src="{{ asset('front/asset2/img/icon/oil.png') }}" alt="">
                        </div>
                        <h5>100% Reliable Repair</h5>
                        <p>Trustworthy garage door repair solutions every time</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12" style="padding-right:5px">
                    <div class="choose-us-inner" style="background-color:#f6f6f6 !important;">
                        <div class="choose-us-icon">
                            <img src="{{ asset('front/asset2/img/icon/meter-checker.png') }}" alt="">
                        </div>
                        <h5>Door Repair Masters</h5>
                        <p>Your garage door repair experts, always ready</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12" style="padding-right:5px">
                    <div class="choose-us-inner" style="background-color:#f6f6f6 !important;">
                        <div class="choose-us-icon">
                            <img src="{{ asset('front/asset2/img/icon/low-rate.png') }}" alt="">
                        </div>
                        <h5>Flat Rate Fees</h5>
                        <p>Clear, fixed pricing for all garage door repair and installation.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="choose-us-inner" style="background-color:#f6f6f6 !important;">
                        <div class="choose-us-icon">
                            <img src="{{ asset('front/asset2/img/icon/24-hours.png') }}" alt="">
                        </div>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock garage door Opener repair services, every day of the year.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="service-page" class="service-details-section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-service">
                    <p>{!! $detail_data->description !!}</p>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="service-page" class="service-details-section pb-0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <a href="tel:{{ $detail_data->contact_number ?? '+1 (866) 499-2110' }}" class="main-btn" style="float:none; display:inline;">{{ $detail_data->contact_number ?? '+1 (866) 499-2110' }}</a>
            </div>
        </div>
    </div>
</div>

<!--Contact button-->

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
<!-- Start Service area -->

<div class="service-area gray-bg service-3 section-padding pt-100">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <div class="section-title">
                    <h6>Services</h6>
                    <h2>Best Service for <br> all type of <b>Electric</b> vehicles</h2>
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
<!-- location Area Start excrept -->
<div id="service-page" class="service-details-section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-service">
                    <p>{!! $detail_data->excerpt !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Map -->
<div class="map-area-top">
    <div class="container-full">
        <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Start Map -->
                <div class="map-area">
                    <iframe
                        src="{{ $detail_data->google_map ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.547206339729!2d74.33781015!3d31.509127499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919045d068c3be1%3A0xb5921f5500b949c1!2sBlock%20E2%20Block%20E%202%20Gulberg%20III%2C%20Lahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1724777464483!5m2!1sen!2s' }}"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <!-- End Map -->
            </div>
        </div>
    </div>
</div>
<!-- end map -->

@endsection