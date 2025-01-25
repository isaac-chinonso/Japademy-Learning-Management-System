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

                <h4>{{ Auth::user()->profile->first()->fname }} Welcome – let’s jump back in.</h4>
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
            <!-- Course Tab Start -->
            @include('include.success')
            @include('include.warning')
            @include('include.error')
            <div class="card">
                <div class="card-header border-bottom border-gray-100 flex-align gap-8">
                    <h5 class="mb-0">Scholarship Program Application Form</h5>
                    <button type="button" class="text-main-600 text-md d-flex" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-title="Scholarship Details">
                        <i class="ph-fill ph-question"></i>
                    </button>
                </div>
                <div class="card-body">
                    <form action="{{ route('scholarship.apply') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-20">
                            <!-- Personal Information Section -->
                            <div class="col-xxl-12 col-md-12 col-sm-12">
                                <h5 class="text-danger">Personal Information</h5>
                                <div class="row g-20">
                                    <div class="col-sm-6">
                                        <label class="h6 mb-8 fw-semibold font-heading">Firstname</label>
                                        <input type="text" class="form-control" name="fname" placeholder="Enter Firstname" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="h6 mb-8 fw-semibold font-heading">Lastname</label>
                                        <input type="text" class="form-control" name="lname" placeholder="Enter Lastname" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="h6 mb-8 fw-semibold font-heading">Email Address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="h6 mb-8 fw-semibold font-heading">Whatsapp Number</label>
                                        <input type="tel" class="form-control" name="whatsappnum" placeholder="Whatsapp Number With Country Code" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="h6 mb-8 fw-semibold font-heading">Country of Residence</label>
                                        <select class="form-control py-11 ps-40" name="country_of_residence" required>
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
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <!-- Education and Professional Background -->
                            <h5 class="text-danger">Education and Professional Background</h5>
                            <div class="row g-20">
                                <div class="col-sm-6">
                                    <label class="h6 mb-8 fw-semibold font-heading">Highest Level of Education</label>
                                    <select class="form-control" name="highest_education" required>
                                        <option selected disabled>Select Highest Level of Education</option>
                                        <option value="Secondary School">Secondary School</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                                        <option value="Master's Degree">Master's Degree</option>
                                        <option value="Doctorate">Doctorate</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="h6 mb-8 fw-semibold font-heading">What is your current profession?</label>
                                    <select class="form-control" name="current_profession" required>
                                        <option selected disabled>Select your current profession</option>
                                        <option value="Tech">Tech</option>
                                        <option value="Healthcare">Healthcare</option>
                                        <option value="Other Skilled Occupation">Other Skilled Occupation</option>
                                        <option value="Unskilled">Unskilled</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="h6 mb-8 fw-semibold font-heading">Years of Professional Experience</label>
                                    <select class="form-control" name="professional_experience" required>
                                        <option selected disabled>Select Years of Professional Experience</option>
                                        <option value="Less than 1 year">Less than 1 year</option>
                                        <option value="1-3 years">1-3 years</option>
                                        <option value="4-7 years">4-7 years</option>
                                        <option value="8+ years">8+ years</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="h6 mb-8 fw-semibold font-heading">What is your current specialty in tech?</label>
                                    <select class="form-control" name="specialty" required>
                                        <option selected disabled>Select your specialty</option>
                                        <option value="software-development">Software Development</option>
                                        <option value="data-analytics">Data and Analytics</option>
                                        <option value="cloud-computing">Cloud Computing</option>
                                        <option value="cybersecurity">Cybersecurity</option>
                                        <option value="product-management">Product and Project Management</option>
                                        <option value="ui-ux-design">UI/UX Design</option>
                                        <option value="ai-robotics">AI and Robotics</option>
                                        <option value="web-development">Web Development</option>
                                        <option value="blockchain-cryptocurrency">Blockchain and Cryptocurrency</option>
                                        <option value="it-support-networking">IT Support and Networking</option>
                                        <option value="digital-marketing-ecommerce">Digital Marketing and E-Commerce</option>
                                        <option value="healthtech">Healthtech</option>
                                        <option value="career-clarity">Career Clarity</option>
                                        <option value="digital-competency">Improve Digital Competency</option>
                                    </select>
                                </div>
                            </div>
                            <hr>

                            <!-- Career Goals and Motivation -->
                            <h5 class="text-danger">Career Goals and Motivation</h5>
                            <div class="row g-20">
                                <div class="col-md-12">
                                    <label class="h6 mb-8 fw-semibold font-heading">Motivation</label>
                                    <textarea class="form-control" name="motivation"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="h6 mb-8 fw-semibold font-heading">Tech Skills Impact</label>
                                    <textarea class="form-control" name="tech_skills_impact"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="h6 mb-8 fw-semibold font-heading">Career Goals</label>
                                    <textarea class="form-control" name="career_goals"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="h6 mb-8 fw-semibold font-heading">Reason for Applying</label>
                                    <textarea class="form-control" name="scholarship_reason"></textarea>
                                </div>
                            </div>
                            <hr>

                            <!-- Verification and Supporting Documents -->
                            <h5 class="text-danger">Verification and Supporting Documents</h5>
                            <div class="row g-20">
                                <div class="col-md-6">
                                    <label class="h6 mb-8 fw-semibold font-heading">Upload ID</label>
                                    <input type="file" class="form-control" name="idcard">
                                </div>
                                <div class="col-md-6">
                                    <label class="h6 mb-8 fw-semibold font-heading">Upload Resume</label>
                                    <input type="file" class="form-control" name="resume">
                                </div>
                                <div class="col-md-12">
                                    <label class="h6 mb-8 fw-semibold font-heading">Education Verification</label>
                                    <input type="file" class="form-control" name="education_verification">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex-align justify-content-end gap-8">
                                <button type="submit" class="btn btn-main rounded-pill py-9">Submit Scholarship Form</button>
                            </div>
                        </div>
                    </form>

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