<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @php
    @endphp
@include('frontend.include.head')
<body>
    <div id="fb-root">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="fXefOAoL"></script>
</div>
    @include('frontend.include.topnav')
    @include('frontend.include.navbar')
    <main>
    @yield('content')
    </main>
    @include('frontend.include.footer')
    @include('frontend.include.script')
</body>
</html>