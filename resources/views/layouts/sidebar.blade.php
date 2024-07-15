<aside class="sidebar">
    <div class="sticky-column">
        <div class="avatar-wrap">
            <svg class="avatar avatar--180" viewBox="0 0 188 188">
                <g class="avatar__box">
                    <image xlink:href="{{ asset('storage/' . $settings->profile_picture) }}" height="100%" width="100%"/>
                </g>
            </svg>
        </div>
        <div class="text-center">
            <h3 class="title sidebar__user-name"><span class="weight--500">علیرضا وحدانی</span></h3>
            <div class="badge badge--gray">بک اند دولوپر</div>

            <!-- Social -->
            <div class="social">
                @foreach($settings->social_media as $social)
                    <a class="social__link" href="{{ $social['link'] }}"><i class="font-icon {{ $social['icon_class'] }}"></i></a>
                @endforeach
            </div>
        </div>

        <ul class="contact-block">
            <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="Address">
                <i class="font-icon icon-map-pin"></i>{{ $settings->address }}
            </li>
            <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="E-mail">
                <a href="mailto:{{ $settings->email }}"><i class="font-icon icon-mail"></i>{{ $settings->email }}</a>
            </li>
            <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="telegram">
                <a href="https://t.me/{{ $settings->telegram }}"><i class="font-icon icon-reply"></i>{{ $settings->telegram }}</a>
            </li>
        </ul>
    </div>
</aside>
