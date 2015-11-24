<!DOCTYPE html>

<html>
    <head>
        <title>@yield('title')</title>

        <!-- View port-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

        <!-- HTTP -->
        <script src = "{!! asset('/js/jquery.min.js') !!}"></script>

        <!-- HTTPS -->
        <script src = "{!! secure_asset('/js/jquery.min.js') !!}"></script>

        <link href="{!! asset('/library/sweetalert/sweetalert.css') !!}" rel='stylesheet' type="text/css">
        <script src = "{!! asset('/library/sweetalert/sweetalert.min.js') !!}"></script>

        <!-- Fonts and style rules -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>

        <!-- HTTP -->
        <link href="{!! asset('/css/materialize.css') !!}" rel='stylesheet' type="text/css">
        <!-- HTTPS -->
        <link href="{!! secure_asset('/css/materialize.css') !!}" rel='stylesheet' type="text/css">


        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


        <!-- Materialize Compiled and minified JavaScript -->
        <!-- HTTP -->
        <script src = "{!! asset('/js/materialize.min.js') !!}"></script>
        <!-- HTTPS -->
        <script src = "{!! secure_asset('/js/materialize.min.js') !!}"></script>



        <!--
        Custom scripts for SUYABAY dashboard
        Javascript
        CSS
        -->

        <!-- 
        javascripts 
        -->
        <script src = "{!! asset('/js/dashboard.js') !!}"></script>
        

        <!-- 
        css 
        -->
        <link href = "{!! asset('/css/dashboard.css') !!}" rel='stylesheet' type="text/css">


    </head>
    <body>

        <div class="row">
            @include('dashboard.includes.sections.header')
        </div>

        <div class="row">
            @include('dashboard.includes.sections.side_nav')

            @yield('content')
        </div>


        <script>
            
  $(document).ready(function() {
    $('select').material_select();
  });
            
        </script>

    </body>
</html>



