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

<div class="sign-in-section">
    <div class="container">
        <div class="sign-in-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0 px-lg-2">
                        <div class="form-container">
                            <div class="col-12">
                                <div class="form-logo">
                                    <img src="assets/img/1IGS-logo.png" alt="">
                                </div>
                            </div>

                            <div class="form-wrap sign-up-wrap">
                                <h2 class="default-heading">Sign Up</h2>
                                <h6>Welcome! Please enter your details</h6>
                                <form action="" method="post" id="needs-validation" novalidate>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 pr-md-1">
                                                <div class="form-group">
                                                    <label for="f-name">First Name</label>
                                                    <input type="text" id="f-name" minlength="2" name="f-name" class="form-control" placeholder="First Name" required>
                                                    <div class="invalid-feedback">
                                                        please enter a valid first name
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-md-1">
                                                <div class="form-group">
                                                    <label for="l-name">Last Name</label>
                                                    <input type="text" id="l-name" minlength="2" name="l-name" class="form-control" placeholder="Last Name" required>
                                                    <div class="invalid-feedback">
                                                        please enter a valid last name
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                                                    <div class="invalid-feedback">
                                                        please enter a valid email
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact">Contact Number</label>
                                                    <input type="tel" id="contact" name="contact" class="form-control" pattern="^\d{4}-\d{3}-\d{4}$" placeholder="1234-456-6789" required>
                                                    <div class="invalid-feedback">
                                                        please enter a valid contact number
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-md-1">
                                                <div class="form-group">
                                                    <label for="country">Country</label>
                                                    <select class="custom-select" id="country" required>
                                                        <!-- <option selected disabled value="USA">USA</option> -->
                                                        <option selected value="USA">USA</option>
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
                                                    <input type="text" id="zip" name="zip" minlength="5" maxlength="5" class="form-control" placeholder="Zip Code" required>
                                                    <div class="invalid-feedback">
                                                        please enter a valid Zip Code
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="address">Street Address</label>
                                                    <input type="text" id="address" name="address" class="form-control" placeholder="Address" required>
                                                    <div class="invalid-feedback">
                                                        please enter a valid address
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="password">Password <span>(min 8 characters)</span></label>
                                                    <input type="password" id="password" minlength="8" name="password" class="form-control" placeholder="********" required>
                                                    <div class="invalid-feedback">
                                                        please enter a valid password
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="c-password">Confirm Password</label>
                                                    <input type="password" id="c-password" minlength="8" name="c-password" class="form-control" placeholder="********" required>
                                                    <div class="invalid-feedback">
                                                        password didn't match
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mt-4">
                                                    <button type="submit" class="btn-default" onclick="signUp()">Sign Up</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="mt-5 text-center">
                                    Already have an account? <a href="sign-in.php" class="text-red fw-600">Sign In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sign-in-img"></div>
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