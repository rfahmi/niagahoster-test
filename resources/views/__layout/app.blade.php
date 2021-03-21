<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
    body {
        font-family: 'Roboto', sans-serif;
    }
    .top-banner {
        height: 44px;
        font-size: 14px;
        color: #333;
    }
    .top-banner a {
        color: #333;
    }
    .top-banner small {
        height: 10px;
    }
    .navbar-main {
        height: 88px;
    }
    .title {
        font-family: 'Montserrat', sans-serif;
        font-size: 32px;
        font-weight: 800;
        color: #4C4C4C;
    }
    .subtitle {
        font-family: 'Montserrat', sans-serif;
        font-size: 24px;
        font-weight: 400;
        color: #4C4C4C;
        margin-bottom: 16px;
    }
    .btn-main {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 800;
        color: #fff;
        background-color: #00A2F3;
    }
    .btn-secondary {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 800;
        color: #4C4C4C;
        border: solid 2px #4C4C4C;
        padding-left: 28px;
        padding-right: 28px;
        background-color: #fff;
    }
    .footer-main {
        font-size: 14px;
        padding-top:68px;
        padding-bottom:16px;
        font-weight: 400;
        color: #aaa;
        background-color: #303030;
    }
    .footer-main strong {
        margin-bottom: 12px;
        font-weight: 800;
    }
    .footer-main ul {
        list-style-type: none;
        margin: 0 0 16px 0;
        padding: 0;
    }
    .footer-social {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        min-height: 80px;
        font-weight: 600;
        color: #4C4C4C;
        background-color: #F7F7F7;
    }
    .footer-contact {
        font-family: 'Montserrat', sans-serif;
        font-size: 28px;
        min-height: 176px;
        font-weight: 400;
        color: #fff;
        background-color: #00A2F3;
    }
    .footer-contact b {
        font-weight: 800;
    }
    .headline {
        font-family: 'Montserrat', sans-serif;
        color: #4C4C4C;
    }
    .headline .text1 {
        font-size: 32px;
        font-weight: 800;
    }
    .headline .text2 {
        font-size: 28px;
        font-weight: 400;
    }
    .headline .text3 {
        font-size: 18px;
        font-weight: 400;
    }
    .headline .text4 {
        font-size: 14px;
        font-weight: 400;
    }
    .headline .benefit {
        font-size: 16px;
        font-weight: 400;
    }
    .tech-img {
        display: flex;
        height: 195px;
        justify-content: center;
    }

    .fitur {
        font-family: 'Montserrat', sans-serif;
        color: #4C4C4C;
    }
    .fitur strong {
        font-size: 18px;
        font-weight: 800;
    }
    .fitur p {
        font-size: 12px;
        font-weight: 400;
    }
    .paket {
        color: #4C4C4C;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }
    .paket .name {
        font-family: 'Montserrat', sans-serif;
        font-size: 24px;
        font-weight: 800;
    }
    .paket .price1 {
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
        font-weight: 800;
    }
    .paket .price1 .big {
        font-size: 50px;
        line-height: 42px;
    }
    .paket .price1 .bold {
        font-weight: 800;
    }
    .paket .price2 {
        font-size: 18px;
        font-weight: 400;
        text-decoration: line-through;
    }
    .paket button {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 800;
        color: #4C4C4C;
        border: solid 2px #4C4C4C;
        padding-left: 28px;
        padding-right: 28px;
        background-color: #fff;
    }
    .paket button.best {
        color: #fff;
        border: solid 2px #fff;
        background-color: #00A2F3;
    }
    .newsletter-form button {
        position: absolute;
        right: 4px;
        top: 4px;
        bottom: 4px;
        font-size: 12px;
        background-color: #00A2F3;
    }
    </style>

</head>
<body>
    @yield('content')
</body>
</html>
