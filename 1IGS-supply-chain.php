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

<div class="supply page-banner">
    <div class="page-banner-abs">
        <div class="page-banner-text-wrap">
            1IGS Supply Chain
        </div>
    </div>
</div>

<div class="section col-4-sec">
    <div class="container">
        <div class="text-center">
            <h2 class="default-heading text-red">
                1IGS Supply Chain
            </h2>
            <h4 class="text-orange mb-3">World's leading contract logistics provider</h4>
            <p>
                To maximize the value of your supply chain, you need a reliable logistics partner whose excellent support is
                available wherever you need it – whether that's locally or on the other side of the world.
            </p>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
                <div class="grid-section">
                    <h4>53</h4>
                    <h6>Countries with Active Operations</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-section">
                    <h4>1,460</h4>
                    <h6>Warehouses and Offices</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-section">
                    <h4>14.8M</h4>
                    <h6>Square meters of storage</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="grid-section">
                    <h4>160,000</h4>
                    <h6>Supply Chain Experts</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section bg-light">
    <div class="container">
        <h2 class="default-heading text-red">
            Explore 1IGS Supply Chain
        </h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="grid-section">
                    <div class="grid-img">
                        <img src="assets/img/Homepage/dummy.jpg" alt="">
                    </div>
                    <h4>Heading</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci amet asperiores culpa
                        dolorum enim et harum ipsa iusto, minima mollitia officiis qui, recusandae rem sapiente soluta
                        tenetur vero vitae.
                    </p>
                    <a href="#" class="btn-default-round">Find a Location</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-section">
                    <div class="grid-img">
                        <img src="assets/img/Homepage/dummy.jpg" alt="">
                    </div>
                    <h4>Heading</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci amet asperiores culpa
                        dolorum enim et harum ipsa iusto, minima mollitia officiis qui, recusandae rem sapiente soluta
                        tenetur vero vitae.
                    </p>
                    <a href="#" class="btn-default-round">Start Shipping</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="grid-section">
                    <div class="grid-img">
                        <img src="assets/img/Homepage/dummy.jpg" alt="">
                    </div>
                    <h4>Heading</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci amet asperiores culpa
                        dolorum enim et harum ipsa iusto, minima mollitia officiis qui, recusandae rem sapiente soluta
                        tenetur vero vitae.
                    </p>
                    <a href="#" class="btn-default-round">Start Tracking</a>
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
                        Heading
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem harum illum ipsum nam
                        nemo quisquam tenetur voluptas? Ab alias aliquid autem eaque facere magnam maxime nostrum
                        officiis, omnis repellat. Temporibus.
                    </p>
                </div>
                <a class="btn-grid-round" href="sign-up.php">OPEN AN ACCOUNT</a>
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