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

<div class="section mt-5 pt-5">
    <div class="container">
        <div class="profile">
            <h2 class="default-heading text-red">MY profile</h2>

            <div class="profile-btn-wrap">
                <a href="profile-shipping-history.php">Shipping History</a>
                <a href="profile-personal-information.php" class="profile-active">Personal Information</a>
                <a href="profile-change-password.php">Change Password</a>
            </div>

            <div class="form-container">
                <div class="form-wrap profile-info">
                    <form action="" method="post" id="needs-validation" novalidate>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 pr-md-1">
                                    <div class="form-group">
                                        <label for="f-name">First Name</label>
                                        <input type="text" id="f-name" minlength="2" name="f-name" class="form-control" placeholder="First Name" required value="John">
                                        <div class="invalid-feedback">
                                            please enter a valid first name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-md-1">
                                    <div class="form-group">
                                        <label for="l-name">Last Name</label>
                                        <input type="text" id="l-name" minlength="2" name="l-name" class="form-control" placeholder="Last Name" required value="Doe">
                                        <div class="invalid-feedback">
                                            please enter a valid last name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" disabled placeholder="Email Address" value="john@gmail.com" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact">Contact Number</label>
                                        <input type="tel" id="contact" name="contact" class="form-control" pattern="^\d{4}-\d{3}-\d{4}$" placeholder="1234-456-6789" required value="1234-456-6789">
                                        <div class="invalid-feedback">
                                            please enter a valid contact number
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-md-1">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select class="custom-select" id="country" required>
                                            <option selected disabled value="USA">USA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-md-1">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <select class="custom-select" id="state" required>
                                            <option value="GA">GA</option>
                                            <option value="NY">NY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-md-1">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <select class="custom-select" id="city" required>
                                            <option value="Atlanta">Atlanta</option>
                                            <option value="Atlanta">Atlanta</option>
                                            <option value="Atlanta">Atlanta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-md-1">
                                    <div class="form-group">
                                        <label for="zip">Zip Code</label>
                                        <input type="text" id="zip" name="zip" minlength="5" maxlength="5" class="form-control" placeholder="Zip Code" required value="12312">
                                        <div class="invalid-feedback">
                                            please enter a valid Zip Code
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Street Address</label>
                                        <input type="text" id="address" name="address" class="form-control" placeholder="Address" required value="33026, PeachTree Road">
                                        <div class="invalid-feedback">
                                            please enter a valid address
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mt-3 text-center">
                                        <button type="submit" class="btn-default" disabled>Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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