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

        .float {
            position: fixed;
            width: 60px;
            max-height: 120px;
            bottom: 40px;
            right: 40px;
            background-color: orangered;
            color: #FFF;
            border-radius: 100px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }

        .text-button {
            border: none;
            background-color: inherit;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
        }

        .btn {
            cursor: pointer;
        }

        .icon-close {
            right: 2rem;
            top: 1.8rem;
            transition: right .6s ease-in-out;
            cursor: pointer;
        }

        a,
        label,
        p {
            color: #1d1f1d;
            ;
        }

        label {
            font-weight: normal;
        }

        label:not(.form-check-label):not(.custom-file-label) {
            font-weight: normal;
        }

        .has-error .help-block {
            color: white;
            text-align: center;
        }

        .toggle-form {
            right: 0;
            position: fixed;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            transition: right .6s ease-in-out;
            background-color: rgba(0, 0, 0, 0.4);

        }

        .toggle-form.active {
            right: 0;
        }



        .orange {
            background-color: #ff910e;
            border-color: #ff910e;
            color: #fff;
            /* padding: .5rem 2rem; */
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 2rem;
        }

        .cancel {
            background-color: #fff;
            border-color: #ff910e;
            /* padding: .5rem 2rem; */
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 2rem;

        }

        .btn.orange:hover {
            background-color: #da7600;
            border-color: #da7600;
            color: #fff;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: .5rem .75rem;
            font-size: .9rem;
            line-height: 1.25;
            color: #495057;
            background-color: #fff;
            background-image: none;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 0.2rem;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        .formwrap {
            background-color: #fff;
            width: 700px;
            height: 100%;
            float: right;
            box-shadow: -1px 0px 12px rgba(0, 0, 0, 0.1);
        }

        .formwrap form input,
        .formwrap form input:focus {
            background-color: transparent;
            border-color: #989c99;
            color: black;
            margin-right: 10px;
        }

        .mid-col {
            max-width: 100%;
            flex: 0 0 100%;
            -ms-flex: 0 0 100%;
        }

        .form-control {
            background-color: transparent;
            border-color: #989c99;
            color: #fff;
            margin-right: 10px;
        }

        select.form-control:not([size]):not([multiple]) {
            background-color: transparent;
            border-color: #989c99;
            color: black;
        }

        option {
            background-color: #fff;
            color: #1f2124;
        }

        .nav-slider {
            height: 50px;
            background-color: #FAFAFA;
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
                                                <form id="profile-form" action="/profile" method="post">
                                                    @csrf
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" onclick="submitProfile()">
                                                            <p>Profile</p>
                                                        </a>
                                                        <input type="hidden" name="id" value="{{auth()->user()->id}}">
                                                    </li>
                                                </form>
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
                                    <a href="/projects" class="nav-link">
                                        <i class="fas fa-briefcase  nav-icon"></i>
                                        <p>Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-clock nav-icon"></i>
                                        <p>Recent</p>
                                    </a>
                                </li>
                                <li class="nav-header">Recent Projects</li>

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

    <script>
        function submitProfile() {
            document.getElementById("profile-form").submit();
        }

        $(document).ready(function() {
            $(".toggle-form").css("display", "none");

        });

        function open_project_modal() {
            $(".toggle-form").css("display", "block");
            $("#createProject").css("display", "none");

        }

        function close_project_modal() {
            $(".toggle-form").css("display", "none");
            $("#createProject").css("display", "block");
        }

        $('#createProject').on('click', function() {
            open_project_modal();
        });

        $('#close-modal').on('click', function() {
            close_project_modal()
        });
    </script>
</body>
@endauth

</html>