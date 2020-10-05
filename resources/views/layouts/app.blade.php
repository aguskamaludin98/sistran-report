<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendor/fonts/circular-std/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    @yield('content')
    <script src="{{asset('asset/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
 
</html>