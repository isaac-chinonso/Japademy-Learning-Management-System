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
                                    <input type="number" class="form-control py-11 ps-40" name="phone" placeholder="Enter Phone">
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
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Eswatini">Eswatini</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Greece">Greece</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="North Korea">North Korea</option>
                                <option value="North Macedonia">North Macedonia</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestine State">Palestine State</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City">Vatican City</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
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
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i
                                    class="ph ph-lock"></i></span>
                        </div>
                        <span class="text-gray-900 text-15 mt-4">Must be at least 8 characters</span>
                    </div>
                    <div class="mb-24">
                        <label for="referral" class="form-label mb-8 h6">Referral Code (Optional)</label>
                        <div class="position-relative">
                            <input type="text" class="form-control py-11 ps-40" name="referral_code" placeholder="Enter Referral Code">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex">
                                <i class="ph ph-code"></i>
                            </span>
                        </div>
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