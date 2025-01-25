<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Admin Dashboard - JapaDemy</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets-user/images/logo/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- file upload -->
    <link rel="stylesheet" href="../assets-user/css/file-upload.css">
    <!-- file upload -->
    <link rel="stylesheet" href="../assets-user/css/plyr.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="../assets-user/css/full-calendar.css">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="../assets-user/css/jquery-ui.css">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="../assets-user/css/editor-quill.css">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="../assets-user/css/apexcharts.css">
    <!-- calendar Css -->
    <link rel="stylesheet" href="../assets-user/css/calendar.css">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="../assets-user/css/jquery-jvectormap-2.0.5.css">
    <!-- Main css -->
    <link rel="stylesheet" href="../assets-user/css/main.css">
    <link href="../assets-user/tables/css/datatable/datatables.bootstrap4.min.css" rel="stylesheet">
    <link href="../assets-user/tables/css/style.css" rel="stylesheet">
</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ============================ Sidebar Start ============================ -->

    <aside class="sidebar">
        <!-- sidebar close btn -->
        <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i
                class="ph ph-x"></i></button>
        <!-- sidebar close btn -->

        <a href="{{ url('/') }}" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
            <img src="../assets-user/images/logo/logo1.png" alt="Logo">
        </a>

        <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
            <div class="p-20 pt-10">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu__item">
                        <a href="{{ url('/admin/dashboard') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-squares-four"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item has-dropdown">
                        <a href="javascript:void(0)" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-file"></i></span>
                            <span class="text">Blog</span>
                        </a>
                        <!-- Submenu start -->
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu__item">
                                <a href="{{ url('/admin/blog-category') }}" class="sidebar-submenu__link"> Category </a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="{{ url('/admin/blog') }}" class="sidebar-submenu__link"> Blog Post</a>
                            </li>
                        </ul>
                        <!-- Submenu End -->
                    </li>
                    <li class="sidebar-menu__item has-dropdown">
                        <a href="javascript:void(0)" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-graduation-cap"></i></span>
                            <span class="text">Courses</span>
                        </a>
                        <!-- Submenu start -->
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu__item">
                                <a href="{{ url('/admin/category') }}" class="sidebar-submenu__link"> Category </a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="{{ url('/admin/courses') }}" class="sidebar-submenu__link"> Courses </a>
                            </li>
                        </ul>
                        <!-- Submenu End -->
                    </li>
                    <li class="sidebar-menu__item has-dropdown">
                        <a href="javascript:void(0)" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-clipboard-text"></i></span>
                            <span class="text">Skill Assessments</span>
                        </a>
                        <!-- Submenu start -->
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu__item">
                                <a href="{{ url('/admin/skill-assessment') }}" class="sidebar-submenu__link"> Questions </a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="{{ url('/admin/skill-assessment-score') }}" class="sidebar-submenu__link">User Response </a>
                            </li>
                        </ul>
                        <!-- Submenu End -->
                    </li>
                    <li class="sidebar-menu__item has-dropdown">
                        <a href="javascript:void(0)" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-clipboard-text"></i></span>
                            <span class="text">Quiz</span>
                        </a>
                        <!-- Submenu start -->
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu__item">
                                <a href="{{ url('/admin/quiz') }}" class="sidebar-submenu__link"> Questions </a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <a href="{{ url('/admin/quiz-score') }}" class="sidebar-submenu__link">User Response </a>
                            </li>
                        </ul>
                        <!-- Submenu End -->
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="{{ url('/admin/orders') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-shopping-cart"></i></span>
                            <span class="text">Orders</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="{{ url('/admin/resources') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-bookmarks"></i></span>
                            <span class="text">Resources</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="{{ url('/admin/reviews') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-ticket"></i></span>
                            <span class="text">Support Tickets</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="{{ url('/admin/members') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-users-three"></i></span>
                            <span class="text">Members</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="{{ url('/admin/affiliate') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-users-three"></i></span>
                            <span class="text">Affiliates</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </aside>
    <!-- ============================ Sidebar End  ============================ -->

    <div class="dashboard-main-wrapper">
        <div class="top-navbar flex-between gap-16">

            <div class="flex-align gap-16">
                <!-- Toggle Button Start -->
                <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i
                        class="ph ph-list"></i></button>
                <!-- Toggle Button End -->

                <h4>Admin Dashboard – let’s jump back in.</h4>
            </div>

            <div class="flex-align gap-16">
                <!-- User Profile Start -->
                <div class="dropdown">
                    <button class="users arrow-down-icon border border-gray-200 rounded-pill p-4 d-inline-block pe-40 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="position-relative">
                            <img src="../assets-user/images/thumbs/user-img.jpg" alt="Image" class="h-32 w-32 rounded-circle">
                            <span
                                class="activation-badge w-8 h-8 position-absolute inset-block-end-0 inset-inline-end-0"></span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                        <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                            <div class="card-body">
                                <div class="flex-align gap-8 mb-20 pb-20 border-bottom border-gray-100">
                                    <img src="../assets-user/images/thumbs/user-img.jpg" alt="" class="w-54 h-54 rounded-circle">
                                    <div class="">
                                        <h4 class="mb-0">{{ Auth::user()->profile->first()->lname }} {{ Auth::user()->profile->first()->fname }}</h4>
                                        <p class="fw-medium text-13 text-gray-200">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
                                    <li class="mb-4">
                                        <a href="{{ url('/admin/settings') }}" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-gear"></i></span>
                                            <span class="text">Account Settings</span>
                                        </a>
                                    </li>
                                    <li class="pt-8 border-top border-gray-100">
                                        <a href="{{ url('logout') }}" class="py-12 text-15 px-20 hover-bg-danger-50 text-gray-300 hover-text-danger-600 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-danger-600 d-flex"><i
                                                    class="ph ph-sign-out"></i></span>
                                            <span class="text">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Profile Start -->

            </div>
        </div>

        @yield('content')
        <div class="dashboard-footer">
            <div class="flex-between flex-wrap gap-16">
                <p class="text-gray-300 text-13 fw-normal"> &copy; Copyright Japademy 2024, All Right Reserverd</p>

            </div>
        </div>
    </div>

    <!-- Jquery js -->
    <script src="../assets-user/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <script src="../assets-user/tables/js/common.min.js"></script>
    <script src="../assets-user/tables/js/modernizr-3.6.0.min.js"></script>
    <script src="../assets-user/tables/js/custom.min.js"></script>
    <script src="../assets-user/tables/js/jquery.datatables.min.js"></script>
    <script src="../assets-user/tables/js/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../assets-user/tables/js/datatable-init/datatable-basic.min.js"></script>


    <!-- Phosphor Js -->
    <script src="../assets-user/js/phosphor-icon.js"></script>
    <!-- file upload -->
    <script src="../assets-user/js/file-upload.js"></script>
    <!-- file upload -->
    <script src="../assets-user/js/plyr.js"></script>
    <!-- full calendar -->
    <script src="../assets-user/js/full-calendar.js"></script>
    <!-- jQuery UI -->
    <script src="../assets-user/js/jquery-ui.js"></script>
    <!-- jQuery UI -->
    <script src="../assets-user/js/editor-quill.js"></script>
    <!-- apex charts -->
    <script src="../assets-user/js/apexcharts.min.js"></script>
    <!-- jvectormap Js -->
    <script src="../assets-user/js/jquery-jvectormap-2.0.5.min.js"></script>
    <!-- jvectormap world Js -->
    <script src="../assets-user/js/jquery-jvectormap-world-mill-en.js"></script>

    <!-- main js -->
    <script src="../assets-user/js/main.js"></script>
    <script>
        $(function() {
            $("#addMore").click(function(e) {
                e.preventDefault();
                $("#fieldList").append("<hr><div class='row'>");
                $("#fieldList").append("<div class='col-md-12'><label class='form-label'>Question <span class='text-danger'>*</span></label><textarea class='form-control' name='question[]' placeholder='Enter Question'></textarea></div>");
                $("#fieldList").append("<div class='col-md-5'><label class='form-label'>Option A <span class='text-danger'>*</span></label><input type='text' class='form-control' name='option1[]' placeholder='Enter Option A'></div>");
                $("#fieldList").append("<div class='col-md-1'><label class='form-label'>Score <span class='text-danger'>*</span></label><input type='text' class='form-control' name='scorepoint1[]'></div>");
                $("#fieldList").append("<div class='col-md-5'><label class='form-label'>Option B <span class='text-danger'>*</span></label><input type='text' class='form-control' name='option2[]' placeholder='Enter Option B'></div>");
                $("#fieldList").append("<div class='col-md-1'><label class='form-label'>Score<span class='text-danger'>*</span></label><input type='text' class='form-control' name='scorepoint2[]'></div>");
                $("#fieldList").append("<div class='col-md-5'><label class='form-label'>Option C <span class='text-danger'>*</span></label><input type='text' class='form-control' name='option3[]' placeholder='Enter Option C'></div>");
                $("#fieldList").append("<div class='col-md-1'><label class='form-label'>Score <span class='text-danger'>*</span></label><input type='text' class='form-control' name='scorepoint3[]'></div>");
                $("#fieldList").append("<div class='col-md-5'><label class='form-label'>Option D <span class='text-danger'>*</span></label><input type='text' class='form-control' name='option4[]' placeholder='Enter Option D'></div>");
                $("#fieldList").append("<div class='col-md-1'><label class='form-label'>Score <span class='text-danger'>*</span></label><input type='text' class='form-control' name='scorepoint4[]'></div>");
                $("#fieldList").append("<div class='col-md-5'><label class='form-label'>Option E <span class='text-danger'>*</span></label><input type='text' class='form-control' name='option5[]' placeholder='Enter Option E'></div>");
                $("#fieldList").append("<div class='col-md-1'><label class='form-label'>Score<span class='text-danger'>*</span></label><input type='text' class='form-control' name='scorepoint5[]'></div>");
                $("#fieldList").append("</div>");
            });
        });
    </script>


</body>


</html>