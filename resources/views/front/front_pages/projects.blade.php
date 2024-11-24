@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('Projects') }}
@endsection
@section('meta_tags')
    {{ __('Projects, Sam Garage Door') }}
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
                        <h1>Projects</h1>
                        <h6><a href="{{ route('home') }}">Home</a> / All Projects</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!-- Start portfolio Area -->
    <div id="xtra" class="xtra-service-wrap section-padding">
        <div class="container">
            <div class="row">
                @foreach ($projects as $item)
                    @if ($item->status == 1)
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
    </div>
    <!-- End portfolio Area -->
@endsection
