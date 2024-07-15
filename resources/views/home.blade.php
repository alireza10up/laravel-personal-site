@extends('layouts.master')

@section('title' , 'علیرضا وحدانی | بک اند دولوپر')

@section('description')
    یه آدم عاشق حل مسئله که تو دنیای وب غرق شده و از حل مشکلات ریز و درشتش کیف می‌کنه.
@endsection

@section('content')
    <div class="content">
        <!-- About -->
        <div class="section mt-0">
            <h1 class="title title--h1 title__separate">درمورد من</h1>
            <div class="pt-2 pt-sm-3">
                <p>{{ $settings->about_me ?? '' }}</p>
            </div>
        </div>

        <!-- What -->
        <div class="section">
            <h2 class="title title--h2">توی این مسائل کمکت می کنم</h2>
            <div class="row">
                @forelse($settings->what_i_do ?? [] as $iDoName => $iDoInformation)
                    <!-- Case Item -->
                    <div class="col-12 col-lg-6 case-item-wrap">
                        <div class="case-item">
                            <img class="case-item__icon" src="{{ asset($iDoInformation['icon'] ?? '') }}" alt="{{ $iDoName ?? '' }}"/>
                            <h3 class="title title--h3">{{ $iDoName ?? '' }}</h3>
                            <p class="case-item__caption">{{ $iDoInformation['description'] ?? '' }}</p>
                        </div>
                    </div>
                @empty
                    <h4>چیزی یافت نشد</h4>
                @endforelse
            </div>
        </div>

        <!-- Testimonials -->
        @if($settings->feedbacks_enabled)
            <div class="section">
                <h2 class="title title--h2">نظرات مشتریان</h2>
                <div class="swiper-container js-carousel-review">
                    <div class="swiper-wrapper">
                        @forelse($feedbacks as $feedback)
                            <!-- Item review -->
                            <div class="swiper-slide review-item">
                                <svg class="avatar avatar--80" viewBox="0 0 84 84">
                                    <g class="avatar__hexagon">
                                        <image xlink:href="{{ asset('storage/' . $feedback->profile) }}" height="100%" width="100%"/>
                                    </g>
                                </svg>
                                <h4 class="title title--h3">{{ $feedback->name ?? '' }}</h4>
                                <p class="review-item__caption">{{ $feedback->description ?? '' }}</p>
                            </div>
                        @empty
                            <h4>چیزی یافت نشد</h4>
                        @endforelse
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        @endif

        <!-- Clients -->
        @if($settings->customers_enabled)
            <div class="section">
                <h2 class="title title--h2">مشتریان</h2>
                <div class="swiper-container js-carousel-clients">
                    <div class="swiper-wrapper">
                        @forelse($customers as $customer)
                            <!-- Item client -->
                            <div class="swiper-slide">
                                <a href="{{ $customer->link }}">
                                    <img src="{{ asset('storage/' . $customer->logo) }}" alt="{{ $customer->name }}"/>
                                </a>
                            </div>
                        @empty
                            <h4>چیزی یافت نشد</h4>
                        @endforelse
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        @endif
    </div><!-- Content End -->
@endsection
