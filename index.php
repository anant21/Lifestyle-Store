<?php
require 'includes/common.php';

if (isset($_SESSION['email'])) 
{ header('location: products.php');
 }

?>

<!DOCTYPE HTML>

<html>

    <head>

        <title>Home | Lifestyle Store</title>

        <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="5" />
 
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
    
        <!--nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="iron-bar"></span>
                            <span class="iron-bar"></span>
                            <span class="iron-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">Lifestyle Store</a> 
                </div>    
                <div>
                      <ul class=" nav navbar-nav navbar-right">
                          <li><a href="login.html"><span class="glyphicon glyphicon-log-in"> Login</span> </a></li>
                          <li><a href="signup.html"><span class="glyphicon glyphicon-user"> Sign-Up</span></a></li>

                      </ul>
                </div>  
                

            </div>
        </nav-->    
        
    <?php
    include "includes/header.php";
    ?>
        
    <div id="banner_image">
        <center>
            <div class="container">
                <div id="banner_content">
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </center>
    </div>


    <?php
        include 'includes/footer.php';
    ?>
    
    <!--footer>
        <div class="container">
            <center>
                    Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
            </center>
        </div>
    </footer-->

    </body>
</html>    