<?php
$conn = mysqli_connect("localhost","wepro","nitin123","demo");
session_start();
$email=$pass="";
if(isset($_POST['login']))
{
	$email=($_POST['email']);
	$pass=($_POST['pass']);

	    // echo "SELECT * FROM form WHERE email='$email' AND pass='$pass'"; die;
	    // $querry = "SELECT * FROM form WHERE email='r@gmail.com' AND pass='password' OR 1 = 1";
		$sql=mysqli_query($conn,"SELECT * FROM form WHERE email='$email' AND pass='$pass'");
		if(mysqli_num_rows($sql) == 1) 
		{
			$_SESSION['username'] = $email;
			$_SESSION['success'] = "You are login successfully ";
			header('location: welcome.php');
		}
		
		else
		{
			echo "enter vaild email & pass";
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
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
	<div class="card">

	  <h5 class="card-header info-color white-text text-center py-4">
	    <strong>Login Form</strong>
	  
	  </h5>

	  <!--Card content-->
	  <div class="card-body px-lg-5 pt-0 ">

	  	
	    <!-- Form -->
	    <form class="text-center mt-4" style="color: #757575;" action="" method="POST">

	      <!-- Email -->
	        <input type="email" id="E-mail" class="form-control mb-4" name="email"  placeholder="E-mail" value="<?php echo $email; ?>" required>
	        
	      <!-- Password -->
	        <input type="password" id="Password" class="form-control mb-4" name="pass" placeholder="Password" required>
	      

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
	      <input type="submit"  class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="login">

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
