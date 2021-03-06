<x-layout>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="col-sm">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item active">Pinned Projects</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content ">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Graph API</span>
                            <span class="info-box-number">
                                <li class="breadcrumb-item active">16 Members</li>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Likes</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Sales</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">New Members</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            <div class="row">
                                <div class="col-sm">
                                    <h5 class="card-title">PROJECT</h5>
                                </div>
                                <div class="col-sm">
                                    MEMBERS
                                </div>
                                <div class="col-sm-3">
                                    LAST UPDATED
                                </div>
                                <div class="col-sm-.05">
                                    <span> </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="height:500px ">
                            @foreach($bugs as $bug)
                            <div class="row mb-3">
                                <div class="col-sm"><span class="dot"></span>
                                    {{$bug->name}} <span class="text-secondary text-sm">in NothingWorks</span></span>
                                </div>
                                <div class="col-sm">
                                    <div class="avatars">
                                        <span class="text-sm text-secondary ">
                                            12+
                                        </span>
                                        <span class="avatar">
                                            <img src="https://www.fillmurray.com/100/100" width="32" height="32" />
                                        </span>
                                        <span class="avatar">
                                            <img src="https://www.fillmurray.com/200/200" width="32" height="32" />
                                        </span>
                                        <span class="avatar">
                                            <img src="https://www.fillmurray.com/150/150" width="32" height="32" />
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-secondary">{{$bug->updated_at}}</div>
                                <div class="col-sm-.05 text-secondary"><a class="text-secondary" href=""><i class="fas fa-ellipsis-v"></a></i></div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- ./card-body -->

                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</x-layout>

<script>
    let success = "{{Session::get('status')}}";
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1000
        });

        if (success) {
            $('.toastrDefaultSuccess').ready(function() {
                toastr.success(success)
            });
        }
    });
</script>