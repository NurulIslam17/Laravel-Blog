<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:02 GMT -->
<head>
    <meta charset="utf-8">
    <title>BIZTROX - @yield('title')</title>
    @include('fontend.includes.style')
</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('/')}}fontend/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
{{--    header--}}
    @include('fontend.includes.header')
<!-- Search Form -->
    @yield('body')

    <!-- footer -->
    @include('fontend.includes.footer')
    <!-- /footer -->
    @include('fontend.includes.script')
</body>

<!-- Mirrored from demo.themefisher.com/biztrox/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:05 GMT -->
</html>
