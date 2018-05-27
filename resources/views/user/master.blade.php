<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    @include('user.includes.header')

    @include('common.errors')

    @include('common.messages')

    @yield('content')

    @include('user.includes.footer')

    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
