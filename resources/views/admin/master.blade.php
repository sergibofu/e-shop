<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <div class="col1"></div>
        <div class="col2"></div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>