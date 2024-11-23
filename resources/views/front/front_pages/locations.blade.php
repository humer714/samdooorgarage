@extends('front.layout_pages.app')

@section('css')
<style>
    .product-explorer-main-offerings .product-display {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .product-explorer-main-offerings .product-display__tile-wrapper {
        cursor: pointer;
        padding: 0.0625rem;
        position: relative;
        text-decoration: none;
    }

    .product-explorer-main-offerings .product-display__tile {
        align-items: center;
        background-color: #f4f4f4;
        color: #161616;
        display: flex;
        flex-direction: row;
        height: auto;
        justify-content: space-between;
        padding: 1rem;
        transition: background-color .25s;
    }

    .product-explorer-main-offerings .product-display__tile {
        align-items: normal;
        flex-direction: column;
        height: 9.75rem;
    }

    .product-explorer-main-offerings .product-display__tile img.icon,
    .product-explorer-main-offerings .product-display__tile svg.icon {
        height: 30px;
        margin-right: 1rem;
        transition: height .25s;
        width: 30px;
    }

    .product-explorer-main-offerings .product-display .icon-black {
        -webkit-filter: brightness(0) saturate(100%);
        filter: brightness(0) saturate(100%);
    }

    .product-explorer-main-offerings .product-display__name-chevron {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .product-explorer-main-offerings .product-display__name {
        font-size: 1.25rem;
        font-weight: 400;
        letter-spacing: 0;
        line-height: 1.4;
        margin: 0;
        padding: 0;
    }

    .product-explorer-main-offerings .product-display__tile span {
        color: #161616;
    }

    .product-explorer-main-offerings .product-detail {
        background-color: #fff;
        border: none;
        color: #000;
        display: none;
        grid-column: 1/-1;
        grid-template-columns: repeat(12, 1fr);
        margin: -1px 0.0625rem 0.0625rem;
        padding: 1rem;
    }

    .product-explorer-main-offerings .product-display__tile.selected {
        background-color: #fff;
        color: #fff;
    }

    .product-explorer-main-offerings .product-display__tile .selected-svg,
    .product-explorer-main-offerings .product-display__tile.selected .not-selected-svg {
        display: none;
    }

    .product-explorer-main-offerings .product-display__tile.selected .selected-svg,
    .product-explorer-main-offerings .product-display__tile .not-selected-svg {
        display: block;
    }

    .product-explorer-main-offerings .product-display__tile.selected img.icon,
    .product-explorer-main-offerings .product-display__tile.selected svg.icon {
        height: 3.75rem;
        width: 3.75rem;
    }

    .product-explorer-main-offerings .product-display__tile.selected h4 {
        visibility: hidden;
    }

    .product-explorer-main-offerings .product-detail.selected {
        grid-gap: 0 2rem;
        border: 2px solid #f4f4f4;
        display: grid;
        gap: 0 1rem;
        margin-top: 0.125rem;
    }

    .product-explorer-main-offerings .product-display__tile.selected:before {
        border-bottom: 2px solid #f4f4f4;
        border: solid #f4f4f4;
        border-width: 2px 2px 1px;
        box-sizing: initial;
        content: "";
        height: calc(100% - 1px);
        left: 1px;
        margin: auto;
        position: absolute;
        top: 1px;
        width: calc(100% - 6px);
        z-index: 4;
    }

    .product-explorer-main-offerings .product-display__tile.selected:after {
        background-color: #fff;
        bottom: -10px;
        content: "";
        height: 15px;
        left: 3px;
        margin: auto;
        position: absolute;
        width: calc(100% - 6px);
        z-index: 5;
    }

    .product-explorer-main-offerings .product-display__tile-wrapper {
        cursor: pointer;
        padding: 0.0625rem;
        position: relative;
        text-decoration: none;
    }

    .product-explorer-main-offerings .product-display__cta {
        align-items: end;
        background-color: #0f62fe;
        color: #f4f4f4;
        flex-direction: row;
    }

    .product-explorer-main-offerings .product-display__cta svg {
        color: #f4f4f4;
    }

    .product-explorer-main-offerings .product-detail__header-outer-wrapper {
        display: grid;
        grid-column: 1/-1;
        grid-template-columns: repeat(3, 1fr);
    }

    .product-explorer-main-offerings .product-detail__category-name {
        font-size: 1.75rem;
        font-weight: 400;
        line-height: 1.25;
        margin: 0;
        padding-bottom: 0.25rem;
    }

    /* .product-explorer-main-offerings .product-detail__header {
                                                                                                margin-bottom: 2rem;
                                                                                            }

                                                                                            .product-explorer-main-offerings .product-detail__description {
                                                                                                font-size: .875rem;
                                                                                                margin: 0.5rem 0;
                                                                                                padding: 0;
                                                                                            } */

    .product-explorer-main-offerings .product-detail__product {
        /* padding: 1rem 1rem 1rem 0; */
        font-size: 12px;
        border-block: inherit !important;
    }

    .product-explorer-main-offerings .product-detail__long-description {
        font-size: .875rem;
        margin: 0.5rem 0 0;
    }

    @media only screen and (max-width: 991px) {

        .product-explorer-main-offerings .product-display,
        .product-explorer-main-offerings .product-detail,
        .product-explorer-main-offerings .product-detail__header-outer-wrapper {
            grid-template-columns: repeat(2, 1fr);
        }

        .product-explorer-main-offerings .product-detail {
            background-color: #fff;
            border: none;
            color: #000;
            display: none;
            grid-column: 1/-1;
            grid-template-columns: repeat(8, 1fr);
            margin: -1px 0.0625rem 0.0625rem;
            padding: 1rem;
        }
    }

    @media only screen and (max-width: 667px) {

        .product-explorer-main-offerings .product-display,
        .product-explorer-main-offerings .product-detail,
        .product-explorer-main-offerings .product-detail__header-outer-wrapper {
            grid-template-columns: repeat(2, 1fr);
        }

        .product-explorer-main-offerings .product-detail {
            background-color: #fff;
            border: none;
            color: #000;
            display: none;
            grid-column: 1/-1;
            grid-template-columns: repeat(4, 1fr);
            margin: -1px 0.0625rem 0.0625rem;
            padding: 1rem;
        }
    }

    @media only screen and (max-width: 567px) {

        .product-explorer-main-offerings .product-display,
        .product-explorer-main-offerings .product-detail,
        .product-explorer-main-offerings .product-detail__header-outer-wrapper {
            grid-template-columns: repeat(1, 1fr);
        }

        .product-explorer-main-offerings .product-detail {
            background-color: #fff;
            border: none;
            color: #000;
            display: none;
            grid-column: 1/-1;
            grid-template-columns: repeat(1, 1fr);
            margin: -1px 0.0625rem 0.0625rem;
            padding: 1rem;
        }
    }
</style>
@endsection
@section('meta_title')
{{ __('Locations') }}
@endsection
@section('meta_tags')
{{ __('Locations, proschimneyclening') }}
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
                    <h1>Locations</h1>
                    <h6><a href="{{ route('home') }}">Home</a> / All Locations</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- Start portfolio Area -->
<div class="service-area service-3 section-padding pt-100">
    <div class="container">
        <div class="product-explorer-main-offerings">
            <div class="product-display">
                @foreach ($states as $index => $item)
                @php
                // Determine the group number based on the index, starting from 2
                $group = (int) ($index / 3) + 2; //on large screen 3 columns
                // on medium screen 2 columns

                //on small screen 1 column
                @endphp
                <div class="product-display__tile-wrapper">
                    <div class="product-display__tile">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon icon-black"
                            aria-hidden="true">
                            <path fill="#5596e6"
                                d="M12 2C8.1 2 5 5.1 5 9c0 2.1 1.2 4.5 3 6.5 1.8 2 4.2 3.5 4.5 3.7.3-.2 2.7-1.7 4.5-3.7 1.8-2 3-4.4 3-6.5 0-3.9-3.1-7-7-7zm0 10.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 7.5 12 7.5 14.5 8.6 14.5 10 13.4 12.5 12 12.5z">
                            </path>
                        </svg>

                        <div class="product-display__name-chevron">
                            <h4 class="product-display__name">{{ $item->title ?? '' }}</h4>
                            <span>
                                <svg class="not-selected-svg" focusable="false" preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="32"
                                    height="32" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M16 22L6 12 7.4 10.6 16 19.2 24.6 10.6 26 12z"></path>
                                </svg>
                                <svg class="selected-svg" focusable="false" preserveAspectRatio="xMidYMid meet"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="32"
                                    height="32" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M16 10L26 20 24.6 21.4 16 12.8 7.4 21.4 6 20z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="product-detail" style="grid-row-start: {{ $group }};">
                    <div class="product-detail__header-outer-wrapper">
                        <div class="product-detail__header-inner-wrapper">
                            <h2 class="product-detail__category-name">{{ $item->title ?? '' }}</h2>
                        </div>
                    </div>
                    @foreach ($item->cities as $city)
                    <div class="product-detail__product">
                        <a href="{{ route('location_detail', $city->slug) }}"
                            style="color:red">{{ $city->title ?? '' }}</a>
                    </div>
                    @endforeach
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End main content -->
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

<!-- End portfolio Area -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function updateGroupNumbers() {
            // Determine the number of columns based on screen size
            let numberOfColumns;
            if (window.innerWidth <= 567) {
                numberOfColumns = 1; // Small screen
            } else if (window.innerWidth <= 991) {
                numberOfColumns = 2; // Medium screen
            } else {
                numberOfColumns = 3; // Large screen
            }

            // Update grid-row-start for each product detail element
            document.querySelectorAll('.product-detail').forEach((detail, index) => {
                const group = Math.floor(index / numberOfColumns) + 2;
                detail.style.gridRowStart = group;
            });
        }

        // Call the function on initial load
        updateGroupNumbers();

        // Adjust grouping on window resize
        window.addEventListener('resize', updateGroupNumbers);
    });

    document.querySelectorAll('.product-display__tile-wrapper').forEach(function(tileWrapper) {
        tileWrapper.addEventListener('click', function(event) {
            event.preventDefault();

            var tile = this.querySelector('.product-display__tile');
            var detail = this.nextElementSibling;

            if (!tile.classList.contains('selected')) {
                document.querySelectorAll('.product-display__tile, .product-detail').forEach(function(
                    element) {
                    element.classList.remove('selected');
                });
            }

            tile.classList.toggle('selected');
            if (detail && detail.classList.contains('product-detail')) {
                detail.classList.toggle('selected');
            }
        });
    });
</script>
@endsection