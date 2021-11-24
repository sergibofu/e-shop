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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <div class="row">
            <!-- COL1 -->
            <div class="col1 col-3 col-md-2 col-lg-2">@include('admin.sidebar')</div>
            
            <!-- COL2 -->
            <div class="col2 col-9 col-md-10 col-lg-10">

                <!-- Barra de navegacion -->
                <nav class="nav navbar-expand-lg shadow">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin')}}">
                                <i class="fas fa-home"></i>Dashboard
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Page -->
                <div class="page">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb shadow">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/home')}}"><i class="fas fa-home"></i>Dashboard</a>
                                </li>
                                @section('breadcrumb')
                                @show
                            </ol>
                        </nav>
                    </div>

                @if(Session::has('message'))
                    <div class="container-fluid">
                        <div class="alert alert-{{Session::get('typealert') }} mtop16">
                            {{Session::get('message')}}
                        </div>
                    </div>
                @endif

                @section('content')

                @show
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>