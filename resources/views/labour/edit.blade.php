<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobya - Responsive Job Board HTML Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="/css/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="/css/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="/css/selectize.css" />

    <link rel="stylesheet" type="text/css" href="/css/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Navigation Bar-->
<header id="topnav" class="defaultscroll scroll-active">
    <!-- Tagline STart -->
    <div class="tagline">
        <div class="container">
            <div class="float-left">
                <div class="phone">
                    <i class="mdi mdi-phone-classic"></i> +1 800 123 45 67
                </div>
                <div class="email">
                    <a href="#">
                        <i class="mdi mdi-email"></i> Support@mail.com
                    </a>
                </div>
            </div>
            <div class="float-right">
                <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="mdi mdi-account mr-2"></i>Benny Simpson</a></li>
                    <li class="list-inline-item">
                        <select id="select-lang" class="demo-default">
                            <option value="">Language</option>
                            <option value="4">English</option>
                            <option value="1">Spanish</option>
                            <option value="3">French</option>
                            <option value="5">Hindi</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Tagline End -->

    <!-- Menu Start -->
    <div class="container">
        <!-- Logo container-->
        <div>
            <a href="index.html" class="logo">
                <img src="/images/logo-light.png" alt="" class="logo-light" height="18" />
                <img src="/images/logo-dark.png" alt="" class="logo-dark" height="18" />
            </a>
        </div>
        <div class="buy-button">
            <a href="post-a-job.html" class="btn btn-primary"><i class="mdi mdi-cloud-upload"></i> Post a Job</a>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="index.html">Home</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Jobs</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="job-list.html">Job List</a></li>
                        <li><a href="job-grid.html">Job Grid</a></li>
                        <li><a href="job-details.html">Job Details</a></li>
                        <li><a href="job-details-2.html">Job Details-2</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="faq.html">Faqs</a></li>
                        <li><a href="pricing.html">Pricing plans</a></li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Candidates</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="candidates-listing.html">Candidates Listing</a></li>
                                <li><a href="candidates-profile.html">Candidates Profile</a></li>
                                <li><a href="create-resume.html">Create Resume</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Blog</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="blog-grid.html">Blogs</a></li>
                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> Employers</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="employers-list.html">Employers List</a></li>
                                <li><a href="company-detail.html">Company Detail</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="javascript:void(0)"> User Pages</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li><a href="recovery_passward.html">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li><a href="components.html"> Components</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
    <!--end end-->
</header><!--end header-->
<!-- Navbar End -->

<!-- Start home -->
<section class="bg-half page-next-level">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center text-white">
                    <h4 class="text-uppercase title mb-4">Create Resume</h4>
                    <ul class="page-next d-inline-block mb-0">
                        <li><a href="index.html" class="text-uppercase font-weight-bold">Home</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Pages</a></li>
                        <li><a href="#" class="text-uppercase font-weight-bold">Candidates</a></li>
                        <li>
                            <span class="text-uppercase text-white font-weight-bold">Creat Resume</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

<!-- CREATE RESUME START -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-dark">General Information :</h5>
            </div>

            <div class="col-12 mt-3">
                <div class="custom-form p-4 border rounded">
                    <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" class="img-fluid avatar avatar-medium d-block mx-auto rounded-pill" alt="">
                    <form>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">First Name<span class="text-danger">*</span> :</label>
                                    <input id="first-name" type="text" name="name" class="form-control resume" placeholder="First Name :">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">Middle Name<span class="text-danger">*</span> :</label>
                                    <input id="middle-name" type="text" class="form-control resume" placeholder="Middle Name :">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">Surname<span class="text-danger">*</span> :</label>
                                    <input id="surname-name" type="text" class="form-control resume" placeholder="Surname :">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">Date Of Birth<span class="text-danger">*</span> :</label>
                                    <input id="date-of-birth" type="text" class="form-control resume" placeholder="13-02-1999">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">Sex<span class="text-danger">*</span> :</label>
                                    <div class="form-button">
                                        <select class="nice-select rounded">
                                            <option data-display="sex">Sex</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">Marital Status</label>
                                    <div class="form-button">
                                        <select class="nice-select rounded">
                                            <option data-display="Status">Status</option>
                                            <option value="1">Unmarried</option>
                                            <option value="2">Married</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h5 class="text-dark">Contact Information :</h5>
            </div>

            <div class="col-12 mt-3">
                <div class="custom-form p-4 border rounded">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">City</label>
                                    <div class="form-button">
                                        <select class="nice-select rounded">
                                            <option data-display="City">City</option>
                                            <option value="1">Abilene</option>
                                            <option value="2">Babbitt</option>
                                            <option value="3">Cape Coral</option>
                                            <option value="4">Dallas</option>
                                            <option value="5">Eloy</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">State</label>
                                    <div class="form-button">
                                        <select class="nice-select rounded">
                                            <option data-display="State">State</option>
                                            <option value="1">Alabama</option>
                                            <option value="3">Hawaii</option>
                                            <option value="4">Maine</option>
                                            <option value="5">Oregon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">Country</label>
                                    <div class="form-button">
                                        <select class="nice-select rounded">
                                            <option data-display="Country">Country</option>
                                            <option value="1">Alabama</option>
                                            <option value="2">Delaware</option>
                                            <option value="3">Iowa</option>
                                            <option value="4">Missouri</option>
                                            <option value="5">New York</option>
                                            <option value="6">Utah</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">Phone</label>
                                    <input id="phone" type="number" class="form-control resume" placeholder="Phone No. :">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">E-mail</label>
                                    <input id="e-mail" type="email" name="email" class="form-control resume" placeholder="Email ID :">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group app-label">
                                    <label class="text-muted">Website</label>
                                    <input id="website" type="url" name="url" class="form-control resume" placeholder="www.example.com">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label>Address :</label>
                                    <textarea id="address" rows="4" class="form-control resume" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-dark mt-5">Education Details :</h5>
            </div>

            <div class="col-12 mt-3">
                <div class="custom-form p-4 border rounded">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <label class="text-muted">Graduation</label>
                                    <input id="graduation" type="text" class="form-control resume" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <label class="text-muted">University/College</label>
                                    <input id="university/college" type="text" class="form-control resume" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label class="text-muted">Degree/Certification</label>
                                    <input id="degree/certification" type="text" class="form-control resume" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Level</label>
                                            <div class="form-button">
                                                <select class="nice-select rounded">
                                                    <option data-display="Select">Select</option>
                                                    <option value="1">Level-1</option>
                                                    <option value="2">Level-2</option>
                                                    <option value="3">Level-3</option>
                                                    <option value="4">Level-4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Course Title</label>
                                            <input id="course-title" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label>Additional Information :</label>
                                    <textarea id="addition-information" rows="4" class="form-control resume" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-5">
                <h5 class="text-dark">Work Experience :</h5>
            </div>

            <div class="col-12 mt-3">
                <div class="custom-form p-4 border rounded">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <label class="text-muted">Company Name</label>
                                    <input id="company-name" type="text" class="form-control resume" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group app-label">
                                    <label class="text-muted">Job Position</label>
                                    <input id="job-position" type="text" class="form-control resume" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group app-label">
                                    <label class="text-muted">Location</label>
                                    <div class="form-button">
                                        <select class="nice-select rounded">
                                            <option data-display="Search">Search</option>
                                            <option value="1">New York</option>
                                            <option value="2">Los Angeles</option>
                                            <option value="3">Chicago</option>
                                            <option value="4">Houston</option>
                                            <option value="5">Indiana</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Date From</label>
                                            <input id="date-from" type="text" class="form-control resume" placeholder="01-Jan-2018">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label">
                                            <label class="text-muted">Date To</label>
                                            <input id="date-to" type="text" class="form-control resume" placeholder="31-March-2019">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label>Additional Information :</label>
                                    <textarea id="addition-information-1" rows="4" class="form-control resume" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 mt-5">
                <h5 class="text-dark">Skills :</h5>
            </div>

            <div class="col-12 mt-3">
                <div class="custom-form p-4 border rounded">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label class="text-muted">Skills</label>
                                    <input id="skills" type="text" class="form-control resume" placeholder="HTML, CSS, PHP, javascript, ...">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    <label class="text-muted">Skill proficiency</label>
                                    <input id="skill_proficiency" type="text" class="form-control resume" placeholder="75%">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 mt-4">
                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Submit Resume">
            </div>
        </div>
    </div>
</section>
<!-- CREATE RESUME END -->

<!-- subscribe start -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="float-left position-relative notification-icon mr-2">
                    <i class="mdi mdi-bell-outline text-primary"></i>
                    <span class="badge badge-pill badge-danger">1</span>
                </div>
                <h5 class="mt-2 mb-0">Your Job Notification</h5>
            </div>
            <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                <form>
                    <div class="form-group mb-0">
                        <div class="input-group mb-0">
                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                            <div class="input-group-append">
                                <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- subscribe end -->

<!-- footer start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a href="javascript:void(0)"><img src="/images/logo-light.png" height="20" alt=""></a>
                <p class="mt-4">At vero eos et accusamus et iusto odio dignissim os ducimus qui blanditiis praesentium</p>
                <ul class="social-icon social list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <p class="text-white mb-4 footer-list-title">Company</p>
                <ul class="list-unstyled footer-list">
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> About Us</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Media & Press</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Career</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Blog</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Pricing</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Marketing</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> CEOs </a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Agencies</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Our Apps</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <p class="text-white mb-4 footer-list-title">Resources</p>
                <ul class="list-unstyled footer-list">
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Support</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Privacy Policy</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Terms</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Accounting </a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> Billing</a></li>
                    <li><a href="#" class="text-foot"><i class="mdi mdi-chevron-right"></i> F.A.Q.</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <p class="text-white mb-4 footer-list-title f-17">Business Hours</p>
                <ul class="list-unstyled text-foot mt-4 mb-0">
                    <li>Monday - Friday : 9:00 to 17:00</li>
                    <li class="mt-2">Saturday : 10:00 to 15:00</li>
                    <li class="mt-2">Sunday : Day Off (Holiday)</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<hr>
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="">
                    <p class="mb-0">© 2019 -2020 Jobya. Design with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</p>
                </div>
            </div>
        </div>
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"> </i>
</a>
<!-- Back to top -->

<!-- javascript -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/plugins.js"></script>

<!-- selectize js -->
<script src="/js/selectize.min.js"></script>

<script src="/js/jquery.nice-select.min.js"></script>

<script src="/js/app.js"></script>

</body>
</html>