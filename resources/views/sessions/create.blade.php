<x-layer>

    <body class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="/login" class="h1"><b>Bug</b>Tracker</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form action="/login" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input name="remember_me" type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <div class="social-auth-links text-center mt-2 mb-3">
                        <a href="/login/facebook" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="/login/google" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                    </div>
                    <!-- /.social-auth-links -->

                    <p class="mb-1">
                        <a href="/passwordreset">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="/register" class="text-center">Register a new membership</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->


    </body>


</x-layer>

<script>
    let $session = "{{Session::get('status')}}";
    const status = new Map([
        ['failed_facebook_login', 'Something went wrong or You have rejected the app!'],
        ['failed_login', 'Your provided credentials could not be verified.'],
        ['goodbye', 'See ya later!'],
    ]);

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
        } else if ($session == 'failed_facebook_login') {
            $('.swalDefaultSuccess').ready(function() {
                Toast.fire({
                    icon: 'success',
                    title: status.get('failed_facebook_login')
                })
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