@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('Services') }}
@endsection
@section('meta_tags')
    {{ __('Services, proschimneyclening') }}
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
                        <h1>Services</h1>
                        <h6><a href="{{ route('home') }}">Home</a> / All Services</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END Header -->
    <!-- Start Service area -->

    <div id="service-page" class="service-details-section section-padding pb-0 mb-3">
        <div class="container">
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

@endsection
