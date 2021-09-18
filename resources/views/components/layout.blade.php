<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/dist/css/adminlte.min.css')}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/toastr/toastr.min.css')}}">


    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .avatar {
            vertical-align: middle;
            width: 42px;
            height: 42px;
            border-radius: 50%;
        }


        .dropdown-item {
            margin-left: 5px;
        }

        .dot {
            height: 8px;
            width: 8px;
            background-color: purple;
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
        }

        .avatar img {
            border-radius: 50%;
            position: relative;
            left: -5px;
            margin-left: -14px;
        }

        .avatars {
            direction: rtl;
            /* This is to get the stack with left on top */
            text-align: left;
            /* Now need to explitly align left */
            padding-left: 20px;
            /* Same value as the negative margin */
        }
    </style>
</head>

@auth

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/index" class="nav-link active">
                        <h5>Home</h5>
                    </a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button type="button" class="btn btn-light mr-2">Share</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </li>
            </ul>

        </nav>


        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <a href="/index" class="brand-link">
                <i class="fas fa-bug pl-3" style="opacity: .8"></i>
                <!-- <img src="{{asset('/bower_components/admin-lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                <span class="brand-text font-weight-light">Bug Tracker</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item mt-3 mb-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <img src="{{asset('/bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="avatar img-circle elevation-1" alt="User Image">
                                    </div>
                                    <div class="col-sm">
                                        <span class="text-light">{{auth()->user()->name}}</span><br>
                                        <span class="text-secondary">{{auth()->user()->email}}</span>
                                    </div>
                                    <div class="col-sm d-flex justify-content-center">
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown"></a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item"><a href="/profile">Profile</a></li>
                                                <form action="/logout" method="post">
                                                    @csrf
                                                    <li class="dropdown-item"><button type="submit" class="btn btn-danger">Logout</button>
                                                    </li>
                                                </form>
                                            </ul>
                                        </div>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="pages/layout/top-nav.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Top Navigation</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Top Navigation + Sidebar</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item menu-open">

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-home nav-icon"></i>
                                        <p>Home</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-tasks  nav-icon"></i>
                                        <p>My Tasks</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-clock nav-icon"></i>
                                        <p>Recent</p>
                                    </a>
                                </li>
                                <li class="nav-header">Teams</li>

                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{$slot}}

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <div class="p-3">
                @if(auth()->user())
                <h5>{{auth()->user()->name}}</h5>
                @endif
                <hr>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src=" {{asset('/bower_components/admin-lte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/bower_components/admin-lte/dist/js/adminlte.min.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{asset('/bower_components/admin-lte/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- Toastr -->
    <script src="{{asset('/bower_components/admin-lte/plugins/toastr/toastr.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('/bower_components/admin-lte/dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
</body>
@endauth

</html>