<x-layer>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <h3>Enter Security Code</h3>
                </div>
                <form action="/recover/code" method="post">

                    <div class="card-body">
                        <p class="login-box-msg text-center">
                            Please check your email for a message with your code. Your code is 6 numbers long.</p>
                        @csrf
                        <table class="table">
                            <tbody>
                                <tr>
                                    <div class="container text-center">
                                        <input class="form-control form-control-lg" type="text" placeholder="Enter code">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-check">
                                        We sent your code to: <br>
                                        {{$user->email}}
                                    </div>
                                </tr>

                            </tbody>
                        </table>



                    </div>
                    <!-- /.login-card-body -->
                    <div class="card-footer">


                        <div class="row">
                            <p class="ml-2">
                                <a href="login.html">Didn't get a code</a>
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <a href="/login">
                                    <button type="button" class="btn btn-block btn-secondary btn-lg ">Cancel</button>
                                </a>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Continue</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>


        </div>
        <!-- /.login-box -->
    </body>
</x-layer>