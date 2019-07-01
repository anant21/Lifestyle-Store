<?php

require 'includes/common.php';

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

$select_query = "SELECT id, email from users where email='$email' AND password='$password'"; 

$select_query_res = mysqli_query($con, $select_query) or die(mysqli_error($con));

if(mysqli_num_rows($select_query_res)==0)
{
    $error = "Please enter correct E-mail id and Password";
    header('location: login.php?error=' . $error);

} else {
    $row = mysqli_fetch_array($select_query_res);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    header('location: products.php');

    
}

?>
