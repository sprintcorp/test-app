<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BingHR</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">



    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="{{asset('css/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

@include('layouts.svg');

{{--     Tool bar--}}
@include('layouts.primary_menu')

<div class="d-flex page-wrapper">
    @include('layouts.secondary_menu')
    <div class="main-content">
            @include('layouts.navbar')

            @yield('content')
        <footer class="p-4">
            &copy; Copyright 2022 BingHR.io
        </footer>
    </div>
</div>

<script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('js/sidebars.js')}}"></script>
<script src="{{asset('js/application.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>
