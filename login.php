<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) 
{ header('location: products.php');
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
        <?php
            include 'includes/header.php';
        
        ?>  
     
        <div class="container">
          <div class="row">
              <br><br><br><br>
              <div class="panel panel-primary">
                  <div class="panel-heading">
                  </div>

                  <div class="panel-body">
                      <p class="text-warning">Login to make a purchase</p>
                    <form method="POST" action="login_submit.php">
                       <div class="form-group">
                           <label for="email">E-mail</label>
                           <input type="email" class="form-control" name="email" required="true">
                           <label for="password">Password</label>
                           <input type="password" class="form-control" name="password" required="true">
                       </div> 
                       <button type="submit" class="btn btn-success">Login</button>
                       <?php //echo $_GET['error']; ?>
                    </form>
                  
                    </div>

                  <div class="panel-footer">
                      Don't have an account? <a href="signup.php">Register</a>
                  </div>
              </div>
          </div>
      </div>    
<br><br><br><br><br><br><br><br><br><br><br>
      <?php
        include 'includes/footer.php';
      ?>

      <!--footer style="margin-top: 228px">
            <div class="container">
                <center>
                        Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
                </center>
            </div>
        </footer-->
    

</body>

</html>