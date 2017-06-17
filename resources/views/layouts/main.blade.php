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
     <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
     <style type="text/css">
     #toast-container>div{
      opacity:0.9;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=90);filter:alpha(opacity=90);cursor:pointer;
     }
     </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="{{ asset('js/html5shiv.js')}}"></script>
      <script src="{{ asset('js/respond.min.js')}}></script>
      <script src="{{ asset('js/lte-ie7.js')}}"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="/" class="logo">Welcome <span class="lite">{{ ucfirst(Auth::user()->name) }}</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->

                <ul class="nav pull-right top-menu">
                    
                    
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/user.png" width="40">
                            </span>
                            <span class="username">  {{ ucfirst(Auth::user()->name) }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a ><i class="icon_profile"></i> My Profile</a>
                            </li>
                             
                            <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon_key_alt"></i> Log Out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </li>
                             
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="/">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                   
                             
                   
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          
              <!-- page start-->
         @yield('content')
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                 
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- nice scroll -->
    <script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script><!--custome script for all page-->
    <script src="{{ asset('js/scripts.js')}}"></script>
 <script src="{{ asset('js/ajaxCall.js')}}"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   

  </body>
</html>
