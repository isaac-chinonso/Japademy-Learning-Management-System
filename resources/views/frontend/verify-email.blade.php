                                    <span
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
                                                        <a href="{{ url('/') }}" class="auth-right__logo">
                                                            <img src="assets-user/images/logo/logo1.png" alt="">
                                                        </a>
                                                        <h2 class="mb-8">Verify your mail</h2>

                                                        @if (Auth::check())
                                                        <p class="text-gray-600 text-15 mb-32">
                                                            Account activation link sent to your email address:
                                                            <span class="fw-medium">{{ Auth::user()->email }}</span>
                                                            Please follow the link inside to continue.
                                                        </p>

                                                        <form method="POST" action="{{ route('resend.activation.email') }}">
                                                            @csrf
                                                            <input type="hidden" name="email" value="{{ Auth::user()->email }}"> <!-- Hidden email field -->
                                                            <button type="submit" class="btn btn-main rounded-pill w-100">Resend Activation Email</button>
                                                        </form>

                                                        @else
                                                        <p class="text-gray-600 text-15 mb-32">
                                                            You are not logged in. Please log in to access your account.
                                                        </p>
                                                        <a href="{{ url('/login') }}" class="btn btn-main rounded-pill w-100">Go to Login</a>
                                                        @endif
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