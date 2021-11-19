<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/connect.css')}}">
    <title>@yield('title')</title>
</head>
<body>

    @if(Session::has('message'))
    <div class="alert alert-{{Session::get('alertType')}}">
        {{Session::get('message')}}
    </div>

    @endif
    <br>

    @yield('content')

    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>