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

    <!--Blog Area Start-->

    <div id="blog-page" class="blog-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-blog-wrap">
                        <img src="{{ $detail_data->image ?? asset('front/asset2/img/blog/1.jpg') }}" alt="">
                        <div class="blog-meta">
                            <span><i class="las la-user"></i>Admin</span>
                            <span><i class="las la-calendar"></i>{{ $detail_data->created_at ? $detail_data->created_at->format('d F, Y') : '' }}</span>
                        </div>
                        <h3>{{ $detail_data->title ?? '' }}</h3>
                        <p>{!! $detail_data->description !!}</p>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--End of Blog Area-->
@endsection
