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
            Track
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <h6 class="text-red fw-600 text-center">
            Track all of your IGS shipments with one of the convenient tools below. Want more
            visibility of deliveries to your home?
        </h6>
        <div class="hero-search-wrap py-5">
            <form>
                <div class="search-wrap">
                    <input class="form-control" type="search" placeholder="Tracking ID" required>
                    <button class="btn-default">Track</button>
                </div>
            </form>
        </div>
        <div class="track-details-container">
            <h4 class="tracking-heading">Tracking Result</h4>
            <div class="tracking-wrap">
                <h5 class="text-red">
                    <strong>Tracking Number: </strong>
                    <span class="fw-500">12345678</span>
                </h5>
                <h5 class="py-3">Shipment Details:</h5>
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="tracking-details-wrap">
                                <div class="tracking-detail">
                                    <div class="det-heading">Sender Name</div>
                                    <div>abc</div>
                                </div>
                                <div class="tracking-detail">
                                    <div class="det-heading">Sender Location</div>
                                    <div>33026, PeachTree Road, Atlanta, GA, USA</div>
                                </div>
                                <div class="tracking-detail">
                                    <div class="det-heading">Recipient Name</div>
                                    <div>abc</div>
                                </div>
                                <div class="tracking-detail">
                                    <div class="det-heading">Recipient Location</div>
                                    <div>33026, PeachTree Road, Atlanta, GA, USA</div>
                                </div>
                                <div class="tracking-detail">
                                    <div class="det-heading">Booking Date</div>
                                    <div>November 7, 2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <h6 class="tracking-heading">Tracking Summary</h6>
                            <div class="tracking-summary-box">
                                <div class="tracking-detail">
                                    <div class="det-heading">Current Status</div>
                                    <div>Delivered</div>
                                </div>
                                <div class="tracking-detail">
                                    <div class="det-heading">Delivered on</div>
                                    <div>November 11, 2022</div>
                                </div>
                                <div class="tracking-detail">
                                    <div class="det-heading">Delivery Time</div>
                                    <div>17:30</div>
                                </div>
                                <div class="tracking-detail">
                                    <div class="det-heading">Signed By</div>
                                    <div>David</div>
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