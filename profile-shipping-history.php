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
                <a href="profile-shipping-history.php" class="profile-active">Shipping History</a>
                <a href="profile-personal-information.php">Personal Information</a>
                <a href="profile-change-password.php">Change Password</a>
            </div>

            <h5 class="tracking-heading mt-5">
                Shipping History
            </h5>
            <div class="table-responsive history-table">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>S#</th>
                        <th>Tracking#</th>
                        <th>Send To</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Booking Date</th>
                        <th>Package Details</th>
                        <th>Package Weight</th>
                        <th>Price</th>
                        <th>Delivered on</th>
                        <th>Status</th>
                        <th>Print Invoice</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>12345678</td>
                        <td>David</td>
                        <td>33026, PeachTree Road, Atlanta, GA, USA</td>
                        <td>1234-123-4111</td>
                        <td>November 6, 2022</td>
                        <td>2 x 1IGS Large Box</td>
                        <td>20lb.</td>
                        <td>$354.17</td>
                        <td>November 11, 2022</td>
                        <td>
                            <div class="badge badge-success">delivered</div>
                        </td>
                        <td>
                            <button class="btn-default-round btn-icon">
                                <i class="fa fa-download"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>12345678</td>
                        <td>David</td>
                        <td>33026, PeachTree Road, Atlanta, GA, USA</td>
                        <td>1234-123-4111</td>
                        <td>November 6, 2022</td>
                        <td>2 x 1IGS Large Box</td>
                        <td>20lb.</td>
                        <td>$354.17</td>
                        <td>NA</td>
                        <td>
                            <div class="badge badge-info">out for delivery</div>
                        </td>
                        <td>
                            <button class="btn-default-round btn-icon">
                                <i class="fa fa-download"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>12345678</td>
                        <td>David</td>
                        <td>33026, PeachTree Road, Atlanta, GA, USA</td>
                        <td>1234-123-4111</td>
                        <td>November 6, 2022</td>
                        <td>2 x 1IGS Large Box</td>
                        <td>20lb.</td>
                        <td>$354.17</td>
                        <td>NA</td>
                        <td>
                            <div class="badge badge-warning">pending</div>
                        </td>
                        <td>
                            <button class="btn-default-round btn-icon">
                                <i class="fa fa-download"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>12345678</td>
                        <td>David</td>
                        <td>33026, PeachTree Road, Atlanta, GA, USA</td>
                        <td>1234-123-4111</td>
                        <td>November 6, 2022</td>
                        <td>2 x 1IGS Large Box</td>
                        <td>20lb.</td>
                        <td>$354.17</td>
                        <td>NA</td>
                        <td>
                            <div class="badge badge-danger">cancelled</div>
                        </td>
                        <td>
                            <button class="btn-default-round btn-icon">
                                <i class="fa fa-download"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>12345678</td>
                        <td>David</td>
                        <td>33026, PeachTree Road, Atlanta, GA, USA</td>
                        <td>1234-123-4111</td>
                        <td>November 6, 2022</td>
                        <td>2 x 1IGS Large Box</td>
                        <td>20lb.</td>
                        <td>$354.17</td>
                        <td>NA</td>
                        <td>
                            <div class="badge badge-primary">picked up</div>
                        </td>
                        <td>
                            <button class="btn-default-round btn-icon">
                                <i class="fa fa-download"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
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