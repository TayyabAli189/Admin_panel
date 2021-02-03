<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @includeIf('backend.include.styles')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@includeIf('backend.include.header')

@includeIf('backend.include.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New User and Rights</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h2 class="card-title">New User</h2>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row col-md-8">
                                        <label for="inputEmail3" class="col-sm-3">User ID</label>
                                        <div class="col-sm-7">
                                            <input type="userid" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-8">
                                        <label for="inputPassword3" class="col-sm-3">Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row col-md-8">
                                        <label for="branch" class=" col-sm-3">Terminal</label>
                                        <select class="form-control col-sm-7">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>

                                    <div class="form-group row col-md-8">
                                        <label for="" class="col-sm-3">Login Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row col-md-8">
                                        <label for="" class="col-sm-3">First Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row col-sm-10">
                                        <div class=" col-sm-2">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label" for="exampleCheck2">Status</label>
                                            </div>
                                        </div>

                                        <div class=" col-sm-2">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label" for="exampleCheck2">Admin Role</label>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="card-header">
                                        <h2 class="card-title">Rights Assignment To User</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">

                                                <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                <input type="" class="form-control col-sm-1" placeholder="Sr. No" disabled>
                                                <input type="" class="form-control col-sm-10" placeholder="Object Name" disabled>
                                                <input type="" class="form-control col-sm-1" placeholder="view" disabled>
                                                <input type="" class="form-control col-sm-1" placeholder="Insert" disabled>
                                                <input type="" class="form-control col-sm-1" placeholder="Update" disabled>
                                                <input type="" class="form-control col-sm-1" placeholder="Delete" disabled>

                                            </div>
                                            <div style="margin-top: 3px;"> </div>

                                            <div class="input-group">

                                                <input type="text" class="form-control col-sm-1" disabled>
                                                <input type="text" class="form-control col-sm-1">
                                                <input type="text" class="form-control">

                                                <div class="card-group row col-sm-4">
                                                    <div class="input-group-prepend col-sm-3">
                                                    <span class="input-group-text">
                                                     <input type="checkbox">
                                                    </span>
                                                    </div>
                                                    <div class="input-group-prepend col-sm-3">
                                                    <span class="input-group-text">
                                                     <input type="checkbox">
                                                    </span>
                                                    </div>
                                                    <div class="input-group-prepend col-sm-3">
                                                    <span class="input-group-text">
                                                     <input type="checkbox">
                                                    </span>
                                                    </div>
                                                    <div class="input-group-prepend col-sm-3">
                                                    <span class="input-group-text">
                                                     <input type="checkbox">
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-top: 3px;"> </div>




                                            <!-- /input-group -->
                                        </div>
                                    </div>
                                    <!-- /.row -->


                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">New</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="submit" class="btn btn-info">Edit</button>
                                    <button type="submit" class="btn btn-secondary">Clear</button>
                                    <button type="submit" class="btn btn-warning">Search</button>
                                    <button type="submit" class="btn btn-danger">Exit</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->


                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@includeIf('backend.include.footer')
<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@includeIf('backend.include.scripts')

</body>
</html>
