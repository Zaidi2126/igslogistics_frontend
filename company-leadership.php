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

<div class="cl page-banner">
    <div class="page-banner-abs">
        <div class="page-banner-text-wrap">
            Company Leadership
        </div>
    </div>
</div>

<div class="section col-4-sec">
    <div class="container">
        <div class="text-center">
            <h2 class="default-heading text-red">
                1IGS LOGISTICS FOR THE CONNECTED AGE
            </h2>
            <p>
                When Adrian Dalsey, Larry Hillblom and Robert Lynn founded DHL in 1969, they didn’t know they would
                revolutionize the world of logistics. Today, DHL is the world’s leading logistics company. Our 380,000
                people in over 220 countries and territories work every day to help you cross borders, reach new markets
                and grow your business. Or simply send a letter to your loved ones.
            </p>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="grid-section">
                    <h4>10,000+</h4>
                    <h6>PEOPLE WORKING AT 1IGS</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid-section">
                    <h4>OVER 220</h4>
                    <h6>COUNTRIES AND TERRITORIES SERVED</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid-section">
                    <h4>1,818,000,000</h4>
                    <h6>PARCELS DELIVERED PER YEAR</h6>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section bg-light">
    <div class="container">
        <h2 class="default-heading text-red">
            Main Heading
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

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 bg-img leadership-bg"></div>
            <div class="col-lg-6 about-grid">
                <div class="about-grid-wrap">
                    <div class="comma-wrap align-items-center">
                        <div class="comma-img">
                            <img src="assets/img/comma.png" alt="">
                        </div>
                        <div class="comma-text">
                            <h2 class="default-heading text-red" style="margin-bottom: 0 !important;">Heading</h2>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores culpa, delectus
                        dolor dolore eos facilis inventore, ipsum magni molestias obcaecati officia officiis optio
                        provident quae repudiandae sapiente! Consequuntur, dolore?
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores culpa, delectus
                        dolor dolore eos facilis inventore, ipsum magni molestias obcaecati officia officiis optio
                        provident quae repudiandae sapiente! Consequuntur, dolore?
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores culpa, delectus
                        dolor dolore eos facilis inventore, ipsum magni molestias obcaecati officia officiis optio
                        provident quae repudiandae sapiente! Consequuntur, dolore?
                        <br><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores culpa, delectus
                        dolor dolore eos facilis inventore, ipsum magni molestias obcaecati officia officiis optio
                        provident quae repudiandae sapiente! Consequuntur, dolore?
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section bg-light">
    <div class="container">
        <div class="p-bg">
            <div class="p-text">
                <h4 class="mb-4">Heading
                </h4>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eligendi error et explicabo nisi
                    nulla quidem sequi tenetur! Adipisci at corporis maxime nisi nostrum obcaecati quo ratione
                    reprehenderit ullam veniam.
                </p>
                <a href="about.php" class="btn-default-round">About Us</a>
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