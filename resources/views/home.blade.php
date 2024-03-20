@extends('layouts.master')

@section('title' , 'علیرضا وحدانی | بک اند دولوپر')

@section('content')
    <div class="content">
        <!-- About -->
        <div class="section mt-0">
            <h1 class="title title--h1 title__separate">درمورد من</h1>
            <div class="pt-2 pt-sm-3">
                <p> فعال حوزه وب ! یک سالی هست که برنامه نویسی رو شروع کردم عاشق حل مسئله های کوچیک و
                    بزرگ هستم همین دلیل موجب شد ، به سمت برنامه نویسی سوق داده بشم . شما میتونین در وب سایت شخصی من
                    بیشتر با
                    خودم و کارهام آشنا بشین ....</p>
            </div>
        </div>

        <!-- What -->
        <div class="section">
            <h2 class="title title--h2">کاری که انجام میدم</h2>
            <div class="row">
                <!-- Case Item -->
                <div class="col-12 col-lg-6 case-item-wrap">
                    <div class="case-item">
                        <img class="case-item__icon" src="{{asset('assets/icons/icon-design.svg')}}" alt=""/>
                        <h3 class="title title--h3">طراحی وب</h3>
                        <p class="case-item__caption">مدرن ترین و با کیفیت ترین طراحی ساخته شده در سطح حرفه ای. </p>
                    </div>
                </div>

                <!-- Case Item -->
                <div class="col-12 col-lg-6 case-item-wrap">
                    <div class="case-item">
                        <img class="case-item__icon" src="{{asset('assets/icons/icon-dev.svg')}}" alt="توسعه وب"/>
                        <h3 class="title title--h3">توسعه وب</h3>
                        <p class="case-item__caption">مدرن ترین و با کیفیت ترین طراحی ساخته شده در سطح حرفه ای. </p>
                    </div>
                </div>

                <!-- Case Item -->
                <div class="col-12 col-lg-6 case-item-wrap">
                    <div class="case-item">
                        <img class="case-item__icon" src="{{asset('assets/icons/icon-app.svg')}}" alt="برنامه نویسی اندروید"/>
                        <h3 class="title title--h3">برنامه نویسی اندروید</h3>
                        <p class="case-item__caption">مدرن ترین و با کیفیت ترین طراحی ساخته شده در سطح حرفه ای. </p>
                    </div>
                </div>

                <!-- Case Item -->
                <div class="col-12 col-lg-6 case-item-wrap">
                    <div class="case-item">
                        <img class="case-item__icon" src="{{asset('assets/icons/icon-photo.svg')}}" alt="عکاسی"/>
                        <h3 class="title title--h3">عکاسی</h3>
                        <p class="case-item__caption">مدرن ترین و با کیفیت ترین طراحی ساخته شده در سطح حرفه ای. </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        {{--    <div class="section">--}}
        {{--        <h2 class="title title--h2">نظرات مشتریان</h2>--}}
        {{--        <div class="swiper-container js-carousel-review">--}}
        {{--            <div class="swiper-wrapper">--}}
        {{--                <!-- Item review -->--}}
        {{--                <div class="swiper-slide review-item">--}}
        {{--                    <svg class="avatar avatar--80" viewBox="0 0 84 84">--}}
        {{--                        <g class="avatar__hexagon">--}}
        {{--                            <image xlink:href="../assets/img/avatar-2.jpg" height="100%" width="100%" />--}}
        {{--                        </g>--}}
        {{--                    </svg>--}}
        {{--                    <h4 class="title title--h3">دانیل لوئیس</h4>--}}
        {{--                    <p class="review-item__caption">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>--}}
        {{--                </div>--}}

        {{--                <!-- Item review -->--}}
        {{--                <div class="swiper-slide review-item">--}}
        {{--                    <svg class="avatar avatar--80" viewBox="0 0 84 84">--}}
        {{--                        <g class="avatar__hexagon">--}}
        {{--                            <image xlink:href="../assets/img/avatar-3.jpg" height="100%" width="100%" />--}}
        {{--                        </g>--}}
        {{--                    </svg>--}}
        {{--                    <h4 class="title title--h3">جسیکا</h4>--}}
        {{--                    <p class="review-item__caption">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>--}}
        {{--                </div>--}}

        {{--                <!-- Item review -->--}}
        {{--                <div class="swiper-slide review-item">--}}
        {{--                    <svg class="avatar avatar--80" viewBox="0 0 84 84">--}}
        {{--                        <g class="avatar__hexagon">--}}
        {{--                            <image xlink:href="../assets/img/avatar-4.jpg" height="100%" width="100%" />--}}
        {{--                        </g>--}}
        {{--                    </svg>--}}
        {{--                    <h4 class="title title--h3">نیلوفر</h4>--}}
        {{--                    <p class="review-item__caption">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>--}}
        {{--                </div>--}}

        {{--                <!-- Item review -->--}}
        {{--                <div class="swiper-slide review-item">--}}
        {{--                    <svg class="avatar avatar--80" viewBox="0 0 84 84">--}}
        {{--                        <g class="avatar__hexagon">--}}
        {{--                            <image xlink:href="../assets/img/avatar-5.jpg" height="100%" width="100%" />--}}
        {{--                        </g>--}}
        {{--                    </svg>--}}
        {{--                    <h4 class="title title--h3">توماس</h4>--}}
        {{--                    <p class="review-item__caption">اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم ایپسوم شناخته می‌شوند.</p>--}}
        {{--                </div>--}}
        {{--            </div>--}}

        {{--            <div class="swiper-pagination"></div>--}}
        {{--        </div>--}}
        {{--    </div>--}}

        <!-- Clients -->

        {{--    <div class="section">--}}
        {{--        <h2 class="title title--h2">مشتریان</h2>--}}
        {{--        <div class="swiper-container js-carousel-clients">--}}
        {{--            <div class="swiper-wrapper">--}}
        {{--                <!-- Item client -->--}}
        {{--                <div class="swiper-slide">--}}
        {{--                    <a href="#"><img src="../assets/img/logo-partner.svg" alt="Logo" /></a>--}}
        {{--                </div>--}}

        {{--                <!-- Item client -->--}}
        {{--                <div class="swiper-slide">--}}
        {{--                    <a href="#"><img src="../assets/img/logo-partner.svg" alt="Logo" /></a>--}}
        {{--                </div>--}}

        {{--                <!-- Item client -->--}}
        {{--                <div class="swiper-slide">--}}
        {{--                    <a href="#"><img src="../assets/img/logo-partner.svg" alt="Logo" /></a>--}}
        {{--                </div>--}}

        {{--                <!-- Item client -->--}}
        {{--                <div class="swiper-slide">--}}
        {{--                    <a href="#"><img src="../assets/img/logo-partner.svg" alt="Logo" /></a>--}}
        {{--                </div>--}}
        {{--            </div>--}}

        {{--            <div class="swiper-pagination"></div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
    </div><!-- Content End -->
@endsection
