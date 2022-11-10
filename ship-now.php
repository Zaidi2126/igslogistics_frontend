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
            Ship Now
        </div>
    </div>
</div>

<div class="section ship-section">
    <div id="main">
        <div class="container">
            <div class="accordion" id="ship-now">
                <div class="card">
                    <div class="card-header" id="ship-now-head1">
                        <h2>
                            <a href="#" class="btn btn-header-link" data-toggle="collapse"
                               data-target="#ship-now1"
                               aria-expanded="true" aria-controls="ship-now1">
                                <button>1- Address Information</button>
                            </a>
                        </h2>
                    </div>

                    <div id="ship-now1" class="collapse show" aria-labelledby="ship-now-head1" data-parent="#ship-now">
                        <div class="card-body">
                            <h5 class="text-red text-center fw-600">
                                Enter your (From) address and the recipient's (To) address.
                            </h5>
                            <form action="" method="post" id="needs-validation" novalidate>
                                <div class="ship-now-form-container mt-3">
                                    <div class="row">
                                        <div class="col-lg-6 ship-form-wrap">
                                            <h6 class="text-red fw-600 mb-3">
                                                From Address
                                            </h6>
                                            <div class="form-group">
                                                <label for="y-name">Your Name</label>
                                                <input type="text" id="y-name" minlength="2" name="y-name"
                                                       class="form-control" placeholder="Your Name" required>
                                                <div class="invalid-feedback">
                                                    please enter a valid name
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="company">Company Name</label>
                                                <input type="text" id="company" name="company" class="form-control"
                                                       placeholder="(Optional)">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                       placeholder="Email Address" required>
                                                <div class="invalid-feedback">
                                                    please enter a valid email
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Contact Number</label>
                                                <input type="tel" id="contact" name="contact" class="form-control"
                                                       pattern="^\d{4}-\d{3}-\d{4}$" placeholder="1234-456-6789"
                                                       required>
                                                <div class="invalid-feedback">
                                                    please enter a valid contact number
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <select class="custom-select" id="country" required>
                                                    <option selected disabled value="USA">USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <select class="custom-select" id="state" required>
                                                    <option value="GA">GA</option>
                                                    <option value="NY">NY</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <select class="custom-select" id="city" required>
                                                    <option value="Atlanta">Atlanta</option>
                                                    <option value="Atlanta">Atlanta</option>
                                                    <option value="Atlanta">Atlanta</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="zip">Zip Code</label>
                                                <input type="text" id="zip" name="zip" minlength="5" maxlength="5"
                                                       class="form-control" placeholder="Zip Code" required>
                                                <div class="invalid-feedback">
                                                    please enter a valid Zip Code
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Street Address</label>
                                                <input type="text" id="address" name="address" class="form-control"
                                                       placeholder="Address" required>
                                                <div class="invalid-feedback">
                                                    please enter a valid address
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ship-form-wrap">
                                            <h6 class="text-red fw-600 mb-3">
                                                To Address
                                            </h6>
                                            <div class="form-group">
                                                <label for="r-name">Recipient Name</label>
                                                <input type="text" id="r-name" minlength="2" name="r-name"
                                                       class="form-control" placeholder="Your Name" required>
                                                <div class="invalid-feedback">
                                                    please enter a valid name
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="r-company">Company Name</label>
                                                <input type="text" id="r-company" name="r-company" class="form-control"
                                                       placeholder="(Optional)">
                                            </div>
                                            <div class="form-group">
                                                <label for="r-email">Email</label>
                                                <input type="email" id="r-email" name="r-email" class="form-control"
                                                       placeholder="Email Address" required>
                                                <div class="invalid-feedback">
                                                    please enter a valid email
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="r-contact">Contact Number</label>
                                                <input type="tel" id="r-contact" name="r-contact" class="form-control"
                                                       pattern="^\d{4}-\d{3}-\d{4}$" placeholder="1234-456-6789"
                                                       required>
                                                <div class="invalid-feedback">
                                                    please enter a valid contact number
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="r-country">Country</label>
                                                <select class="custom-select" id="r-country" required>
                                                    <option selected disabled value="USA">USA</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="r-state">State</label>
                                                <select class="custom-select" id="r-state" required>
                                                    <option value="GA">GA</option>
                                                    <option value="NY">NY</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="r-city">City</label>
                                                <select class="custom-select" id="r-city" required>
                                                    <option value="Atlanta">Atlanta</option>
                                                    <option value="Atlanta">Atlanta</option>
                                                    <option value="Atlanta">Atlanta</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="r-zip">Zip Code</label>
                                                <input type="text" id="r-zip" name="r-zip" minlength="5" maxlength="5"
                                                       class="form-control" placeholder="Zip Code" required>
                                                <div class="invalid-feedback">
                                                    please enter a valid Zip Code
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="r-address">Street Address</label>
                                                <input type="text" id="r-address" name="r-address" class="form-control"
                                                       placeholder="Address" required>
                                                <div class="invalid-feedback">
                                                    please enter a valid address
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 text-center">
                                    <button type="submit" class="btn-default">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="ship-now-head2">
                        <h2>
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                               data-target="#ship-now2"
                               aria-expanded="true" aria-controls="ship-now2">
                                <button>2- Package Details</button>
                            </a>
                        </h2>
                    </div>

                    <div id="ship-now2" class="collapse" aria-labelledby="ship-now-head2" data-parent="#ship-now">
                        <div class="card-body">
                            <div class="ship-now-form-container">
                                <form action="" method="post" id="needs-validation-2" novalidate>
                                    <div class="more-section mt-5">
                                        <h5 class="fw-600">Tell us more about your shipment</h5>
                                        <div class="container mt-3">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="packaging">Packaging</label>
                                                        <select class="custom-select" id="packaging" required>
                                                            <option>IGS Envelope</option>
                                                            <option>IGS Extra Large Box</option>
                                                            <option>IGS Large Box</option>
                                                            <option>IGS Medium Box</option>
                                                            <option>IGS Small Box</option>
                                                            <option>IGS Pak</option>
                                                            <option>IGS Tube</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="packages-number">No. of Packages <br> <span
                                                                    class="f-14">(Max 40)</span></label>
                                                        <select class="custom-select" id="packaging-weight" required>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                            <option value="37">37</option>
                                                            <option value="38">38</option>
                                                            <option value="39">39</option>
                                                            <option value="40">40</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="packaging-weight">Weight per Package <br> <span
                                                                    class="f-14">(Max. weight 50 lb.)</label>
                                                        <input type="number" class="form-control" id="packaging-weight"
                                                               max="50" placeholder="weight in lb." required>
                                                        <div class="invalid-feedback">
                                                            max. weight 50 lb.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-details-wrap">
                                        <div class="package-details">
                                            <div class="name">Packages</div>
                                            <div class="number">10</div>
                                        </div>
                                        <div class="package-details">
                                            <div class="name">Total Weight</div>
                                            <div class="number"><span>120</span> lb.</div>
                                        </div>
                                    </div>
                                    <div class="shipment-date">
                                        <h5 class="fw-600 mt-5 mb-3">When do you want to ship?</h5>
                                        <div class="form-group">
                                            <select class="custom-select" id="packaging" required>
                                                <option>Monday, November 7, 2022</option>
                                                <option>Tuesday, November 8, 2022</option>
                                            </select>
                                            <label class="shipping-label-abs" for="from">
                                                Ship Date
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-check">
                                                <input class="form-check-input" name="pick-up-check" type="checkbox"
                                                       id="pick-up-check">
                                                <label class="form-check-label" for="pick-up-check">
                                                    I want this shipment picked up
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn-default">Show Rates</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="ship-now-head3">
                        <h2>
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                               data-target="#ship-now3"
                               aria-expanded="true" aria-controls="ship-now3">
                                <button>3- Payment</button>
                            </a>
                        </h2>
                    </div>

                    <div id="ship-now3" class="collapse" aria-labelledby="ship-now-head3" data-parent="#ship-now">
                        <div class="card-body">
                            <div class="ship-now-form-container">
                                <div class="shipment-quote-wrap">
                                    <div class="shipment-quote">
                                        <div class="shipment-quote-date">
                                            <h4 class="fw-600">Arrives On</h4>
                                            <h6>Friday, November 11, 2022</h6>
                                        </div>
                                        <div class="shipment-quote-details">
                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="details">
                                                            <div class="name">Base Rate</div>
                                                            <div class="price">$<span>269.51</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">Fuel Surcharge</div>
                                                            <div class="price">$<span>72.57</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">Residential Deliver Surcharge</div>
                                                            <div class="price">$<span>5.30</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">1IGS Pickup</div>
                                                            <div class="price">$<span>4.00</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">Peak Surcharge</div>
                                                            <div class="price">$<span>3.00</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="total">Estimated Total</div>
                                                            <div class="total-price">$<span>354.38</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <a href="#" class="btn-default-round">
                                                                $354.38
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shipment-quote-details">
                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="details">
                                                            <div class="name">Base Rate</div>
                                                            <div class="price">$<span>269.51</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">Fuel Surcharge</div>
                                                            <div class="price">$<span>72.57</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">Residential Deliver Surcharge</div>
                                                            <div class="price">$<span>5.30</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">1IGS Pickup</div>
                                                            <div class="price">$<span>4.00</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">Peak Surcharge</div>
                                                            <div class="price">$<span>3.00</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="total">Estimated Total</div>
                                                            <div class="total-price">$<span>354.38</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <a href="#" class="btn-default-round">
                                                                $354.38
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shipment-quote">
                                        <div class="shipment-quote-date">
                                            <h4 class="fw-600">Arrives On</h4>
                                            <h6>Friday, November 11, 2022</h6>
                                        </div>
                                        <div class="shipment-quote-details">
                                            <div class="container">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <div class="details">
                                                            <div class="name">Base Rate</div>
                                                            <div class="price">$<span>269.51</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">Fuel Surcharge</div>
                                                            <div class="price">$<span>72.57</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">Residential Deliver Surcharge</div>
                                                            <div class="price">$<span>5.30</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">1IGS Pickup</div>
                                                            <div class="price">$<span>4.00</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="name">Peak Surcharge</div>
                                                            <div class="price">$<span>3.00</span></div>
                                                        </div>
                                                        <div class="details">
                                                            <div class="total">Estimated Total</div>
                                                            <div class="total-price">$<span>354.38</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <a href="#" class="btn-default-round">
                                                                $354.38
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

<script>
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var form = document.getElementById('needs-validation-2');
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        }, false);
    })();
</script>

</body>
</html>