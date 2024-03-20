<!DOCTYPE html>
<html lang="fa-ir en">

@include('layouts.header')

<body class="bg-orange full-page">

<!-- Preloader -->
<div class="preloader">
    <div class="preloader__wrap">
        <svg class="spinner-container" viewBox="0 0 52 52">
            <circle class="path" cx="26px" cy="26px" r="20px" fill="none" stroke-width="4px"/>
        </svg>
        <div class="preloader__progress"><span></span></div>
    </div>
</div>

<main class="main">

    <!-- Menu -->
    @include('layouts.menu')

    <div class="wrapper wrapper--shadow-orange sticky-parent">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Content -->
        @yield('content')

    </div><!-- Wrapper End -->

</main>

@include('layouts.footer')

</body>
</html>
