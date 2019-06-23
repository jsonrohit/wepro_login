<?php


$conn = mysqli_connect("localhost","wepro","nitin123","demo");


if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$father = $_POST['father'];
	$email = $_POST['email'];
// duplicate email
	$duplicate= mysqli_query($conn, "SELECT * FROM form where email='$email'");
	if (mysqli_num_rows($duplicate) > 0)
	{
	echo "Email id already exists.";
	}
	else
	{
// duplicate email
	$pass = $_POST['pass'];
	$sql = (mysqli_query($conn, "INSERT INTO form (name,father,email,pass) VALUES('$name','$father','$email','$pass')")) or die('s');
		if ($sql)
	{
		echo "data insert successfully";
		// header('Refresh: 2; URL=login.php');
		header('location:login.php');
	}
	else
	{
		echo ' data not insert';
	}
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
	    <strong>Registion Form</strong>
	  
	  </h5>

	  <!--Card content-->
	  <div class="card-body px-lg-5 pt-0 ">

	  	
	    <!-- Form -->
	    <form class="text-center mt-4" style="color: #757575;" action="" method="post">

	    	<!-- name -->
	       	<input type="text" id="name" class="form-control mb-4" name="name" placeholder="Name" value="<?php echo $name; ?>"required>

			<!-- father -->
	        <input type="text" id="Father" class="form-control mb-4" name="father" placeholder="Father" value="<?php echo $father; ?>" required>
	       


	      <!-- Email -->
	        <input type="email" id="E-mail" class="form-control mb-4" name="email"  placeholder="E-mail" value="<?php echo $email; ?>" required>
	        
	      <!-- Password -->
	        <input type="password" id="Password" class="form-control mb-4" name="pass" placeholder="Password" required>
	      

	      <div class="d-flex justify-content-around">
	        <div>
	          <!-- Remember me -->
	          <div class="">
	         	 <p>already member?
	        		<a href="login.php">LogIn</a>
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