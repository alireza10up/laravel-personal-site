<div class="circle-menu">
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="hamburger__text">منو</div>
    </div>
</div>

<div class="nav-wrap">
    <ul class="nav">
        <li class="nav__item"><a @if(request()->routeIs('home')) class="active" @endif  href="{{route('home')}}">درباره من</a></li>
        <li class="nav__item"><a @if(request()->routeIs('resume.index')) class="active" @endif  href="{{route('resume.index')}}">رزومه</a></li>
        <li class="nav__item"><a @if(request()->routeIs('portfolio.index')) class="active" @endif  href="{{route('portfolio.index')}}">نمونه کارها</a></li>
        <li class="nav__item"><a @if(request()->routeIs('blog.index')) class="active" @endif href="{{route('blog.index')}}">وبلاگ</a></li>
        <li class="nav__item"><a @if(request()->routeIs('contact.index')) class="active" @endif  href="{{route('contact.index')}}">تماس با من</a></li>
    </ul>
</div>
