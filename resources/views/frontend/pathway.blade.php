<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Pathway - JapaDemy</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets-user/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets-user/css/bootstrap.min.css">
    <!-- file upload -->
    <link rel="stylesheet" href="../assets-user/css/file-upload.css">
    <!-- file upload -->
    <link rel="stylesheet" href="../assets-user/css/plyr.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
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

        <a href="index.html" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
            <img src="../assets-user/images/logo/logo1.png" alt="Logo">
        </a>

        <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
            <div class="p-20 pt-10">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu__item">
                        <a href="{{ url('/') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-squares-four"></i></span>
                            <span class="text">Main Home</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="{{ url('logout') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-gear"></i></span>
                            <span class="text">Logout</span>
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

                <h4>{{ Auth::user()->profile->first()->lname }} Welcome – let’s jump back in.</h4>
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
                                        <h4 class="mb-0">{{ Auth::user()->profile->first()->fname }} {{ Auth::user()->profile->first()->lname }}</h4>
                                        <p class="fw-medium text-13 text-gray-200">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
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
        <div class="dashboard-body">

            <div class="breadcrumb-with-buttons mb-24 flex-between flex-wrap gap-8">
                <!-- Breadcrumb Start -->
                <div class="breadcrumb mb-24">
                    <ul class="flex-align gap-4">
                        <li><a href="index.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a>
                        </li>
                        <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                        <li><span class="text-main-600 fw-normal text-15">Welcome</span></li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->
            </div>
            <!-- Create Course Step List Start -->
            <ul class="step-list mb-24">
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6 ctive">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Choose a Pathway
                    <span class="line position-relative"></span>
                </li>
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6  ">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Apply for a scholarship or Take a Skill Assessment
                    <span class="line position-relative"></span>
                </li>
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6  ">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Complete Your Enrollment.
                    <span class="line position-relative"></span>
                </li>
            </ul>
            <!-- Create Course Step List End -->

            <!-- Course Tab Start -->
            <div class="card h-100">
                <div class="card-body grettings-box-two position-relative z-1 p-0">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="grettings-box-two__content">
                                <h2 class="fw-medium mb-0 flex-align gap-10">What’s Next on Your Journey <img src="assets-user/images/icons/wave-hand.png" alt=""> </h2>
                                <p class="text-15 text-gray-400">Embark on your path to success with tailored options designed to help you achieve your goals. Whether you're looking to understand your current skill level or access opportunities to learn tuition-free, we’ve got you covered:</p>
                                <a href="{{ url('/choose-a-pathway') }}" class="btn btn-main rounded-pill mt-32">Plan My Next Step</a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-md-block d-none mt-auto">
                            <img src="assets-user/images/thumbs/gretting-thumb.png" alt="">
                        </div>
                    </div>
                    <img src="assets-user/images/bg/star-shape.png" class="position-absolute start-0 top-0 w-100 h-100 z-n1 object-fit-contain" alt="">
                </div>
            </div>
            <!-- Course Tab End -->
        </div>
    </div>

    <!-- Jquery js -->
    <script src="assets-user/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets-user/js/boostrap.bundle.min.js"></script>
    <!-- Phosphor Js -->
    <script src="assets-user/js/phosphor-icon.js"></script>
    <!-- file upload -->
    <script src="assets-user/js/file-upload.js"></script>
    <!-- file upload -->
    <script src="assets-user/js/plyr.js"></script>
    <!-- dataTables -->
    <script src="../../cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="assets-user/js/full-calendar.js"></script>
    <!-- jQuery UI -->
    <script src="assets-user/js/jquery-ui.js"></script>
    <!-- jQuery UI -->
    <script src="assets-user/js/editor-quill.js"></script>
    <!-- apex charts -->
    <script src="assets-user/js/apexcharts.min.js"></script>
    <!-- jvectormap Js -->
    <script src="assets-user/js/jquery-jvectormap-2.0.5.min.js"></script>
    <!-- jvectormap world Js -->
    <script src="assets-user/js/jquery-jvectormap-world-mill-en.js"></script>

    <!-- main js -->
    <script src="assets-user/js/main.js"></script>

</body>


</html>