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
                        <h1>Dispatch</h1>
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
                                <h2 class="card-title">Dispatch</h2>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="col-md-12">

                                        <form class="needs-validation" novalidate>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Dispatch No</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="">

                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Vehicle</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="" >

                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Time</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom03">Dispatch Date</label>
                                                    <input type="text" class="form-control" id="validationCustom03" placeholder="" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom04">Guard Name</label>
                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Mobile</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05"> Remarks</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05"> City</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05"> CPP</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Total Weight</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Total Qty</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" >
                                                </div>
                                              {{--  <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Web Code</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Customer</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" >
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Remarks</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" >
                                                </div>--}}

                                            </div>


                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="input-group">

                                                            <input type="" class="form-control col-sm-1" placeholder="Booking No" disabled>
                                                            <input type="" class="form-control col-sm-4" placeholder="Dest Station-CPP" disabled>
                                                            <input type="" class="form-control col-sm-4" placeholder="Item Description" disabled>
                                                            <input type="" class="form-control col-sm-1" placeholder="Qty" disabled>
                                                            <input type="" class="form-control col-sm-1" placeholder="Weight" disabled>
                                                            <input type="" class="form-control col-sm-1" placeholder="Amount" disabled>
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>

                                                        </div>
                                                        <div style="margin-top: 3px;"> </div>

                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-4">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="text" class="form-control col-sm-1">
                                                            <input type="" class="form-control col-sm-1" placeholder="Del" disabled>
                                                        </div>

                                                        <!-- /input-group -->
                                                    </div>
                                                </div>


                                            </div>
                                        </form>


                                        {{--    <div class="form-group row col-md-8 ">
                                                <label for="inputEmail3" class="col-sm-2"> Booking #</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-8">
                                                <label for="inputEmail3" class="col-sm-2"> Manual</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-8">
                                                <label for="inputEmail3" class="col-sm-2"> From City</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-8">
                                                <label for="inputEmail3" class="col-sm-2"> To City</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-8">
                                                <label for="inputEmail3" class="col-sm-2"> Date/Time</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-8">
                                                <label for="inputEmail3" class="col-sm-2"> Pay Mode</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-8">
                                                <label for="inputEmail3" class="col-sm-2"> Train</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="" placeholder="">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-header">
                                                <h2 class="card-title"><b>Sender Detail</b></h2>
                                            </div>--}}

                                        {{--<div class="form-inline">
                                            <label for="inputEmail3" class="col-sm-2"> From City</label>
                                            <input type="text" name="name" placeholder="Name" class="form-control" >
                                            <label for="inputEmail3" class="col-sm-2"> From City</label>
                                            <input type="text" name="name" placeholder="Phone" class="form-control">

                                        </div>--}}


                                    </div>

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
