<!DOCTYPE html>
<html class="no-js" lang="ZXX">

<head>
  <!-- Meta Tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="robots" content="all" />
  <meta name="keywords"
    content="online learning, education, e-learning, courses, tutorials, educational resources, skill development, career enhancement" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets-main/images/favicon.svg" />

  <!-- Site Title -->
  <title>Japademy</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets-main/plugins/css/bootstrap.min.css" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="assets-main/plugins/css/animate.min.css" />
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="assets-main/plugins/css/owl.carousel.min.css" />
  <!-- Maginific Popup CSS -->
  <link rel="stylesheet" href="assets-main/plugins/css/maginific-popup.min.css" />
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="assets-main/plugins/css/nice-select.min.css" />
  <!-- Icofont -->
  <link rel="stylesheet" href="assets-main/plugins/css/icofont.css" />
  <!-- Uicons -->
  <link rel="stylesheet" href="assets-main/plugins/css/uicons.css" />
  <!-- Main CSS -->
  <link rel="stylesheet" href="assets-main/style.css" />
</head>

<body class="ep-magic-cursor">

  <!-- Start Cursor To Top  -->
  <div class="cursor"></div>
  <div class="cursor2"></div>
  <!-- End Cursor To Top -->

  <!-- Start Begin Magic Cursor -->
  <div id="magic-cursor">
    <div id="ball"></div>
  </div>
  <!-- End Begin Magic Cursor -->

  <!-- Start Back To Top  -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- End Back To Top -->

  <!-- Mobile Menu Modal -->
  <div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
    <div class="modal-dialog offcanvas-dialog">
      <div class="modal-content">
        <div class="modal-header offcanvas-header">
          <!-- offcanvas-logo-start -->
          <div class="offcanvas-logo">
            <a href="{{ url('/admin/dashboard') }}">
              <img src="assets-main/images/logo1.png" alt="logo" />
            </a>
          </div>
          <!-- offcanvas-logo-end -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fi fi-ss-cross"></i>
          </button>
        </div>
        <div class="mobile-menu-modal-main-body">
          <!-- offcanvas-menu start -->
          <nav id="offcanvas-menu" class="navigation offcanvas-menu">
            <ul id="nav mobile-nav" class="list-none offcanvas-men-list">
              <li class="active"><a href="{{ url('/') }}">Home </a></li>

              <li> <a href="{{ url('/') }}#about">About us </a></li>

              <li><a href="{{ url('/') }}#courses">Learn a Skill </a></li>

              <li><a href="{{ url('/') }}#testimonial">Land a Job </a></li>

              <li><a href="{{ url('/') }}#faq">Hire a Talent </a></li>
              <li>
                <a href="{{ url('/contact-us') }}"> Apply for Scholarship </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- End Mobile Menu Modal -->

  <!-- Start Header Area -->
  <header class="ep-header ep-header--style2 position-relative">
    <!-- Header Middle -->
    <div id="active-sticky" class="ep-header__middle ep-header__middle--style2">
      <div class="container ep-container">
        <div class="ep-header__inner ep-header__inner--style2">
          <div class="row align-items-center">
            <div class="col-lg-2 col-6">
              <div class="ep-logo">
                <a href="{{ url('/') }}">
                  <img src="assets-main/images/logo1.png" alt="logo" />
                </a>
              </div>
            </div>
            <div class="col-lg-10 col-6">
              <div class="ep-header__inner-right">
                <nav class="ep-header__navigation">
                  <ul class="ep-header__menu ep-header__menu--style2">
                    <li class="active"><a href="{{ url('/') }}">Home </a></li>

                    <li> <a href="{{ url('/') }}#about">About us </a></li>

                    <li><a href="{{ url('/') }}#courses">Learn a Skill </a></li>

                    <li><a href="{{ url('/') }}#testimonial">Land a Job </a></li>

                    <li><a href="{{ url('/') }}#faq">Hire a Talent </a></li>
                    <li>
                      <a href="{{ url('/contact-us') }}"> Apply for Scholarship </a>
                    </li>
                  </ul>
                </nav>
                <div class="ep-header__btn">
                  <a href="{{ url('/login') }}" class="ep-btn ep5-bg">Get Started Now <i class="fi fi-rs-arrow-small-right"></i>
                  </a>
                </div>
              </div>
              <!-- Mobile Menu Button -->
              <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal"
                data-bs-target="#offcanvas-modal">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </button>
              <!-- End Mobile Menu Button -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Area -->

  @yield('content')

  <!-- Start Footer Area -->
  <footer class="ep-footer position-relative">
    <div class="container ep-container">
      <div class="ep-footer__bottom">
        <div class="row">
          <div class="col-lg-4 col-12">
            <div class="ep-footer__copyright">
              <p>
                ©
                <a target="_blank" href="#">JapaDemy</a>
                2024 | All Rights Reserved
              </p>
            </div>
          </div>
          <div class="col-lg-8 col-12">
            <div class="ep-footer__bottom-link">
              <ul>
                <li>
                  <a href="#">Migration Hub</a>
                </li>
                <li>
                  <a href="#">Career Opportunities</a>
                </li>
                <li>
                  <a href="#">Courses</a>
                </li>
                <li>
                  <a href="{{ url('/news-and-updates') }}">Insights and Updates</a>
                </li>
                <li>
                  <a href="{{ url('/contact-us') }}">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ep-footer__pattern">
      <img src="assets-main/images/footer/footer-pattern.png" alt="footer-pattern" />
    </div>
  </footer>
  <!-- End Footer Area -->
  </div>
  </div>

  <!-- Jquery JS -->
  <script src="assets-main/plugins/js/jquery.min.js"></script>
  <script src="assets-main/plugins/js/jquery-migrate.js"></script>

  <!-- Bootstrap JS -->
  <script src="assets-main/plugins/js/bootstrap.min.js"></script>
  <!-- Gsap JS -->
  <script src="assets-main/plugins/js/gsap/gsap.js"></script>
  <script src="assets-main/plugins/js/gsap/gsap-scroll-to-plugin.js"></script>
  <script src="assets-main/plugins/js/gsap/gsap-scroll-smoother.js"></script>
  <script src="assets-main/plugins/js/gsap/gsap-scroll-trigger.js"></script>
  <script src="assets-main/plugins/js/gsap/gsap-split-text.js"></script>
  <!-- Wow JS -->
  <script src="assets-main/plugins/js/wow.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="assets-main/plugins/js/owl.carousel.min.js"></script>
  <!-- Magnific Popup JS -->
  <script src="assets-main/plugins/js/magnific-popup.min.js"></script>
  <!-- CounterUp  JS -->
  <script src="assets-main/plugins/js/jquery.counterup.min.js"></script>
  <script src="assets-main/plugins/js/waypoints.min.js"></script>
  <!-- Nice Select JS -->
  <script src="assets-main/plugins/js/nice-select.min.js"></script>
  <!-- Cursor JS -->
  <script src="assets-main/plugins/js/ep-cursor.js"></script>
  <!-- Back To Top JS -->
  <script src="assets-main/plugins/js/backToTop.js"></script>
  <!-- Main JS -->
  <script src="assets-main/plugins/js/active.js"></script>
</body>

</html>