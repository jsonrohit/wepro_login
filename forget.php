<?php 
$conn = mysqli_connect("localhost","wepro","nitin123","demo");
    if(isset($_POST['submit'])) {
        //keep it inside
        // $name=$_POST['name'];
        $email=$_POST['email'];

        $query = mysqli_query($conn,"SELECT * from form where email='$email'") or die(mysqli_error($conn)); 
        if ($row = mysqli_num_rows($query) == 1) {  
          $sql = mysqli_query($conn, "SELECT * FROM form where email='$email'") or die(mysqli_error($conn));
          $row = (mysqli_fetch_array($sql));
          echo "your old password is".':'.' '.$row['pass'];
        } else {
            echo 'No user exist with this email id';
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
        <strong>Forget Password</strong>
      
      </h5>

      <!--Card content-->
      <div class="card-body px-lg-5 pt-0 ">

        
        <!-- Form -->
        <form class="text-center mt-4" style="color: #757575;" action="" method="post">

            <!-- name -->
            <!-- <input type="text" id="name" class="form-control mb-4" name="name" placeholder="Name"required> -->

          <!-- Email -->
            <input type="email" id="E-mail" class="form-control mb-4" name="email"  placeholder="E-mail" value="<?php echo $email; ?>" required>
            
          

          <div class="d-flex justify-content-around">
            <div>
              <!-- Remember me -->
              <div class="">
                 <!-- <p>already member?
                    <a href="">LogIn</a>
                 </p> -->
              </div>
            </div>
            <div>
              <!-- Forgot password -->
              <a href="login.php">if Remember password?</a>
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


