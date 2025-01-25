@extends('layout.master')
@section('title')
Contact || JapaDemy
@endsection
@section('content')

<main>
    <!-- Start Breadcrumbs Area -->
    <div class="ep-breadcrumbs breadcrumbs-bg background-image" style="background-image: url('assets-main/images/breadcrumbs-bg.png')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="ep-breadcrumbs__content">
                        <h3 class="ep-breadcrumbs__title">Contact</h3>
                        <ul class="ep-breadcrumbs__menu">
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <i class="fi-bs-angle-right"></i>
                            </li>
                            <li class="active">
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start Contact Area -->
    <section class="ep-contact section-gap position-relative pb-0">
        <div class="container ep-container">
            <div class="row">
                <div class="col-lg-12 col-xl-5 col-12">
                    <div class="ep-contact__info">
                        <div class="ep-contact__info-head">
                            <span>Contact us</span>
                            <h3 class="ep-split-text left">
                                Unlocking Potential the an Through Education
                            </h3>
                        </div>
                        <!-- Single Info -->
                        <div class="ep-contact__info-item">
                            <div class="ep-contact__info-icon">
                                <i class="fi-ss-marker"></i>
                            </div>
                            <div class="ep-contact__info-text">
                                <h6>Address</h6>
                                <p>
                                    Dhaka 102, 8000 sent behaibior utl <br />1216, road 45 house of street
                                </p>
                            </div>
                        </div>
                        <!-- Single Info -->
                        <div class="ep-contact__info-item">
                            <div class="ep-contact__info-icon">
                                <i class="fi fi-sr-phone-call"></i>
                            </div>
                            <div class="ep-contact__info-text">
                                <h6>Lets Talk us</h6>
                                <p>
                                    Phone number:
                                    <a href="tel:+32566 - 800 - 890">
                                        +32566 - 800 - 890</a>
                                    <br /> Fax: 1234 -58963 - 007
                                </p>
                            </div>
                        </div>
                        <!-- Single Info -->
                        <div class="ep-contact__info-item">
                            <div class="ep-contact__info-icon">
                                <i class="fi fi-sr-envelope"></i>
                            </div>
                            <div class="ep-contact__info-text">
                                <h6>Send us email</h6>
                                <a href="mailto:demo0023yourmailhotmail.com">
                                    demo0023yourmailhotmail.com
                                </a>
                                <br />
                                <a href="mailto:demo23yourmail.com">demo23yourmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-7 col-12">
                    <div class="ep-contact__form">
                        <h3 class="ep-contact__form-title ep-split-text left">
                            Get in Touch With Us
                        </h3>
                        <form action="https://edupath-template.vercel.app/edupath/assets-main/mail/mail.php" method="post">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" id="name" name="your-name" placeholder="Name " required />
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" id="email" name="your-email" placeholder="Email " required />
                            </div>
                            <div class="form-group">
                                <label>Your Number</label>
                                <input type="tel" id="phone" name="your-number" placeholder="Phone Number" required />
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" id="message" placeholder="Message here.." required></textarea>
                            </div>
                            <button type="submit" class="ep-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="ep-contact__map">
            <div class="gmap_canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7298.959613692403!2d90.36501104141328!3d23.83709017812546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c17cf9e11737%3A0x44c49aa5dd7c3f00!2sMirpur%20DOHS%20Cultural%20Center!5e0!3m2!1sen!2sbd!4v1721998237394!5m2!1sen!2sbd"
                    width="1920" height="576" style="border: 0"></iframe>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
</main>

@endsection