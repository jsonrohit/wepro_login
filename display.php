
<?php
include('session.php');
$conn = mysqli_connect("localhost","wepro","nitin123","demo");


   $sql = mysqli_query($conn, "SELECT * FROM form");
// $sql = mysqli_query($conn, "SELECT name, father, email, COUNT(*) as CNT FROM form GROUP BY name, father, email; HAVING COUNT(*)  = 1";
   ?>
   <div class="row mt-4">
<div class="col-md-1">
  </div>
  <div class="col-md-3 mt-5">
    <!-- <a role="button" class="btn btn-primary mb-5" href="display.php">Display</a> -->
    <a role="button" class="btn btn-success mb-5" href='changepass.php'>Change password</a><br>
    <a role="button" class="btn btn-danger mb-5" href="logout.php">Logout</a>
  </div>
  <div class="col-md-4">
 <table class="table">
  <thead class="" style="background-color: #33b5e5; color: white;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Father</th>
      <th scope="col">Email</th>
    </tr>
  </thead>

   
    
   <?php
   while($row = mysqli_fetch_array($sql)) {
    ?>
    <tbody>
    <tr >
      <th><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['father']; ?></td>
      <td><?php echo $row['email']; ?></td>
    </tr> 


<?php
   } 
?>
</tbody>
</table>
</div>
<div class="col-md-4">
  </div>
  </div>

  
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



