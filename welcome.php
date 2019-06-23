
<head>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
</head>

<!-- welcome section -->
<div class="row mt-5">
	<div class="col-md-1 mt-5">
	</div>
	<div class="col-md-3 mt-5">
		<a role="button" class="btn btn-primary mb-5" href="display.php">Display</a>
		<a role="button" class="btn btn-success mb-5" href='changepass.php'>Change password</a>
		<a role="button" class="btn btn-danger mb-5" href="logout.php">Logout</a>
	</div>

	
<!-- welcome section -->
<?php
 include('session.php');
$conn = mysqli_connect("localhost","wepro","nitin123","demo");

// session_start();
 if(isset($_SESSION['username']) AND (isset($login_session)))
 {

 		 $msg = $_SESSION['success'];
	echo '<br>';
	$m ='Welocme'.':'.' '.$_SESSION['username'];
 } 
 else {
 
	header("location: login.php");
	
 }
?>
<!-- <a href="logout.php">logout</a> -->
<div class="col-md-4 mt-5">
		<h5 class=""></h5>
		<div class="card">

	  <h5 class="card-header info-color white-text text-center py-4">
	    <strong><?php echo $msg; ?></strong>
	  </h5>
	  <!--Card content-->
	  <div class="card-body px-lg-5 pt-0 text-center mt-4">
<?php echo $m; ?>
	  	
	</div>
	  
	</div>
	<div class="col-md-4 mt-5">
	</div>
	</div>