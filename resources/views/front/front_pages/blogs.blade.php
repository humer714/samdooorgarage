@extends('front.layout_pages.app')


@section('meta_title')
    {{ __('Blogs') }}
@endsection
@section('meta_tags')
    {{ __('Blogs, Sam Garage Door') }}
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
                        <h1>Blogs</h1>
                        <h6><a href="{{route('home')}}">Home</a> / All Blogs</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!--Blog Area Start-->
    <div class="blog-area gray-bg section-padding mb-3">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $item)
                    @if ($item->status == 1)
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
