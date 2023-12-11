<?php
   require_once "autoload.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>College Management System</title>
	<!-- ALL CSS FILES  -->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/viewstudent.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    <?php 
        $get=connect()->query("SELECT * FROM students");


     ?>
    <div class="container">
    <h2 class="text-center mt-5" style="color:#0089ff;">All Student's List</h2>
    <span style="width:250px; border:2px solid white;margin:0 auto;display:block;"></span>
        <div class="card">
            <div class="card-body">
            <table class="table">
  <thead>
      <th>#</th>
      <th>Roll_No</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Father's Name</th>
      <th>Mother's Name</th>
      <th>Date Of Birth</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Class</th>
      <th>Gender</th>
      <th>Address</th>
      <th>Student ID</th>
    </tr>
  </thead>
  <?php 
  $i=1;
  while($get_all=$get->fetch_object()): ?>
    <tr>
      <td><?php echo $i ;$i=$i+1;?></td>
      <td><?php echo $get_all->roll_no; ?></td>
      <td><?php echo $get_all->fname; ?></td>
      <td><?php echo $get_all->lname; ?></td>
      <td><?php echo $get_all->father_name; ?></td>
      <td><?php echo $get_all->mother_name; ?></td>
      <td><?php echo $get_all->dob; ?></td>
      <td><?php echo $get_all->email; ?></td>
       <td><?php echo $get_all->mobile; ?></td>
      <td><?php echo $get_all->class; ?></td>
      <td><?php echo $get_all->gender; ?></td>
      <td><?php echo $get_all->address; ?></td>
      <td><?php echo $get_all->id; ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
  </div>
        </div>
        <div class="btnn">
        <a href="admindashboard.php" class="btn btn-info" type="button">Back to Admin Dashboard</a>
  </div>
    </div>


	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>