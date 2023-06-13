<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <title>Drive-Thru</title>
    @include('frontend.partials._head')
    @include('frontend.partials.custom_style')


</head>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
      data-menu="vertical-menu-modern" data-col="" style="height: auto;" onload=display_ct();>
@include('frontend.partials.header')
@include('frontend.partials.main-menu')
@yield('main-content')
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
{{--    @include('frontend.partials.footer')    --}}
@include('frontend.partials._script')
</body>
</html>
