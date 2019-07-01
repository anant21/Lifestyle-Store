<?php
 require "includes/common.php";

 if(isset($_SESSION['email'])) {
    header('location: products.php');
 }
 ?>

<!DOCTYPE html>
<html>
    <head>
            <title>Lifestyle Store</title>

            <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
    The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
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
     <br><br><br><br>
        <div class="container">
          <div class="row">
        
            <div class="col-xs-4 col-xs-offset-4 ">     
          <form action="signup_script.php" method="POST">
              <h2><strong> SIGN UP </strong></h2>
              <div class="form-group">
                  <input type="text" placeholder="Name" class="form-control" name="name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" >
              </div>
              <div class="form-group">
                  <input type="email" placeholder="Email" name="email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> <!--?php echo $_GET['m1']; ?-->
              </div>
              <div class="form-group">
                  <input type="password" placeholder="Password" class="form-control" name="password" required="true" pattern=".{6,}">
              </div>
              <div class="form-group">
                  <input type="number" placeholder="Contact" name="contact" class="form-control" required="true" maxlength="10" size="10"><!--?php echo $_GET['m1']; ?-->
              </div>
              <div class="form-group">
                  <input type="text" placeholder="City" class="form-control" name="city" required="true">
              </div>
              <div class="form-group">
                  <input type="text" placeholder="Address" class="form-control" name="address" >
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
          </div>
        </div>    

      <!--footer style="margin-top: 148px">
            <div class="container">
                <center>
                        Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
                </center>
            </div>
        </footer-->
        <br><br><br><br><br><br><br>
    <?php
        include "includes/footer.php";
    ?>

</body>

</html>