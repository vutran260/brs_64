<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/auth.css') }}">
</head>
<body>
    <a href="{{ action('HomeController@index') }}">
        <h1 class="text-center login-title">@lang('setting.site_name')</h1>
    </a>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
