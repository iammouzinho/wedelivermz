<!DOCTYPE html>
<html lang="PT-pt">
<head>
    @include('front.layouts.meta')
    <title>@yield('title')</title>
</head>
<body>
    <div class="main">
        @include('front.layouts.topnav')
        @include('front.layouts.navbar')
        @yield('content')
    </div>

    @include('front.layouts.script')
</body>
</html>