<!--Pre Loader-->
<div class="preloaderBg" id="preloader">
    <div class="preloader-wrap">
        <div class="preloader-logo"></div>
        <div class="preloader-circle"></div>
    </div>
</div>
<script>
    $(window).on('load', function () { // makes sure the whole site is loaded
        $('#preloader').delay(350).fadeOut('fast'); // will fade out the white DIV that covers the website.
        $('html').css({'overflow-y': 'auto'});
    });
</script>

<!--Navbar-->

<div class="nav-container" id="nav-cont">
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
        <div>
            <a href="index.php" id="nav-logo">
                <img src="assets/img/1IGS-logo.png" alt="">
            </a>
        </div>
        <div class="d-lg-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="position-relative">
                    <button class="nav-link drop-button2">
                        <span>Shipping</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown" id="drop-2">
                        <li><a href="ship-now.php" class="nav-link">Create a Shipment</a></li>
                        <li><a href="#" class="nav-link">Shipping Rates & Delivery</a></li>
                        <li><a href="#" class="nav-link">Schedule & Manage Pickups</a></li>
                        <li><a href="packing.php" class="nav-link">Packing & Shipping</a></li>
                        <li><a href="manage-return.php" class="nav-link">Manage Return</a></li>
                        <li><a href="get-a-quote.php" class="nav-link">Get a Quote</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="track.php" class="nav-link">Track</a>
                </li>
                <li class="position-relative">
                    <button class="nav-link drop-button2">
                        <span>Locations</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown" id="drop-2">
                        <li><a href="drop-off-package.php" class="nav-link">Drop off a Package</a></li>
                        <li><a href="#" class="nav-link">Find 1IGS Locations</a></li>
                    </ul>
                </li>
                <li class="position-relative">
                    <button class="nav-link drop-button2">
                        <span>Aviation</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown" id="drop-2">
                        <li><a href="#" class="nav-link">Private Plane Charter</a></li>
                        <li><a href="#" class="nav-link">Cargo, Government & Humanitarian Charter</a></li>
                    </ul>
                </li>
                <li class="position-relative">
                    <button class="nav-link drop-btn">
                        <span>Solutions</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown">
                        <li class="position-relative">
                            <a class="nav-link drop-btn-sub">Products
                                <span class="dropdown-icon">
                                        <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="nav-dropdown nav-sub nd2">
                                <li>
                                    <a href="general-freight.php" class="nav-link">General Freight</a>
                                </li>
                                <li>
                                    <a href="sea-freight.php" class="nav-link">Sea Freight</a>
                                </li>
                                <li>
                                    <a href="air-freight.php" class="nav-link">Air Freight</a>
                                </li>
                                <li>
                                    <a href="road-freight.php" class="nav-link">Overland Freight</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">Packing Cases & Crates</a>
                                </li>
                                <li>
                                    <a href="customs-clearance.php" class="nav-link">Customs Clearance</a>
                                </li>
                            </ul>
                        </li>
                        <li class="position-relative">
                            <a class="nav-link drop-btn-sub">Services
                                <span class="dropdown-icon">
                                        <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="nav-dropdown nav-sub nd2">
                                <li>
                                    <a href="#" class="nav-link">Conference & Exhibition </a>
                                </li>
                                <li>
                                    <a href="fine-art.php" class="nav-link">Fine Arts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="position-relative">
                            <a class="nav-link drop-btn-sub">Industries
                                <span class="dropdown-icon">
                                        <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="nav-dropdown nav-sub nd2">
                                <li>
                                    <a href="#" class="nav-link">Logistics Procurement</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">Oil & Gas</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">Project Cargo</a>
                                </li>
                                <li>
                                    <a href="mining.php" class="nav-link">Mining & Infrastructure</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">Consumer Goods & Retail</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">Industrial Manufacturing</a>
                                </li>
                            </ul>
                        </li>
                        <li class="position-relative">
                            <a class="nav-link drop-btn-sub">About Us
                                <span class="dropdown-icon">
                                        <i class="fa fa-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="nav-dropdown nav-sub nd2">
                                <li>
                                    <a href="about.php" class="nav-link">About 1IGS</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">Company Leadership</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="position-relative">
                    <button class="nav-link drop-button3">
                        <span>Support</span>
                        <span class="nav-d-icon"><i class="fa fa-chevron-down"></i></span>
                    </button>
                    <ul class="nav-dropdown" id="drop-3">
                        <li><a href="#" class="nav-link">Customer Service</a></li>
                        <li><a href="contact-us.php" class="nav-link">Contact Us</a></li>
                    </ul>
                </li>
                <li class="ml-lg-5 sign-btn-wrap">
                    <a href="sign-in.php" class="nav-link sign-in-link">
                        <span>Sign In</span>
                    </a><span class="text-red or">OR</span>
                    <a href="sign-up.php" class="nav-link sign-in-link nav-sign-up">
                        <span>Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

