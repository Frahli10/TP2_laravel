<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{ url('assets/vendor/fonts/boxicons.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ url('assets/vendor/css/core.css') }}" class="template-customizer-core-css">
     <link rel="stylesheet" type="text/css" href="{{ url('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" >
     <link rel="stylesheet" type="text/css" href="{{ url('assets/css/demo.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ url('assets/vendor/libs/apex-charts/apex-charts.css') }}">
     <script src="{{ asset('assets/vendor/js/helpers.js') }}" ></script>
     <script src="{{ asset('assets/js/config.js') }}" ></script>
    <style>
        body{
            font-family: 'Nunito'
        }
    </style>
</head>
<body>
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      <div class="layout-page">
        @include('layouts.navbar')
        @yield('content')
        <div class="content-backdrop fade"></div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    </div>
    
</body>
<!--script src="{{ asset('js/app.js') }}" defer></script -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}" ></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}" ></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}" ></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}" ></script>
<script src="{{ asset('assets/vendor/js/menu.js') }}" ></script>
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}" ></script>
<script src="{{ asset('assets/js/main.js') }}" ></script>
<script src="{{ asset('assets/js/dashboards-analytics.js') }}" ></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>


</html>