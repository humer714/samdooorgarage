@extends('front.layout_pages.app')


@section('meta_title')
    {{ $detail_data->meta_title ?? '' }}
@endsection
@section('meta_tags')
    {{ $detail_data->meta_tag ?? '' }}
@endsection
@section('meta_description')
    {{ $detail_data->meta_description ?? '' }}
@endsection
@section('css')
    <style>
        .btn_style {
            border: none;
            border-radius: 4px;
            display: inline-block;
            background: #41CB5B;
            color: #fff;
            padding: 15px 30px;
            margin: 30px 0;
            width: auto;
            -webkit-transition: .3s;
            transition: .3s;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
        }
    </style>
@endsection
@section('content')
    <!-- Start Bottom Header -->
    <div class="breadcroumb-area bread-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title">
                        <h1>{{ $detail_data->title ?? '' }}</h1>
                        <h6><a href="{{ route('home') }}">Home</a> / {{ $detail_data->title ?? '' }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->


    <div id="service-page" class="service-details-section section-padding pb-0 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-category">
                        <h5>{{ $detail_data->title ?? '' }}</h5>
                        <ul>
                            <li><b>Client Name</b>: {{ $detail_data->client_name ?? '' }}</li>
                            <li><b>Categories</b> : {{ $detail_data->category ?? '' }}</li>
                            <li><b>Start Date</b> : {{ $detail_data->start_date ?? '' }}</li>
                        </ul>
                    </div>
                    <div class="helpline-section">
                        <div class="helpline-content text-center">
                            <h4>Need Consultancy Help</h4>
                            <p>Gatherin galso sprit moving shall flow</p>
                            <a class="btn btn-primary btn_style" href="{{ route('about_us') }}">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="single-service">
                        <img src="{{ $detail_data->image ?? asset('front/asset2/img/service/service-details.jpg') }}"
                            alt="">
                        <h2>{{ $detail_data->title ?? '' }}</h2>
                        <p>{!! $detail_data->description !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
