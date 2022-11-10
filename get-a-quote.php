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
            Get a Quote
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <h2 class="default-heading text-red">Get a Quote for IGS Shipping</h2>

        <div class="shipping-form">
            <form action="" method="post" id="needs-validation" novalidate>
                <div class="shipment-address">
                    <div class="form-group">
                        <input type="text" name="from" id="from" class="form-control" placeholder="Sender's Address" required>
                        <label class="shipping-label-abs" for="from">
                            From
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="to" id="to" class="form-control" placeholder="Receiver's Address" required>
                        <label class="shipping-label-abs" for="to">
                            To
                        </label>
                    </div>
                </div>

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
                                    <label for="packages-number">No. of Packages <br> <span class="f-14">(Max 40)</span></label>
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
                                    <label for="packaging-weight">Weight per Package <br> <span class="f-14">(Max. weight 50 lb.)</label>
                                    <input type="number" class="form-control" id="packaging-weight" max="50" placeholder="weight in lb." required>
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
                            <input class="form-check-input" name="pick-up-check" type="checkbox" id="pick-up-check">
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

<?php
include_once 'footer.php';
include_once 'script.php';
?>

</body>
</html>