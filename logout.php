<?php
$conn = mysqli_connect("localhost","wepro","nitin123","demo");
session_start();
  session_destroy();
 unset($_SESSION['email']);
 	header('location: login.php');

?>
