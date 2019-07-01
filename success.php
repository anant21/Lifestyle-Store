<?php

require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['id'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=' . $user_id . ' AND item_id IN(' . $item_ids_string .')  AND status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>


<!DOCTYPE HTML>

<html>

    <head>

        <title>Success | Lifestyle Store</title>

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
  
        

        <div class="container" style="margin-top: 150px;">
            <div class="col-xs-6 col-xs-offset-3" >
                <div class="panel panel-success">  
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                    Your order is confirmed. Thank you for shopping
                    with us. <a href="products.php">Click here</a> to purchase any other item.  
                    </div>
                </div>
            </div>
        </div>

           
        <footer style="margin-top: 315px" >
                <div class="container">
                    <center>
                            Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
                    </center>
                </div>
          </footer> 
    
    
    
    </body>
    </html>