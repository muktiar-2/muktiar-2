<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Expert</title>
    <link rel="shortcut icon" href="{{asset('')}}frontend/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/all.min.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/style.css">
</head>
<body>
@include('partials.preloader')

<header>
    @include('partials.navigation')
</header>

@yield('content')


@include('partials.subscribe-newsletter')
@include('partials.footer')
@include('partials.scrollToTop')

<script src="{{asset('')}}frontend/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('')}}frontend/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}frontend/js/jquery-migrate-3.3.2.min.js"></script>
<script src="{{asset('')}}frontend/js/slick.min.js"></script>
<script src="{{asset('')}}frontend/js/script.js"></script>
</body>
</html>
