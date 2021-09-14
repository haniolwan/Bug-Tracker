<x-layer>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <h3>Reset Your Password</h3>
                </div>
                <div class="card-body">
                    <p class="login-box-msg text-center">
                        How do you want to get the code to reset your password?</p>
                    <form action="/login/identify" method="post">
                        @csrf
                        <table class="table">
                            <tbody>
                                <tr>
                                    <div class="container text-center">
                                        <div class="">
                                            <img src="{{asset('/bower_components/admin-lte/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                        </div>
                                        <div class="mt-2 mb-2">
                                            {{$user->name}} elwan
                                            <br>
                                            <p class="text-secondary">
                                                Bug tracker user
                                            </p>
                                        </div>

                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-check ">
                                        <input name="contact" class="form-check-input " type="radio" id="email">
                                        <label class="form-check-label" for="email">
                                            Send code via email
                                            <br>
                                            {{$user->email}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="contact" class="form-check-input" type="radio" id="number">
                                        <label class="form-check-label" for="number">
                                            Send code via SMS
                                            <br>
                                            +********33
                                        </label>
                                    </div>
                                </tr>

                            </tbody>
                        </table>

                    </form>

                </div>
                <!-- /.login-card-body -->
                <div class="card-footer">


                    <div class="row">
                        <p class="ml-2">
                            <a href="login.html">not longer have access to these?</a>
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <a href="">
                                <button type="button" class="btn btn-block btn-secondary btn-lg ">Not You?</button>
                            </a>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-block btn-primary btn-lg">Continue</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

            </div>


        </div>
        <!-- /.login-box -->
    </body>
</x-layer>