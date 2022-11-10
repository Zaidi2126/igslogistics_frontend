<!DOCTYPE html>
<html lang="en">

<?php
include_once 'head.php'
?>

<body>
<!--Main-->
<?php
include_once 'nav.php'
?>

<div class="contact-banner page-banner">
    <div class="page-banner-abs">
        <div class="page-banner-text-wrap">
            CONTACT US
        </div>
    </div>
</div>

<div class="contact-section">
    <div class="container">
        <div class="contact-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-details-wrap">
                            <div>
                                <h2 class="default-heading text-white">Contact Us</h2>
                                <h6>FIll this form, our support team will be in contact within 24 hours.</h6>
                            </div>
                            <div class="address-info-wrap">
                                <a href="tel:1234-456-6789" class="address-info">
                                    <span class="contact-icon">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <span>
                                        1234-456-6789
                                    </span>
                                </a>
                                <a href="mailto:support@1igsl.com" class="address-info">
                                    <span class="contact-icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <span>
                                        support@1igsl.com
                                    </span>
                                </a>
                                <a href="tel:1234-456-6789" class="address-info">
                                    <span class="contact-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <span>
                                        33026, PeachTree Road, Atlanta, GA, USA
                                    </span>
                                </a>
                            </div>
                            <div class="contact-social-icons">
                                <div class="footer-icons">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-wrap">
                            <h4 class="text-uppercase text-red mb-3 text-center fw-600">Please enter your details</h4>
                            <form action="" method="post" id="needs-validation" novalidate>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" minlength="2" class="form-control" placeholder="Full Name" required>
                                    <div class="invalid-feedback">
                                        please enter a valid name
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                                    <div class="invalid-feedback">
                                        please enter a valid email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contact">Contact Number</label>
                                    <input type="tel" id="contact" name="contact" class="form-control" pattern="^\d{4}-\d{3}-\d{4}$" placeholder="1234-456-6789" required>
                                    <div class="invalid-feedback">
                                        please enter a valid contact number
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="contact" rows="4" class="form-control" placeholder="Enter a message" required></textarea>
                                    <div class="invalid-feedback">
                                        please enter a message
                                    </div>
                                </div>
                                <div class="col-12 text-center">

                                    <div class="g-recaptcha mt-3 d-flex justify-content-center"
                                         data-sitekey="6LedZdwiAAAAAIpqCq_VTKDMVTAVMM2_zBQstwfn"></div>

                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn-default">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
include_once 'script.php';
?>


</body>
</html>