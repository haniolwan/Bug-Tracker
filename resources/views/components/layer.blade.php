<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bug Tracker</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/dist/css/adminlte.min.css')}}">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('/bower_components/admin-lte/plugins/toastr/toastr.min.css')}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">

    <style>
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

        /* .toggle-form {
            right: 0;
            position: fixed;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            transition: right .6s ease-in-out;
        } */

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

{{$slot}}
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
    let $session = "{{Session::get('status')}}";
    const status = new Map([
        ['failed_social_login', 'Something went wrong or You have rejected the app!'],
        ['failed_login', 'Your provided credentials could not be verified.'],
        ['goodbye', 'See ya later!'],

    ]);

    $(document).ready(function() {
        $('#reservationdate').on('click', function() {
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
        });
    });

    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        if ($session == 'failed_login') {
            $('.toastrDefaultError').ready(function() {
                toastr.error(status.get('failed_login'))
            });
        } else if ($session == 'failed_social_login') {
            $('.toastrDefaultError').ready(function() {
                toastr.error(status.get('failed_social_login'))
            });
        } else if (($session == 'goodbye')) {
            $('.swalDefaultSuccess').ready(function() {
                Toast.fire({
                    icon: 'success',
                    title: status.get('goodbye')
                })
            });

        }

    });
</script>


</body>

</html>