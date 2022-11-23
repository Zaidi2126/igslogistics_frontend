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

<div class="global page-banner">
    <div class="page-banner-abs">
        <div class="page-banner-text-wrap">
            1IGS Global Forwarding
        </div>
    </div>
</div>

<div class="section col-4-sec">
    <div class="container">
        <div class="text-center">
            <h2 class="default-heading text-red">
                1IGS Global Forwarding
            </h2>
            <h4 class="text-orange mb-3">Helping you connect your goods to every corner of the globe since 1815</h4>
            <p>
                When you rely on global trade to succeed, we understand how important it is to get your goods to market,
                on-time, every time. That is why DHL Global Forwarding promises to always offer reliable, flexible and
                efficient deliveries to and from every country globally, in total compliance with local regulations. We
                keep our promises so that you can deliver on yours.
            </p>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
                <div class="grid-section">
                    <h4>167,000+</h4>
                    <h6>Customers supported every day</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-section">
                    <h4>30,000+</h4>
                    <h6>Expert employees here for you</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-section">
                    <h4>2.1 Mil+</h4>
                    <h6>Air Freight tons moved</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-section">
                    <h4>3.1 Mil+</h4>
                    <h6>Ocean Freight TEUs moved</h6>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section manage-deliveries">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 bg-img packing-img-2"></div>
            <div class="col-lg-7 grid-text">
                <div class="grid-text-wrap">
                    <h3>
                        Products and Solutions
                    </h3>
                    <p>
                        We’re here to help simplify global trade for your business, moving your goods – however big or
                        small – to the places they need to be. We partner with you, listen to your needs and take
                        action, connecting and collaborating with our network and partners across the whole journey, so
                        you can focus on running your business.
                    </p>
                </div>
                <a class="btn-grid-round" href="sign-up.php">OPEN AN ACCOUNT</a>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="p-bg">
            <div class="p-text">
                <h4 class="mb-4">my1IGS, Your Logistics Portal
                </h4>
                <p class="mb-4">
                    Giving you 360° visibility and full control over your shipments
                    <br><br>
                    Everything at your fingertips – Quote + Book, Track, Documents, Analytics. Follow critical shipments
                    and share information with colleagues, customers and suppliers.
                </p>
                <ul>
                    <li>Your digital window to the whole logistics journey</li>
                    <li>Fast and competitive quotes</li>
                    <li>Full transparency</li>
                </ul>
                <a href="#" class="btn-default-round">SIGN IN</a>
            </div>
        </div>
    </div>
</div>


<?php
include_once 'footer.php';
include_once 'script.php';
?>
<script>
    // Show the first tab by default
    $('.tabs-stage .tab-wrap').hide();
    $('.tabs-stage .tab-wrap:first').show();
    $('.tabs-nav li:first').addClass('tab-active');

    // Change tab class and display content
    $('.tabs-nav a').on('click', function (event) {
        event.preventDefault();
        $('.tabs-nav li').removeClass('tab-active');
        $(this).parent().addClass('tab-active');
        $('.tabs-stage .tab-wrap').hide();
        $($(this).attr('href')).show();
    });
</script>

</body>
</html>