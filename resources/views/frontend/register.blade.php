<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Register - JapaDemy</title>
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
            <img src="assets-user/images/thumbs/auth-img2.png" alt="">
        </div>
        <div class="auth-right py-40 px-24 flex-center flex-column">
            <div class="auth-right__inner mx-auto w-100">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <a href="{{ url('/admin/dashboard') }}" class="auth-right__logo">
                    <img src="assets-user/images/logo/logo1.png" alt="">
                </a>
                <h2 class="mb-8">Sign Up</h2>
                <p class="text-gray-600 text-15 mb-32">Join our community of learners and explore various courses</p>

                <form method="post" action="{{ url('/savelogin') }}">
                    @csrf
                    <div class="mb-24">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="username" class="form-label mb-8 h6"> Firstname</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control py-11 ps-40" name="fname" placeholder="Enter Firstname">
                                    <span
                                        class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                            class="ph ph-user"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label mb-8 h6"> Lastname</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control py-11 ps-40" name="lname" placeholder="Enter Lastname">
                                    <span
                                        class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                            class="ph ph-user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-24">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email" class="form-label mb-8 h6">Email </label>
                                <div class="position-relative">
                                    <input type="email" class="form-control py-11 ps-40" name="email"
                                        placeholder="Enter Email">
                                    <span
                                        class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                            class="ph ph-envelope"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label mb-8 h6"> Phone</label>
                                <div class="position-relative">
                                    <input type="phone" class="form-control py-11 ps-40" name="phone" placeholder="Enter Phone">
                                    <span
                                        class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                            class="ph ph-phone"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-24">
                        <label for="email" class="form-label mb-8 h6">Country of Residence </label>
                        <div class="position-relative">
                            <select class="form-control py-11 ps-40" name="address">
                                <option selected disabled>Select Country</option>
                                <option value="United State">United State</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Canada">Canada</option>
                            </select>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-flag"></i></span>
                        </div>
                    </div>
                    <div class="mb-24">
                        <label for="current-password" class="form-label mb-8 h6">New Password</label>
                        <div class="position-relative">
                            <input type="password" class="form-control py-11 ps-40" name="password"
                                placeholder="Enter Current Password">
                            <span
                                class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash"
                                id="#current-password"></span>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-lock"></i></span>
                        </div>
                        <span class="text-gray-900 text-15 mt-4">Must be at least 8 characters</span>
                    </div>
                    <button type="submit" class="btn btn-main rounded-pill w-100">Sign Up</button>
                    <p class="mt-32 text-gray-600 text-center">Already have an account?
                        <a href="{{ url('/login') }}" class="text-main-600 hover-text-decoration-underline"> Log In</a>
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