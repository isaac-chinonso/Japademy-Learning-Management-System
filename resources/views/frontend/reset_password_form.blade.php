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
            <img src="assets-user/images/thumbs/auth-img3.png" alt="">
        </div>
        <div class="auth-right py-40 px-24 flex-center flex-column">
            <div class="auth-right__inner mx-auto w-100">
                <a href="{{ url('/') }}" class="auth-right__logo">
                    <img src="assets-user/images/logo/logo1.png" alt="">
                </a>
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <h2 class="mb-8">Reset Password&#128075;</h2>
                <p class="text-gray-600 text-15 mb-32">Fill in Details below to proceed with password reset.</p>

                <form method="POST" action="{{ route('forget.password.post') }}">
                    @csrf
                    <div class="mb-24">
                        <label for="email" class="form-label mb-8 h6">Email </label>
                        <div class="position-relative">
                            <input type="email" class="form-control py-11 ps-40" name="email" placeholder="Type your email address">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-envelope"></i></span>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-24">
                        <label class="form-label mb-8 h6">New Password </label>
                        <div class="position-relative">
                            <input type="password" class="form-control py-11 ps-40" name="password" placeholder="Enter new password">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-lock"></i></span>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-24">
                        <label class="form-label mb-8 h6">Confirm New Password </label>
                        <div class="position-relative">
                            <input type="password" class="form-control py-11 ps-40" name="password_confirmation" placeholder="Confirm new password">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-lock"></i></span>
                            @if ($errors->has('password_confirmation'))
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-main rounded-pill w-100">Reset Password</button>
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