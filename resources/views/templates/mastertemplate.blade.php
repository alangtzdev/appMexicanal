<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Mexicanal | @yield('title')</title>
      <link rel="stylesheet" href="">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{'css/globalMandatoryStyle.css'}}">
      <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
      <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <link rel="stylesheet" href="{{'css/pageLevelPluginStyle.css'}}">
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL STYLES -->
      <link rel="stylesheet" href="{{'css/themeGlobalStyle.css'}}">type="text/css" /> --}}
      <!-- END THEME GLOBAL STYLES -->
      <!-- BEGIN PAGE LEVEL STYLES -->
      <link href="{{asset('assets/pages/css/login-4.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- END PAGE LEVEL STYLES -->
      <!-- BEGIN THEME LAYOUT STYLES -->
      <link rel="stylesheet" href="{{'css/themeLayoutStyle.css'}}">
      <!-- END THEME LAYOUT STYLES -->
      <link rel="shortcut icon" href="favicon.ico" />
   </head>

   <body class="page-header-fixed page-sidebar-closed-hide-logo page-md">
      <div class="page-wraper">
         <!-- BEGIN HEADER -->
         <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
               <!-- BEGIN LOGO -->
               <div class="page-logo">
                  <a href="index.html">
                     <img src="{{asset('assets/layouts/layout/img/logo.png')}}" alt="logo" class="logo-default" /> </a>
                  <div class="menu-toggler sidebar-toggler">
                     <span></span>
                  </div>
               </div>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                  <span></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <!-- BEGIN TOP NAVIGATION MENU -->
               <div class="top-menu">
                  <ul class="nav navbar-nav pull-right">
                     <!-- BEGIN USER LOGIN DROPDOWN -->
                     <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           <img alt="" class="img-circle" src="{{asset('assets/layouts/layout/img/avatar3_small.jpg')}}" />
                           <span class="username username-hide-on-mobile"> Nick </span>
                           <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                           <li>
                              <a href="userprofile">
                                 <i class="icon-user"></i> Mi perfil</a>
                           </li>
                           <li class="divider"> </li>
                           <li>
                              <a href="lockscreen">
                                 <i class="icon-lock"></i> Bloquear pantalla </a>
                           </li>
                           <li>
                              <a href="logout">
                                 <i class="icon-key"></i> Salir </a>
                           </li>
                        </ul>
                     </li>
                     <!-- END USER LOGIN DROPDOWN -->
                  </ul>
               </div>
               <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
         </div>
         <!-- END HEADER -->
         <!-- BEGIN HEADER & CONTENT DIVIDER -->
         <div class="clearfix"> </div>
         <!-- END HEADER & CONTENT DIVIDER -->
         <!-- BEGIN CONTAINER -->
         <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
               <!-- BEGIN SIDEBAR -->
               <div class="page-sidebar navbar-collapse collapse">
                  <!-- BEGIN SIDEBAR MENU -->
                  <ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                     <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                     <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                           <span></span>
                        </div>
                     </li>
                     <!-- END SIDEBAR TOGGLER BUTTON -->
                     <li class="nav-item {{Request::is('dashboard') ? 'start active' : 'null'}}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                           <i class="icon-home"></i>
                           <span class="title">Dashboard</span>
                           <span class="selected"></span>
                           <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                           <li class="nav-item {{Request::is('dashboard') ? 'start active open' : 'null'}}">
                              <a href="dashboard" class="nav-link ">
                                 <i class="icon-graph"></i>
                                 <span class="title">Dashboard</span>
                                 <span class="selected"></span>
                                 <span class="badge badge-danger">5</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="heading">
                        <h3 class="uppercase">Herramientas</h3>
                     </li>
                     <li class="nav-item {{Request::is('users') ? 'start active' : 'null'}}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                           <i class="icon-users"></i>
                           <span class="title">Usuarios</span>
                           <span class="selected"></span>
                           <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                           <li class="nav-item {{Request::is('users') ? 'start active open' : 'null'}}">
                              <a href="users" class="nav-link ">
                                 <span class="title">Alta</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item {{Request::is('reports') ? 'start active' : 'null'}}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                           <i class="icon-pie-chart"></i>
                           <span class="title">Reportes</span>
                           <span class="selected"></span>
                           <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                           <li class="nav-item {{Request::is('reports') ? 'start active open' : 'null'}}">
                              <a href="reports" class="nav-link ">
                                 <span class="title">Date & Time Pickers</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
                  <!-- END SIDEBAR MENU -->
                  <!-- END SIDEBAR MENU -->
                  <!-- END SIDEBAR -->
               </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
               <!-- BEGIN CONTENT BODY -->
               <div class="page-content">
                  <!-- BEGIN PAGE HEADER-->
                  <!-- BEGIN PAGE TITLE-->
                  <h1 class="page-title"> @yield('title')
                     <small></small>
                  </h1>
                  <!-- END PAGE TITLE-->
                  <!-- BEGIN PAGE BAR -->
                  <div class="page-bar">
                     <ul class="page-breadcrumb">
                        <li>
                           <a href="dashboard">Dashboard</a>
                           <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                           <span>@yield('bar')</span>
                        </li>
                     </ul>
                     {{-- <div class="page-toolbar">
                     <div class="pull-right tooltips btn btn-fit-height green" data-placement="top">
                        <i class="icon-calendar"></i>&nbsp;
                        <span class="thin uppercase hidden-xs"></span>&nbsp;
                        <i class="fa fa-angle-down"></i>
                     </div>
                     </div> --}}
                  </div>
                  <!-- END PAGE BAR -->
                  <!-- END PAGE HEADER-->
                  @yield('content-master')
               </div>
               <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
         </div>
         <!-- END CONTAINER -->
         <!-- BEGIN FOOTER -->
         <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Dashboard Theme By
               <a target="_blank" href="http://covenantsw.com">Covenant Software</a> &nbsp;|&nbsp;
               {{-- <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a> --}}
            </div>
            <div class="scroll-to-top">
               <i class="icon-arrow-up"></i>
            </div>
         </div>
         <!-- END FOOTER -->
      </div>
      <!-- BEGIN CORE PLUGINS -->
      <script src="{{'js/corePlugins.js'}}"></script>
      <!-- END CORE PLUGINS -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <script src="{{'js/pageLevelScript.js'}}"></script>
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL SCRIPTS -->
      <script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
      <!-- END THEME GLOBAL SCRIPTS -->
      <!-- BEGIN PAGE LEVEL SCRIPTS -->
      <!--script src="{{asset('assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script-->
      <!-- END PAGE LEVEL SCRIPTS -->
      <!-- BEGIN THEME LAYOUT SCRIPTS -->
      <script src="{{'js/themeLayoutScript.js'}}"></script>
      <!-- END THEME LAYOUT SCRIPTS -->
      <script src="{{asset('assets/layouts/layout/scripts/frameload.js')}}" type="text/javascript"></script>
   </body>
</html>