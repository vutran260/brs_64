<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ trans('admin.admin_area') }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/skin-blue.min.css') }}">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        @include('admin.includes.header')

        @include('admin.includes.menu')

        <div class="content-wrapper">

            @yield('content')

        </div>

        @include('admin.includes.sidebar')

        @include('admin.includes.footer')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/adminlte.min.js') }}"></script>

</html>
