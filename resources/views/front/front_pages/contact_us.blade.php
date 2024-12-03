@extends('front.layout_pages.app')


@section('meta_title')
{{ __('contact Us') }}
@endsection
@section('meta_tags')
{{ __('contact Us, Sam Garage Door') }}
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
                        <p>United States</p>
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
                        <p>+1 (866) 982-4629<br>+1 (866) 982-4629</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="contact-us-inner">
                        <div class="info-i"><span><i class="las la-envelope"></i></span></div>
                        <h5>E-mail Address</h5>
                        <p>Support@customerdeskhelp.com<br>Support@customerdeskhelp.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .form-check {
        display: flex;
        /* Ensures the checkbox and label are aligned in a row */
        /* align-items: center; */
        /* Vertically aligns checkbox and label */
        gap: 5px;
       
    }

</style>

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
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" id="phone" placeholder="Phone" name="phone" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" id="postcode" placeholder="Postcode" name="postcode"
                                        required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" id="msg_subject" placeholder="Subject" name="subject"
                                        required>
                                </div>
                                <div class="col-lg-12" data-wow-delay=".2s">
                                    <label for="services" class="form-label mb-3 mt-3">
                                        <h5 class="text-white text-start">Type of service do you need?</h5>
                                    </label>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-check">
                                                <input class="form-check-input p-0" type="checkbox" id="garage_door_repair" name="garage_door_repair" value="Garage Door Repair">
                                                <label class="form-check-label text-white" for="garage_door_repair">Garage Door Repair</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-check">
                                                <input class="form-check-input p-0" type="checkbox" id="garage_opener_installation" name="garage_opener_installation" value="Garage Opener Installation">
                                                <label class="form-check-label text-white" for="garage_opener_installation">Garage Opener Installation</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-check">
                                                <input class="form-check-input p-0" type="checkbox" id="door_out_of_tracks" name="door_out_of_tracks" value="Door Out of Tracks">
                                                <label class="form-check-label text-white" for="door_out_of_tracks">Door Out of Tracks</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-check">
                                                <input class="form-check-input p-0" type="checkbox" id="garage_door_installation" name="garage_door_installation" value="Garage Door Installation">
                                                <label class="form-check-label text-white" for="garage_door_installation">Garage Door Installation</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-check">
                                                <input class="form-check-input p-0" type="checkbox" id="other" name="other" value="Other">
                                                <label class="form-check-label text-white" for="other">Other</label>
                                            </div>
                                        </div>
                                    </div>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52887706.14540557!2d-161.74454347928352!3d35.99563672201456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2snl!4v1732470334778!5m2!1sen!2snl"
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