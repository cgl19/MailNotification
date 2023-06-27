<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Chat | Shreyu - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">

    <!-- plugins -->
    <link href="/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />



</head>

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->


        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="/images/logo-sm.png" alt="" height="24">
                    <!-- <span class="logo-lg-text-light">Shreyu</span> -->
                </span>
                <span class="logo-lg">
                    <img src="/images/logo-dark.png" alt="" height="24">
                    <!-- <span class="logo-lg-text-light">S</span> -->
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="/images/logo-sm.png" alt="" height="24">
                </span>
                <span class="logo-lg">
                    <img src="/images/logo-light.png" alt="" height="24">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile">
                    <i data-feather="menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

            <li class="dropdown d-none d-xl-block">

                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-bag me-1"></i><span>New Projects</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-user-plus me-1"></i><span>Create Users</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-chart-pie me-1"></i><span>Revenue Report</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-cog me-1"></i><span>Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="uil uil-question-circle me-1"></i><span>Help & Support</span>
                    </a>

                </div>
            </li>

        </ul>
        <div class="clearfix"></div>
    </div>
    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="h-100" data-simplebar>

            <!-- User box -->
            <div class="user-box text-center">
                <img src="/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">Nik Patel</a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <a href="pages-profile.html" class="dropdown-item notify-item">
                            <i data-feather="user" class="icon-dual icon-xs me-1"></i><span>My Account</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i data-feather="settings" class="icon-dual icon-xs me-1"></i><span>Settings</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i data-feather="help-circle" class="icon-dual icon-xs me-1"></i><span>Support</span>
                        </a>
                        <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                            <i data-feather="lock" class="icon-dual icon-xs me-1"></i><span>Lock Screen</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                        </a>

                    </div>
                </div>
                <p class="text-muted">Admin Head</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <!-- <li class="menu-title">Navigation</li> -->

                    <li>
                        <a href="#sidebarDashboard" data-bs-toggle="collapse">
                            <span class="badge bg-success float-end">02</span>
                            <i data-feather="home"></i>
                            <span> Dashboards </span>
                            <!-- <span class="menu-arrow"></span> -->
                        </a>
                        <div class="collapse" id="sidebarDashboard">
                            <ul class="nav-second-level">
                                <li><a href="index.html">Ecommerce</a></li>
                                <li><a href="dashboard-analytics.html">Analytics</a></li>
                            </ul>
                        </div>
                    </li>






                    <li>
                        <a href="#sidebarProjects" data-bs-toggle="collapse">
                            <i data-feather="user"></i>
                            <span> Leads </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarProjects">
                            <ul class="nav-second-level">
                                <li><a href="/createlead">Create Lead</a></li>
                                <li><a href="/getleads"> View Lead</a></li>

                            </ul>
                        </div>
                    </li>


            </div>

            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Compnay</th>
                        <th>Organization</th>
                        <th>Services</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($detail as $detail)
                    <tr>
                        <td>{{$detail->firstname}}</td>
                        <td>{{$detail->lastname}}</td>
                        <td>{{$detail->email}}</td>
                        <td>{{$detail->phone}}</td>
                        <td>{{$detail->company}}</td>
                        <td>{{$detail->title}}</td>
                        <td>{{$detail->consulting}}</td>
                        <td>{{$detail->message}}</td>

                    </tr>
                    @endforeach
                    </tfoot>
            </table>

            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="/js/app.min.js"></script>

</body>

</html>