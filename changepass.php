<?php
include('session.php');
$conn = mysqli_connect("localhost","wepro","nitin123","demo");

		if(isset($_POST['submit']))
		{
			$id=$_SESSION['username'];

		$old_pass=$_POST['opass'];
		$new_pass=$_POST['npass'];
		$re_pass=$_POST['cpass'];
		$chg_pwd=mysqli_query($conn, "SELECT * from form where email='$id'");
		$chg_pwd1=mysqli_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['pass'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysqli_query($conn, "UPDATE form set pass='$new_pass' where email='$id'");
			echo 'Change password Sucessfully';
		}
		else{
			echo 'Your new and Retype Password is not match';
		}
		}
		else
		{
		echo 'Your old password is wrong';
		}
	}
?>

<head>
<!-- Font Awesome -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
</head>
<!-- form -->
<!-- Material form login -->
<div class="row pt-5">
	<div class="col-md-1">
	</div>

	<div class="col-md-3 mt-5">
		<a role="button" class="btn btn-primary mb-5" href="display.php">Display</a><br>
		<!-- <a role="button" class="btn btn-success mb-5" href='changepass.php'>Change password</a> -->
		<a role="button" class="btn btn-danger mb-5" href="logout.php">Logout</a>
	</div>

	<div class="col-md-4">
	<div class="card">

	  <h5 class="card-header info-color white-text text-center py-4">
	    <strong>Change Password</strong>
	  
	  </h5>

	  <!--Card content-->
	  <div class="card-body px-lg-5 pt-0 ">

	  	
	    <!-- Form -->
	    <form class="text-center mt-4" style="color: #757575;" action="" method="POST">

	        
	      <!-- Password -->
	        <input type="password" id="Password" class="form-control mb-4" name="opass" placeholder="Current Password" required>
	      
	      	      <!-- Password -->
	        <input type="password" id="Password" class="form-control mb-4" name="npass" placeholder="New Password" >

	        	      <!-- Password -->
	        <input type="password" id="Password" class="form-control mb-4" name="cpass" placeholder="Confirm New Password" >

	      <div class="d-flex justify-content-around">
	        <div>
	          <!-- Remember me -->
	          <div class="">
	         	 <p>New User?
	        		<a href="index.php">Register</a>
	     	 	 </p>
	          </div>
	        </div>
	        <div>
	          <!-- Forgot password -->
	          <a href="forget.php">Forgot password?</a>
	        </div>
	      </div>

	      <!-- Sign in button -->
	      <!-- <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign Up</button> -->
	      <input type="submit"  class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit">

	    </form>
	    <!-- Form -->

	  </div>

	</div>
	<!-- Material form login -->
	</div>
	<!-- close col-md-4 -->
	<div class="col-md-4">
	</div>
</div>
<!-- row close -->
<!-- form -->
