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

<div class="pickup-banner page-banner">
    <div class="page-banner-abs">
        <div class="page-banner-text-wrap">
            Schedule & Manage Pickups
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <h2 class="default-heading text-red">
            1IGS Pickup options
        </h2>
        <p class="mb-5 text-center">
            Ship your package whenever you want and wherever you are. There are a variety of options
            available to get your shipments to us on time. Busy with work, holiday or family gathering?
            No need to wait for a collection – drop it off at one of our offices or partners nationwide.
        </p>
        <div class="text-center">
            <a href="get-a-quote.php" class="btn-default-round">Schedule Pickups</a>
        </div>
    </div>
</div>

<div class="bg-light section col-3-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="grid-section">
                    <div class="grid-img">
                        <img src="assets/img/pickups/track.jpg" alt="">
                    </div>
                    <div class="hero-search-wrap">
                        <form class="mt-5">
                            <div class="search-wrap">
                                <input class="form-control" type="search" placeholder="Track Your Shipment" required>
                                <button class="btn-default">Track</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-section">
                    <div class="grid-img">
                        <img src="assets/img/pickups/ONE%20TIME%20PICKUP.jpg" alt="">
                    </div>
                    <h4>ONE TIME PICKUP</h4>
                    <p>
                        Eliminate the waste of time
                        by scheduling your pick online
                        conveniently.

                    </p>
                </div>
                <div class="grid-btn-wrap">
                    <a href="#one-time-pickup" class="btn-default-round">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-section">
                    <div class="grid-img">
                        <img src="assets/img/pickups/RECURRING%201IGS%20PICK%20UP.jpg" alt="">
                    </div>
                    <h4>RECURRING 1IGS PICK UP</h4>
                    <p>
                        Create an account and sign up to
                        receive 15% discount on recurring
                        Delivery needs. Plan today.

                    </p>
                </div>
                <div class="grid-btn-wrap">
                    <a href="#recurring1IGS" class="btn-default-round">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section col-3-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="grid-section">
                    <div class="grid-img">
                        <img src="assets/img/pickups/Ship%20like%20a%20pro.jpg" alt="">
                    </div>
                    <h4>SHIP LIKE A PRO</h4>
                    <p>
                        Get access to agility and speed
                        with 1 stop shop tailored made
                        feature offered only by My1IGS+.
                    </p>
                </div>
                <div class="grid-btn-wrap">
                    <a href="sign-in.php" class="btn-default-round">Login and Ship</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-section">
                    <div class="grid-img">
                        <img src="assets/img/pickups/1IGS%20for%20Business.jpg" alt="">
                    </div>
                    <h4>1IGS FOR BUSINESS</h4>
                    <p>
                        Best in class rate, 1 portal and
                        billing options second to none
                        than 1IGS Express account.
                    </p>
                </div>
                <div class="grid-btn-wrap">
                    <a href="sign-up.php" class="btn-default-round">Open an Account</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-section">
                    <div class="grid-img">
                        <img src="assets/img/pickups/Brand%20and%20we%20will%20pich%201.jpg" alt="">
                    </div>
                    <h4>CUSTOMS REGULATORY UPDATES</h4>
                    <p>
                        We are 100% custom complaint
                        and will assist you stay up to date
                        on important global regulations.
                    </p>
                </div>
                <div class="grid-btn-wrap">
                    <a href="sign-up.php" class="btn-default-round">View Updates</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section manage-deliveries">
    <div class="container">
        <div class="row mb-5" id="one-time-pickup">
            <div class="col-lg-5 bg-img pick-img-1"></div>
            <div class="col-lg-7 grid-text">
                <div class="grid-text-wrap">
                    <h3>
                        One Time Pickup
                    </h3>
                    <p>
                        Plan and book a one-time shipping pickup, and a
                        1IGS driver will be on his way. Explore our pickup
                        Application to learn more.
                        <br><br>

                        1. Create an account or login<br>
                        2. Create a shipping label<br>
                        3. Book your shipment pickup

                    </p>
                </div>

                <a class="btn-grid-round" href="ship-now.php">BOOK A FREIGHT PICKUP</a>
            </div>
        </div>
        <div class="row flex-row-reverse mb-5" id="recurring1IGS">
            <div class="col-lg-5 bg-img pick-img-2"></div>
            <div class="col-lg-7 grid-text">
                <div class="grid-text-wrap">
                    <h3>
                        Recurring 1IGS Pick
                    </h3>
                    <p>
                        Focus on your core business and let us worry
                        about your shipments. Kick off by setting
                        automated regular pick-ups, free express
                        service and take advantage of our end to end
                        picking and parking solutions. Let us save you
                        time and money.
                        <br><br>
                        We are there for you even on rainy days.
                        Contact your 1IGS account expert or call
                        customer service on +1 800 1IGS expert
                        +1 888.414.7941 to get help from an
                        expert.
                    </p>
                </div>

                <a class="btn-grid-round" href="sign-up.php">Sign Up</a>
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