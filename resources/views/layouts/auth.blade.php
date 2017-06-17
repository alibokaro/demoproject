<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!-- Bootstrap CSS -->    
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js')}}"></script>
    <script src="{{ asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

 @yield('content')
      
    <div class="text-right">
            <div class="credits">
                 
            </div>
        </div>
    </div>


  </body>
</html>
