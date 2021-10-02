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