<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Cart | Lifestyle Store</title>

<!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
<meta name="viewport" content="width=device-width, initial-scale=1" />


<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >



<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link  href="index.css" type="text/css" rel="stylesheet">
<link rel="icon" type="image/icon" href="images/head-logo1.png"> <!--For The Logo in the title-->



</head>
    <body>

    <?php include 'includes/header.php'; ?>
            <br><br><br><br><br>
        <div class="container-fluid" id="content">
            
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0; $id=0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.pid, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["pid"] . ", ";
                                    echo "<tr><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                               // $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<div class='col-xs-12'><div class='panel panel-primary'><div class='panel-heading' ><h4><b><span class='glyphicon glyphicon-shopping-cart'></span>  Your Cart </b></h4></div><div class='panel-body'>";
                           echo "<center>Your Cart is Empty!</center>";
                           echo "</div></div></div>";
                        }
                        ?>
                        
                    </table>
                </div>
            
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>