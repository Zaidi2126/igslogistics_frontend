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
            Reset Password
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="reset-page">
            <div class="reset-password-wrap mb-3">
                <form action="" method="post" id="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="code">Verification Code</label>
                        <input type="text" id="code" name="code" minlength="6" maxlength="6" class="form-control" placeholder="123456" required>
                        <div class="invalid-feedback">
                            please enter a valid Verification Code
                        </div>
                    </div>
                    <div class="forgot-password text-right">
                        <a href="#" class="text-red f-14 fw-500">Resend Code</a>
                    </div>
                    <div class="mt-3 text-center">
                        <button type="submit" class="btn-default">Reset</button>
                    </div>
                </form>
            </div>
            <div class="new-password-wrap">
                <form action="" method="post" id="needs-validation2" novalidate>
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
                    <div class="mt-3 text-center">
                        <button type="submit" class="btn-default">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var form = document.getElementById('needs-validation2');
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

<?php
include_once 'footer.php';
include_once 'script.php';
?>

</body>
</html>