@include('frontend.partials.homesupportbar')
@php
$home_page_variant = $home_page ?? filter_static_option_value('home_page_variant', $static_field_data);
@endphp

<div class="header-style-03  header-variant-{{ $home_page_variant }}">
    <nav class="navbar navbar-area navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="{{ url('/') }}" class="logo">
                        @if (!empty(filter_static_option_value('site_logo', $global_static_field_data)))
                            {!! render_image_markup_by_attachment_id(filter_static_option_value('site_logo', $global_static_field_data)) !!}
                        @else
                            <h2 class="site-title">
                                {{ filter_static_option_value('site_' . $user_select_lang_slug . '_title', $global_static_field_data) }}
                            </h2>
                        @endif
                    </a>
                </div>
                {{-- <x-product-cart-mobile /> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    {!! render_frontend_menu($primary_menu) !!}
                </ul>
            </div>
            {{-- <div class="nav-right-content">
                <div class="icon-part">
                    <ul>
                        <x-navbar-search/>
                        <x-product-cart/>
                    </ul>
                </div>
            </div> --}}
        </div>
    </nav>
</div>

<div class="cagency-header-static">
    <div class="header-area">
        <div class="shape-image shape-01">
            <img src="{{ asset('assets/frontend/img/shape/08.png') }}" alt="">
        </div>
        <div class="shape-image shape-02">
            <img src="{{ asset('assets/frontend/img/shape/09.png') }}" alt="">
        </div>
        {{-- <div class="shape-image shape-03">
            <img src="{{ asset('assets/frontend/img/shape/10.png') }}" alt="">
        </div> --}}
        <div class="shape-image shape-05">
            <img src="{{ asset('assets/frontend/img/shape/13.png') }}" alt="">
        </div>
        <div class="shape-image shape-06">
            <img src="{{ asset('assets/frontend/img/shape/14.png') }}" alt="">
        </div>
        <div class="shape-image shape-07">
            <img src="{{ asset('assets/frontend/img/shape/15.png') }}" alt="">
        </div>

        <div class="right-image">
            {!! render_image_markup_by_attachment_id(filter_static_option_value('cagency_header_section_right_image', $static_field_data)) !!}
            <div class="shape-04">
                <img src="{{ asset('assets/frontend/img/shape/11.png') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-10">
                    <div class="header-inner">
                        <h1 class="title">
                            {{ filter_static_option_value('cagency_header_section_' . $user_select_lang_slug . '_title', $static_field_data) }}
                        </h1>
                        <div class="description">{!! filter_static_option_value('cagency_header_section_' . $user_select_lang_slug . '_description', $static_field_data) !!}</div>
                        @if (!empty(filter_static_option_value('cagency_header_section_' . $user_select_lang_slug . '_button_one_text', $static_field_data)))
                            <div class="btn-wrapper margin-top-30">
                                <a href="{{ filter_static_option_value('cagency_header_section_button_one_url', $static_field_data) }}"
                                    class="cagency-btn">{{ filter_static_option_value('cagency_header_section_' . $user_select_lang_slug . '_button_one_text', $static_field_data) }}
                                    <i
                                        class="{{ filter_static_option_value('cagency_header_section_button_one_icon', $static_field_data) }}"></i></a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add New Custom Section -->
@if (!empty(filter_static_option_value('home_page_about_us_section_status', $static_field_data)))
    <div class="our-mission-area">
        <div class="container-fulid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="our-service-wrappper bg-main">
                        <div class="section-title white padding-bottom-15 desktop-left">
                            <h2 class="title">
                                {{ filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_title', $static_field_data) }}
                            </h2>
                            <p class="m-inherit">{!! filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_description', $static_field_data) !!}</p>
                            <div class="service-area-work">
                                @foreach ($all_key_features as $key => $data)
                                    <div class="single-header-bottom-item-04">
                                        <div class="icon">
                                            <i class="{{ $data->icon }}"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">{{ $data->title }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item-wrapper">
                        <div class="single-service-item">
                            <div class="service-img">
                                <div class="bg-image" {!! render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_04_about_us_our_mission_image', $static_field_data)) !!}></div>
                            </div>
                            <div class="service-text">
                                <div class="service-text-inner">
                                    <h2 class="title">
                                        {{ filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_our_mission_title', $static_field_data) }}
                                    </h2>
                                    <p>{!! filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_our_mission_description', $static_field_data) !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-service-item">
                            <div class="service-text">
                                <div class="service-text-inner">
                                    <h2 class="title">
                                        {{ filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_our_vision_title', $static_field_data) }}
                                    </h2>
                                    <p>{!! filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_about_us_our_vision_description', $static_field_data) !!}</p>
                                </div>
                            </div>
                            <div class="service-img style-01">
                                <div class="bg-image" {!! render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_04_about_us_our_vision_image', $static_field_data)) !!}></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- Add New Custom Section -->
@if (!empty(filter_static_option_value('home_page_quality_section_status', $static_field_data)))
    <div class="global-network-area bg-liteblue padding-bottom-120 padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="global-content">
                        <h4 class="title">
                            {{ filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_title', $static_field_data) }}
                        </h4>
                        <p>{!! filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_description', $static_field_data) !!}</p>
                        @if (!empty(filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_button_status', $static_field_data)))
                            <div class="btn-wrapper padding-top-25">
                                <a href="{{ filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_button_url', $static_field_data) }}"
                                    class="boxed-btn reverse-color">{{ filter_static_option_value('home_page_01_' . $user_select_lang_slug . '_quality_area_button_title', $static_field_data) }}</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-img">
                        {!! render_image_markup_by_attachment_id(filter_static_option_value('home_page_02_quality_area_image', $static_field_data)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

{{-- @if (!empty(filter_static_option_value('home_page_service_section_status', $static_field_data)))
    <div class="logistics-what-we-offer-area padding-top-115 padding-bottom-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center padding-bottom-100">
                        <span
                            class="subtitle">{{ filter_static_option_value('cagency_what_we_offer_section_' . $user_select_lang_slug . '_subtitle', $static_field_data) }}</span>
                        <h2 class="title">
                            {{ filter_static_option_value('cagency_what_we_offer_section_' . $user_select_lang_slug . '_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @php $a = 1; @endphp
                @foreach ($all_service as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="cagency-single-what-we-cover-item margin-bottom-30">
                            @if ($data->icon_type == 'icon' || $data->icon_type == '')
                                <div class="icon style-{{ $a }}">
                                    <i class="{{ $data->icon }}"></i>
                                </div>
                            @else
                                <div class="img-icon style-0{{ $a }}">
                                    {!! render_image_markup_by_attachment_id($data->img_icon) !!}
                                </div>
                            @endif
                            <div class="content">
                                <h4 class="title"><a
                                        href="{{ route('frontend.services.single', $data->slug) }}">{{ $data->title }}</a>
                                </h4>
                                <p>{{ $data->excerpt }}</p>
                                <a href="{{ route('frontend.services.single', $data->slug) }}"
                                    class="readmore">{{ filter_static_option_value('logistic_what_we_offer_section_' . $user_select_lang_slug . '_button_text', $static_field_data) }}
                                    <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @php $a == 6 ? $a =1 : $a++; @endphp
                @endforeach
            </div>
        </div>
    </div>
@endif --}}

@if (!empty(filter_static_option_value('home_page_video_section_status', $static_field_data)))
    <div class="logistic-video-area-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logistic-video-wrap">
                        {!! render_image_markup_by_attachment_id(filter_static_option_value('creative_agency_video_section_background_image', $static_field_data), '', 'full') !!}
                        <a href="{{ filter_static_option_value('creative_agency_video_section_video_url', $static_field_data) }}"
                            class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>
                        <div class="shape">
                            <img src="{{ asset('assets/frontend/img/shape/11.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- Add New Custom Section -->
@if (!empty(filter_static_option_value('home_page_service_section_status', $static_field_data)))
    <div class="political-what-we-offer-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60 medical-home">
                        <span
                            class="subtitle">{{ filter_static_option_value('home_page_12_' . $user_select_lang_slug . '_service_area_subtitle', $static_field_data) }}</span>
                        <h2 class="title">
                            {{ filter_static_option_value('home_page_12_' . $user_select_lang_slug . '_service_area_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @php $a=0; @endphp
                @foreach ($all_service as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="political-single-what-we-cover-item  margin-bottom-30">
                            <div class="thumb">
                                {!! render_image_markup_by_attachment_id($data->image, 'grid') !!}
                                <div class="icon style-{{ $a }}">
                                    <i class="{{ $data->icon }}"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a
                                        href="{{ route('frontend.services.single', $data->slug) }}">{{ $data->title }}</a>
                                </h4>
                                <p>{{ $data->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                    @php($a == 6) ? $a= 1 : $a++; @endphp
                @endforeach
            </div>
        </div>
    </div>
@endif

<!-- Add New Custom Section -->
@if (!empty(filter_static_option_value('home_page_call_to_action_section_status', $static_field_data)))
    <div class="charity-cta-area" {!! render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_13_cta_area_background_image', $static_field_data)) !!}>
        <div class="shape top">
            <img src="{{ asset('assets/frontend/img/shape/cta-top-shape.svg') }}" alt="">
        </div>
        <div class="shape bottom">
            <img src="{{ asset('assets/frontend/img/shape/cta-bottom-shape.svg') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-area-inner">
                        <div class="left-content-area">
                            <h3 class="title">
                                {{ filter_static_option_value('home_page_13_' . $user_select_lang_slug . '_cta_area_title', $static_field_data) }}
                            </h3>
                        </div>
                        <div class="right-content-area">
                            @if (!empty(filter_static_option_value('home_page_13_' . $user_select_lang_slug . '_cta_area_button_status', $static_field_data)))
                                <div class="btn-wrapper">
                                    <a href="{{ filter_static_option_value('home_page_13_cta_area_button_url', $static_field_data) }}"
                                        class="btn-charity">{{ filter_static_option_value('home_page_13_' . $user_select_lang_slug . '_cta_area_button_title', $static_field_data) }}
                                        <i
                                            class="{{ filter_static_option_value('home_page_13_cta_section_button_icon', $static_field_data) }}"></i></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

{{-- @if (!empty(filter_static_option_value('home_page_counterup_section_status', $static_field_data)))
    <div class="cagency-counterup-area bg-overlay padding-bottom-120">
        <div class="container">
            <div class="row">
                @foreach ($all_counterup as $data)
                    <div class="col-lg-3 col-md-6">
                        <div class="cagency-counterup-item">
                            <div class="number style-{{ $loop->index + 1 }}">
                                <div class="count-wrap"><span
                                        class="count-num">{{ $data->number }}</span>{{ $data->extra_text }}
                                </div>
                            </div>
                            <div class="content">
                                <h4 class="title">{{ $data->title }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif --}}

{{-- @if (!empty(get_static_option('home_page_work_process_section_status')))
    <div class="creative-agency-work-process-area padding-top-115 padding-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60">
                        <span
                            class="subtitle">{{ filter_static_option_value('cagency_work_process_section_' . $user_select_lang_slug . '_subtitle', $static_field_data) }}</span>
                        <h2 class="title">
                            {{ filter_static_option_value('cagency_work_process_section_' . $user_select_lang_slug . '_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="cagency-work-process-list">
                        @php
                            $all_icon_fields = filter_static_option_value('cagency_work_process_section_item_number', $static_field_data);
                            $all_icon_fields = !empty($all_icon_fields) ? unserialize($all_icon_fields) : [];
                            $all_title_fields = filter_static_option_value('cagency_work_process_section_item_' . $user_select_lang_slug . '_title', $static_field_data);
                            $all_title_fields = !empty($all_title_fields) ? unserialize($all_title_fields) : [];
                        @endphp
                        @foreach ($all_icon_fields as $number)
                            <li class="single-work-process-item">
                                <div class="num-wrap style-{{ $loop->index + 1 }}">
                                    <span class="number">{{ $number }}</span>
                                </div>
                                <h4 class="title">{{ $all_title_fields[$loop->index] ?? '' }}</h4>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif --}}

{{-- @if (!empty(filter_static_option_value('home_page_case_study_section_status', $static_field_data)))
    <div class="creative-agency-project-area padding-top-115 padding-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60">
                        <span
                            class="subtitle">{{ filter_static_option_value('cagency_our_portfolio_section_' . $user_select_lang_slug . '_subtitle', $static_field_data) }}</span>
                        <h2 class="title">
                            {{ filter_static_option_value('cagency_our_portfolio_section_' . $user_select_lang_slug . '_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="case-studies-masonry-wrapper">
                        <ul class="case-studies-menu style-01">
                            <li class="active" data-filter="*">{{ __('All') }}</li>
                            @foreach ($all_work_category as $data)
                                <li data-filter=".{{ Str::slug($data->name) }}">{{ $data->name }}</li>
                            @endforeach
                        </ul>
                        <div class="case-studies-masonry">
                            @foreach ($all_work as $data)
                                <div
                                    class="col-lg-4 col-md-4 col-sm-6 masonry-item {{ get_work_category_by_id($data->id, 'slug') }}">
                                    <div class="single-case-studies-item">
                                        <div class="thumb">
                                            {!! render_image_markup_by_attachment_id($data->image) !!}
                                        </div>
                                        <div class="cart-icon">
                                            <h4 class="title"><a
                                                    href="{{ route('frontend.work.single', $data->slug) }}">
                                                    {{ $data->title }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif --}}

{{-- @if (!empty(filter_static_option_value('home_page_call_to_action_section_status', $static_field_data)))
    <div class="creative-agency-call-to-action padding-100">
        <div class="shape shape-01">
            <img src="{{ asset('assets/frontend/img/shape/01.png') }}" alt="">
        </div>
        <div class="shape shape-02">
            <img src="{{ asset('assets/frontend/img/shape/02.png') }}" alt="">
        </div>
        <div class="shape shape-03">
            <img src="{{ asset('assets/frontend/img/shape/03.png') }}" alt="">
        </div>
        <div class="shape shape-04">
            <img src="{{ asset('assets/frontend/img/shape/04.png') }}" alt="">
        </div>
        <div class="shape shape-05">
            <img src="{{ asset('assets/frontend/img/shape/05.png') }}" alt="">
        </div>
        <div class="right-image-wrap">
            {!! render_image_markup_by_attachment_id(filter_static_option_value('cagency_cta_section_right_image', $static_field_data)) !!}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-10">
                    <div class="cagency-cta-area-inner">
                        <h2 class="title">
                            {{ filter_static_option_value('cagency_cta_section_' . $user_select_lang_slug . '_title', $static_field_data) }}
                        </h2>
                        <p class="description">
                            {{ filter_static_option_value('cagency_cta_section_' . $user_select_lang_slug . '_description', $static_field_data) }}
                        </p>
                        <div class="btn-wrapper margin-top-30">
                            <a href="{{ filter_static_option_value('cagency_cta_section_button_url', $static_field_data) }}"
                                class="cagency-btn">{{ filter_static_option_value('cagency_cta_section_' . $user_select_lang_slug . '_button_text', $static_field_data) }}
                                <i
                                    class="{{ filter_static_option_value('cagency_cta_section_button_icon', $static_field_data) }}"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif --}}

<!-- Add New Custom Section -->
@if (!empty(filter_static_option_value('home_page_event_section_status', $static_field_data)))
    <div class="course-event-area padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title margin-bottom-80 course-home">
                        <h2 class="title">
                            {{ filter_static_option_value('course_home_page_' . $user_select_lang_slug . '_event_area_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-carousel-area margin-top-10 ">
                        <div class="global-carousel-init logistic-dots" data-loop="true" data-desktopitem="1"
                            data-mobileitem="1" data-tabletitem="1" data-dots="true" data-autoplay="true"
                            data-margin="0">
                            @foreach ($all_events as $data)
                                <div class="single-events-list-item course-home">
                                    <div class="thumb">
                                        {!! render_image_markup_by_attachment_id($data->image, '', 'grid') !!}
                                    </div>
                                    <div class="content-area">
                                        <div class="top-part">
                                            <div class="time-wrap">
                                                <span
                                                    class="date">{{ date('d', strtotime($data->date)) }}</span>
                                                <span
                                                    class="month">{{ date('M', strtotime($data->date)) }}</span>
                                            </div>
                                            <div class="title-wrap">
                                                <a href="{{ route('frontend.events.single', $data->slug) }}">
                                                    <h4 class="title">{{ $data->title }}</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="location d-block"><i class="fas fa-map-marker-alt"></i>
                                            {{ $data->venue_location }}</span>
                                        <p>{{ strip_tags(Str::words(str_replace('&nbsp;', ' ', $data->content), 20)) }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

{{-- @if (!empty(filter_static_option_value('home_page_testimonial_section_status', $static_field_data)))
    <div class="creative-agency-testimonial-area padding-top-115 padding-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60">
                        <span
                            class="subtitle">{{ filter_static_option_value('cagency_testimonial_section_' . $user_select_lang_slug . '_subtitle', $static_field_data) }}</span>
                        <h2 class="title">
                            {{ filter_static_option_value('cagency_testimonial_section_' . $user_select_lang_slug . '_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-area margin-top-10 ">
                        <div class="global-carousel-init logistic-dots" data-loop="true" data-desktopitem="3"
                            data-mobileitem="1" data-tabletitem="2" data-dots="true" data-autoplay="true"
                            data-margin="30">
                            @foreach ($all_testimonial as $data)
                                <div class="cagency-single-testimonial-item">
                                    <div class="content">
                                        <i class="fas fa-quote-left"></i>
                                        <p class="description ">{{ $data->description }}</p>
                                    </div>
                                    <div class="author-details">
                                        <div class="thumb ">
                                            {!! render_image_markup_by_attachment_id($data->image) !!}
                                        </div>
                                        <div class="content">
                                            <h4 class="title ">{{ $data->name }}</h4>
                                            <span class="designation ">{{ $data->designation }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif --}}

<!-- Add New Custom Section -->
{{-- @if (!empty(filter_static_option_value('home_page_testimonial_section_status', $static_field_data)))
    <div class="fruits-testimonial-area padding-top-120 padding-bottom-120" {!! render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_15_testimonial_area_background_image', $static_field_data)) !!}>
        <div class="shape-image right-wrap">
            {!! render_image_markup_by_attachment_id(filter_static_option_value('home_page_15_testimonial_area_right_image', $static_field_data)) !!}
        </div>
        <div class="shape-image left-wrap">
            {!! render_image_markup_by_attachment_id(filter_static_option_value('home_page_15_testimonial_area_left_image', $static_field_data)) !!}
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60 fruits-home">

                        <h2 class="title">
                            {{ filter_static_option_value('home_page_15_' . $user_select_lang_slug . '_testimonial_area_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-area margin-top-10 ">
                        <div class="global-carousel-init logistic-dots fruits-home" data-loop="true"
                            data-desktopitem="2" data-mobileitem="1" data-tabletitem="1" data-dots="true"
                            data-autoplay="true" data-margin="30">
                            @foreach ($all_testimonial as $data)
                                <div class="fruits-home-single-testimonial-item">
                                    <div class="author-details">
                                        <div class="thumb ">
                                            {!! render_image_markup_by_attachment_id($data->image) !!}
                                        </div>
                                        <div class="content">
                                            <h4 class="title ">{{ $data->name }}</h4>
                                            <span class="designation ">{{ $data->designation }}</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <p class="description ">{{ $data->description }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif --}}

<!-- Add New Custom Section -->
{{-- @if (!empty(filter_static_option_value('home_page_latest_news_section_status', $static_field_data)))
    <div class="const-news-area padding-bottom-120 industry-section-bg padding-top-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60 medical-home">
                        <span
                            class="subtitle">{{ filter_static_option_value('home_page_12_' . $user_select_lang_slug . '_news_section_subtitle', $static_field_data) }}</span>
                        <h2 class="title">
                            {{ filter_static_option_value('home_page_12_' . $user_select_lang_slug . '_news_section_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-grid-carosel-wrapper">
                        <div class="global-carousel-init logistic-dots lawyer-home" data-loop="true"
                            data-desktopitem="3" data-mobileitem="1" data-tabletitem="2" data-dots="true"
                            data-autoplay="true" data-margin="30">
                            @foreach ($all_blog as $data)
                                <div class="single-portfolio-blog-grid medical-home">
                                    <div class="thumb">
                                        {!! render_image_markup_by_attachment_id($data->image, 'thumb') !!}
                                        <div class="time-wrap">
                                            <span
                                                class="date">{{ date_format($data->created_at, 'd') }}</span>
                                            <span
                                                class="month">{{ date_format($data->created_at, 'M') }}</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a
                                                href="{{ route('frontend.blog.single', $data->slug) }}">{{ $data->title }}</a>
                                        </h4>
                                        <a class="readmore"
                                            href="{{ route('frontend.blog.single', $data->slug) }}">{{ filter_static_option_value('home_page_12_' . $user_select_lang_slug . '_news_section_readmore_text', $static_field_data) }}
                                            <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif --}}

{{-- @if (!empty(filter_static_option_value('home_page_latest_news_section_status', $static_field_data)))
    <div class="creative-agency-news-area padding-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60">
                        <span
                            class="subtitle">{{ filter_static_option_value('cagency_news_area_section_' . $user_select_lang_slug . '_subtitle', $static_field_data) }}</span>
                        <h2 class="title">
                            {{ filter_static_option_value('cagency_news_area_section_' . $user_select_lang_slug . '_title', $static_field_data) }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-grid-carosel-wrapper">
                        <div class="global-carousel-init logistic-dots" data-loop="true" data-desktopitem="3"
                            data-mobileitem="1" data-tabletitem="2" data-dots="true" data-autoplay="true"
                            data-margin="30">
                            @foreach ($all_blog as $data)
                                <div class="single-portfolio-blog-grid creative-agency-page">
                                    <div class="thumb">
                                        {!! render_image_markup_by_attachment_id($data->image, 'grid') !!}
                                        <div class="time-wrap">
                                            <span
                                                class="date">{{ date_format($data->created_at, 'd') }}</span>
                                            <span
                                                class="month">{{ date_format($data->created_at, 'M') }}</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a
                                                href="{{ route('frontend.blog.single', $data->slug) }}">{{ $data->title }}</a>
                                        </h4>
                                        <p class="excerpt">{{ strip_tags($data->excerpt) }}</p>
                                        <a class="readmore"
                                            href="{{ route('frontend.blog.single', $data->slug) }}">{{ filter_static_option_value('portfolio_news_section_' . $user_select_lang_slug . '_button_text', $static_field_data) }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif --}}
