<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/adminuser.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Administration
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('admin')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New User and Rights</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('change')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Setup
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('listing.terminal')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Terminal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('cpp')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>CPP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('city')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>City</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('train')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Train</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('category')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('good')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Good Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('packing')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Packing Type</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('customer')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('booking status')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booking Status</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Transaction
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('booking')}}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('dispatch')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dispatch</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('inward')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inward</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('delivery')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Delivery</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                   Booking Reports
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="advanced.html" class="nav-link">
                                        <i class="far fa- nav-icon"></i>
                                        <p> Booking Detail  No Wise</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="advanced.html" class="nav-link">
                                        <i class="far fa- nav-icon"></i>
                                        <p> Booking Detail  User Wise</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="advanced.html" class="nav-link">
                                        <i class="far fa- nav-icon"></i>
                                        <p> Booking Detail  City Wise</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="advanced.html" class="nav-link">
                                        <i class="far fa- nav-icon"></i>
                                        <p> Booking Detail  Date Wise</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="advanced.html" class="nav-link">
                                        <i class="far fa- nav-icon"></i>
                                        <p>Panding Booking Dispatch</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="advanced.html" class="nav-link">
                                        <i class="far fa- nav-icon"></i>
                                        <p>Un Deliver Bilities</p>
                                    </a>
                                </li>


                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dispatch</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Delivery Reports
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="advanced.html" class="nav-link">
                                        <i class="far fa- nav-icon"></i>
                                        <p> Delivery Report bill  No Wise</p>
                                    </a>
                                </li>



                            </ul>
                        </li>



                    </ul>
                </li>

                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Exit
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Window
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
