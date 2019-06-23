<?php
session_start();
 if(!empty($_SESSION['username']))
 {
	 echo $_SESSION['success'];
	echo '<br>';
	echo '<h5>'.'Welocme'.':'.' '.$_SESSION['username'].'</h5>';
	
?>
	<a href="logout.php">logout</a>
	
	<?php
 } 
 else {
	 header("location: login.php");
 }
 ?>
