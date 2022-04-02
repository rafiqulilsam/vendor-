<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <h1><a href="index.html">Easy <span>Admin</span></a></h1>
    </div>
    <div class="logo-icon text-center">
        <a href="index.html"><i class="lnr lnr-home"></i> </a>
    </div>

    <!--logo and iconic logo end-->
    <div class="left-side-inner">

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="active"><a href="index.html"><i class="lnr lnr-power-switch"></i><span>Visitor</span></a>
            </li>
            <li class="menu-list">
                <a href="#"><i class="lnr lnr-cog"></i>
                    <span>User Info </span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ route('admin.user.create') }}">Add User</a> </li>
                    <li><a href="{{ route('admin.user.index') }}">Manage User</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="lnr lnr-cog"></i>
                    <span>Unit info </span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ route('admin.unit.create') }}">Add Unit</a> </li>
                    <li><a href="{{ route('admin.unit.index') }}">Manage Unit</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="lnr lnr-cog"></i>
                    <span>Werehouse info</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ route('admin.warehouse.create') }}">Add Warehouse</a> </li>
                    <li><a href="{{ route('admin.warehouse.index') }}">Manage Warehouse</a></li>
                </ul>
            </li>



            <li class="menu-list">
                <a href="#"><i class="lnr lnr-cog"></i>
                    <span>Category info</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ route('admin.category.create') }}">Add Category</a> </li>
                    <li><a href="{{ route('admin.category.index') }}">Manage Category</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="lnr lnr-cog"></i>
                    <span>Brand info</span></a>
                <ul class="sub-menu-list">
                    <li><a href="grids.html">Add Brand </a> </li>
                    <li><a href="widgets.html">Manage Brand</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="lnr lnr-cog"></i>
                    <span>Product info</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ route('admin.product.create')}}">Add Producte</a> </li>
                    <li><a href="{{ route('admin.product.index')}}">Manage Product</a></li>
                </ul>
            </li>
            <li class="menu-list">
                <a href="#"><i class="lnr lnr-cog"></i>
                    <span>Purchase info </span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{ route('admin.purchase.create')}}">Add Purchase</a> </li>
                    <li><a href="{{ route('admin.purchase.index')}}">Manage Purchase</a></li>
                </ul>
            </li>



            {{-- <li class="menu-list">
                <a href="#"><i class="lnr lnr-cog"></i>
                    <span>POSS INFO </span></a>
                <ul class="sub-menu-list">
                    <li class="nav-item has-treeview">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li><a href="">Product</a></li>

                    {{-- <li class="nav-item has-treeview">
                        <a href="{{ route('possproducts.index') }}" class="nav-link {{ activeSegment('products') }}">
                            <i class="nav-icon fas fa-th-large"></i>
                            <p>eeeeeeeProducts</p>
                        </a>
                    </li> --}}
            <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-cart-plus"></i>
                    <p>Open POS</p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="">
                    <i class="nav-icon fas fa-cart-plus"></i>
                    <p>Orders</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="}" class="nav-link ">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Customers</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="" class="nav-link ">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>Settings</p>
                </a>
            </li>
            {{-- <li class="nav-item">
                        <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </a>
                    </li> --}}
        </ul>
        {{-- </li> --}} --}}



        <li class="menu-list">
            <a href="#"><i class="lnr lnr-cog"></i>
                <span>Visitor</span></a>
        </li>

        <li class="menu-list"><a href="#"><i class="lnr lnr-book">
                </i> <span>Login</span></a>
            <ul class="sub-menu-list">
                <li><a href="sign-in.html">Sign In</a> </li>
                <li><a href="sign-up.html">Sign Up</a></li>
                <li><a href="blank_page.html">Blank Page</a></li>
            </ul>
        </li>
        {{-- <li class="nav-item">
                        <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </a>
                    </li> --}}
        </ul>
        <!--sidebar nav end-->
    </div>
</div>
<!-- left side end-->

<!-- main content start-->

<div class="main-content">
    <!-- header-starts -->
    <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--notification menu start -->
        <div class="menu-right">
            <div class="user-panel-top">
                <div class="profile_details_left">
                    <ul class="nofitications-dropdown">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-envelope"></i><span class="badge">3</span></a>

                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new messages</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all messages</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="login_box" id="loginContainer">
                            <div class="search-box">
                                <div id="sb-search" class="sb-search">
                                    <form>
                                        <input class="sb-search-input" placeholder="Enter your search term..."
                                            type="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search"> </span>
                                    </form>
                                </div>
                            </div>
                            <!-- search-scripts -->
                            <script src="{{ asset('/') }}admin/js/classie.js"></script>
                            <script src="{{ asset('/') }}admin/js/uisearch.js"></script>
                            <script>
                                new UISearch(document.getElementById('sb-search'));
                            </script>
                            <!-- //search-scripts -->
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-bell"></i><span class="badge blue">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new notification</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all notification</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 8 pending task</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Database update</span><span
                                                class="percentage">40%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar yellow" style="width:40%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Dashboard done</span><span
                                                class="percentage">90%</span>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="progress progress-striped active">
                                            <div class="bar green" style="width:90%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Mobile App</span><span
                                                class="percentage">33%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar red" style="width: 33%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Issues fixed</span><span
                                                class="percentage">80%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar  blue" style="width: 80%;"></div>
                                        </div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all pending task</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span style="background:url(images/1.jpg) no-repeat center"> </span>
                                    <div class="user-name">
                                        <p>Michael<span>Administrator</span></p>
                                    </div>
                                    <i class="lnr lnr-chevron-down"></i>
                                    <i class="lnr lnr-chevron-up"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li>
                                <li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!--notification menu end -->
    </div>
    <!-- //header-ends -->
    <div id="page-wrapper">
        <div class="graphs">
