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
                <a href="profile-personal-information.php">Personal Information</a>
                <a href="profile-change-password.php" class="profile-active">Change Password</a>
            </div>

            <div class="form-container">
                <div class="form-wrap profile-info">
                    <form action="" class="container" method="post" id="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="old-password">Old Password</label>
                            <input type="password" id="old-password" minlength="8" name="old-password" class="form-control" placeholder="********" required>
                            <div class="invalid-feedback">
                                please enter a valid password
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="new-password">New Password <span>(min 8 characters)</span></label>
                            <input type="password" id="new-password" minlength="8" name="new-password" class="form-control" placeholder="********" required>
                            <div class="invalid-feedback">
                                please enter a valid password
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c-password">Confirm Password</label>
                            <input type="password" id="c-password" minlength="8" name="c-password" class="form-control" placeholder="********" required>
                            <div class="invalid-feedback">
                                password didn't match
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-3 text-center">
                                <button type="submit" class="btn-default">Save</button>
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