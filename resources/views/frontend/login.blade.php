<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Login - JapaDemy</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets-user/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets-user/css/bootstrap.min.css">
    <!-- file upload -->
    <link rel="stylesheet" href="assets-user/css/file-upload.css">
    <!-- file upload -->
    <link rel="stylesheet" href="assets-user/css/plyr.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="assets-user/css/full-calendar.css">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="assets-user/css/jquery-ui.css">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="assets-user/css/editor-quill.css">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="assets-user/css/apexcharts.css">
    <!-- calendar Css -->
    <link rel="stylesheet" href="assets-user/css/calendar.css">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="assets-user/css/jquery-jvectormap-2.0.5.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets-user/css/main.css">
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

    <section class="auth d-flex">
        <div class="auth-left bg-main-50 flex-center p-24">
            <img src="assets-user/images/thumbs/auth-img1.png" alt="">
        </div>
        <div class="auth-right py-40 px-24 flex-center flex-column">
            <div class="auth-right__inner mx-auto w-100">
                <a href="{{ url('/admin/dashboard') }}" class="auth-right__logo">
                    <img src="assets-user/images/logo/logo1.png" alt="">
                </a>
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <h2 class="mb-8">Welcome Back! &#128075;</h2>
                <p class="text-gray-600 text-15 mb-32">Please sign in to our community of learners and explore various courses</p>

                <form method="post" action="{{ url('/sigin') }}">
                    @csrf
                    <div class="mb-24">
                        <label for="fname" class="form-label mb-8 h6">Email Address</label>
                        <div class="position-relative">
                            <input type="text" class="form-control py-11 ps-40" name="email"
                                placeholder="Enter Email">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-envelope"></i></span>
                        </div>
                    </div>
                    <div class="mb-24">
                        <label for="current-password" class="form-label mb-8 h6">Current Password</label>
                        <div class="position-relative">
                            <input type="password" class="form-control py-11 ps-40" name="password"
                                placeholder="Enter Current Password">
                            <span
                                class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash"
                                id="#current-password"></span>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-lock"></i></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-main rounded-pill w-100">Sign In</button>
                    <p class="mt-32 text-gray-600 text-center">New on our platform?
                        <a href="{{ url('/register') }}" class="text-main-600 hover-text-decoration-underline">Create an
                            account</a>
                    </p>
                </form>
            </div>
        </div>
    </section>

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