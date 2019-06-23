<?php  

$conn = mysqli_connect("localhost","wepro","nitin123","demo");
session_start();

$cuser = $_SESSION['username'];

 
$sql = mysqli_query($conn, "SELECT email FROM form WHERE email='$cuser'");


$row = mysqli_fetch_array($sql);
 
$login_session=$row['email'];
 
if(!isset($login_session))
{
header("Location: login.php");
}

?>

