<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>



<!DOCTYPE HTML>

<html>

    <head>

        <title>Settings | Lifestyle Store</title>

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
    
       <?php
        include 'includes/header.php';
        ?>

        <br><br><br><br>

        <div class="container">
            <div class="col-xs-4 col-xs-offset-4" style="text-align: left;">
                <h4><b>Change Password</b></h4>
                <form action="settings-script.php" method="POST">
                    <div class="form-group">
                    <input type="password" class="form-control" placeholder="Old Password" required="true" name="oldpassword">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="New Password" required="true" name="newpassword">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Re-type New Password" required="true" name="retypenewpassword">
                    </div>

                    <button type="submit" class="btn btn-primary">Change</button>
                    <?php
                        //echo "<br><br><span class='red'>". $_GET['error'] . "</span>";
                        ?>
                </form>
            </div>
        </div>
<br>
           
        <footer style="margin-top: 298px;" >
                <div class="container">
                    <center>
                            Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
                    </center>
                </div>
          </footer> 
    
    
    
    </body>
    </html>