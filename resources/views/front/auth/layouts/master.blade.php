<!DOCTYPE html>
<html lang="PT-pt">
<head>
    @include('front.auth.layouts.meta')
    <title>@yield('title')</title>
</head>
<body>
    <div class="main">
        @include('front.auth.layouts.navbar')
        @yield('content')
    </div>

    @include('front.auth.layouts.footer')
    @include('front.auth.layouts.script')
</body>
</html>