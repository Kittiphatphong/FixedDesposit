<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/ag-grid/ag-grid.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/ag-grid/ag-theme-material.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <!-- <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css"> -->
    <!--  finished -->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
      @font-face {
        font-family: 'Lao_Classic3';
        src: url("/assets/Lao_Classic3.ttf");
      }
      body{
        font-family: Lao_Classic3;
        font-size: 2rem;
      }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>
<!-- <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li> -->
                        </ul>
                        <ul class="nav navbar-nav">
                            <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>


                            </li> -->
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                      @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ Auth::user()->name }}</span><span class="user-role">@foreach(Auth::user()->roles as $role){{$role->name}} @endforeach</span></div><span><img class="round" src="../../../app-assets/images/portrait/small/account.png" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="feather icon-power"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                            </div>

                        </li>
                    </ul>
                    @endguest
                </div>
            </div>
        </div>
    </nav>


    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @auth

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('home')}}">
                        {{-- <div class="brand-logo"></div> --}}
                        <img src="image/ncc.png" alt="" width="60px">
                        <h2 class="brand-text mb-0">Inventory</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon success" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <!-- <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                <span class="badge badge badge-warning badge-pill float-right mr-2">2</span>
                </a>
                    <ul class="menu-content">
                        <li><a href="dashboard-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="dashboard-ecommerce.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul> -->
                </li>

                <!-- <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Ecommerce</span></a>
                </li> -->
                @if(auth()->user()->can('HeadManagement'))
                <li class=" nav-item"><a href=""><i class="fa fa-handshake-o"></i><span class="menu-title" data-i18n="Head ">Head management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('categories.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="{{route('categories.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Create</span></a>
                        </li>

                    </ul>
                </li>
                @endIf
                @if(auth()->user()->can('CustomerManagement'))
                <li class=" nav-item"><a href=""><i class="feather icon-users"></i><span class="menu-title" data-i18n="customers ">Dealers</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('customers.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="{{route('customers.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Create</span></a>
                        </li>

                    </ul>
                </li>
                @endIf
                @if(auth()->user()->can('TypeDeviceManagement'))
                <li class=" nav-item"><a href=""><i class="feather icon-smartphone"></i><span class="menu-title" data-i18n="Devices type "Devices type</span>Devices type</a>
                    <ul class="menu-content">
                        <li><a href="{{route('types.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="{{route('types.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Create</span></a>
                        </li>

                    </ul>
                </li>
                @endIf
                @if(auth()->user()->can('RequestId'))
                <li class=" nav-item"><a href="#"><i class="feather icon-box "></i><span class="menu-title" data-i18n="request id">Request id</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('requestid.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="{{ route('requestid.create') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Create</span></a>
                        </li>

                    </ul>
                </li>
                @endIf
                @if(auth()->user()->can('SellerManagement'))
                <li class=" nav-item"><a href="#"><i class="fa fa-users"></i><span class="menu-title" data-i18n="seller">Seller management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('itrecorde.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="{{ route('itrecorde.create') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Create</span></a>
                        </li>

                    </ul>
                </li>
                @endIf
                @if(auth()->user()->can('StockManagement'))
                <li class=" nav-item"><a href="#"><i class="fa fa-university"></i><span class="menu-title" data-i18n="User ">Stock management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('stocks.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Dashboard</span></a>
                        </li>
                        <li><a href="{{ route('stocks.create') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">In list</span></a>
                        </li>
                        <li><a href="{{ route('formout') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Out list</span></a>
                        </li>

                    </ul>
                </li>
                @endIf
                @if(auth()->user()->can('UserManagement'))
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User ">User management</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('user.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">Users list</span></a>
                        </li>
                        <li><a href="{{ route('role.index') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Role</span></a>
                        </li>

                    </ul>
                </li>
                @endIf
            </ul>
        </div>
    </div>
    @endAuth
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <main class="main">
    @auth
        <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            @if(Session()->has('success'))
                        <div class="alert alert-success">
                            {{ Session()->get('success') }}
                        </div>
            @endif
            @if(Session()->has('warning'))
                        <div class="alert alert-danger">
                            {{Session()->get('warning')}}
                        </div>
            @endif
            <div class="content-body">
                <!-- users edit start -->
                @yield('content')
            </div>
        </div>
    </div>


    <!-- END: Content-->



    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="www.ncc.com.la" target="_blank">Kittiphatphong & Vongphachan</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">New concept consulting IT team<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->
    @else
    @yield('content')
    @endAuth
    </main>

    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="../../../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="../../../app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>


    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
    <!-- BEGIN: Page JS-->
    <!-- <script src="../../../app-assets/js/scripts/pages/app-email.js"></script> -->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
