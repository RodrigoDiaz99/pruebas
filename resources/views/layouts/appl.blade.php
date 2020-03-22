<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Prueba') }}</title>

    <!-- Custom fonts for this theme -->
    <link href="{!! asset('vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="{!! asset('css/freelancer.min.css') !!}" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script src="{!! asset('vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

    <!-- Plugin JavaScript -->
    <script src="{!! asset('vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{!! asset('js/jqBootstrapValidation.js') !!}"></script>
    <script src="{!! asset('js/contact_me.js') !!}"></script>

    <!-- Custom scripts for this template -->
    <script src="{!! asset('js/freelancer.min.js') !!}"></script>
   <style>

    </style>


  </head>

  <body id="page-top">


    <main class="py-4">
        @yield('content')
    </main>
  </body>

  </html>
