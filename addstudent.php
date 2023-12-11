<?php
   require_once "autoload.php";
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>college Management System</title>
	<!-- ALL CSS FILES  -->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/addstudent.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    <?php
      if(isset($_POST['add'])){
          $roll_no=$_POST['roll_no'];
          $fname=$_POST['fname'];
          $lname=$_POST['lname'];
          $mname=$_POST['mname'];
          $faname=$_POST['faname'];
          $dob=$_POST['dob'];
          $email=$_POST['email'];
          $pass=$_POST['pass'];
          $mobile=$_POST['mobile'];
          $class=$_POST['class'];
          $address=$_POST['address'];
          $gender=NULL;
          if(isset($_POST['gender'])){
              $gender=$_POST['gender'];
          }
          if(empty($_POST['roll_no']) || empty($_POST['fname'])|| empty($_POST['lname'])||empty($_POST['mname'])||empty($_POST['faname'])||empty($_POST['dob']) || empty($_POST['email'])||empty($_POST['mobile'])|| empty($_POST['class'])||empty($_POST['address'])||empty($_POST['gender'])){
              $msg=validate('All fields are requird','danger');
          }else if (checkemail($email) == false) {
			$msg = validate('Invalid email address ','danger');
		} else if (ceilcheck($mobile)== false) {
			$msg = validate('Invalid Cell number','danger');
		}else{
            $sql = "INSERT INTO `students` (`roll_no`, `fname`, `lname`, `mother_name`, `father_name`, `dob`, `email`, `password`, `mobile`, `class`, `address`, `gender`) VALUES ('$roll_no', '$fname', '$lname', '$mname', '$faname', '$dob', '$email', '$pass', '$mobile', '$class', '$address', '$gender')";

            $insert=mysqli_query(connect(),$sql);
            if($insert){
            $msg=validate('Add Student Successful','success');
            }
        }
      } 
    ?>
	<section>
        <div class="row" style="background-color:black;">
            <div class="col-md-6 mt-2">
                <h3 style="font-size:25px;color:orange">VidhyaPrarambha</h3>
            </div>
            <div class="col-md-6">
                    <nav class="navbar  navbar-expand-lg navbar-light">
         
                        <div class="collapse navbar-collapse heade" id="navbarNavDropdown">
                           <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                       <a class="nav-link nav1" href="#"><i class="fas fa-user-shield"></i> Admin Panel</a>
                                   </li>
               
                                   <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle nav2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Account
                                   </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item log" href="logout.php">Logout</a>
                
                        </div>
                       </li>
                    </ul>
                </div>
      
               </nav>
            </div>
        </div>

   </section>
   <section>
       <div class="row">
           <div class="col-md-2 text-start ml-2 left">
           <h2><a href="admindashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard </a></h2><hr>
           <a href="enrollment.php"><i class="fas fa-user-plus"></i> New Entrollment</a><hr><br>
                <a href="addstudent.php"><i class="fas fa-user-plus"></i> Add Student</a><hr><br>
               <a href="editstudent.php"><i class="fas fa-user-edit"></i> Edit Student</a><hr><br>
               <a href="searchstudent.php"><i class="fas fa-search"></i> Search Student</a><hr><br>
               <a href="deletestudent.php"><i class="fas fa-user-minus"></i> Delete Student</a><hr><br>
               <a href="addresult.php"><i class="fas fa-plus-circle"></i> Add Result</a><hr><br>
               <a href="searchresult.php"><i class="fas fa-search"></i> Search Result</a><hr><br>
               <a href="deleteresult.php"><i class="fas fa-user-minus"></i> Delete Result</a><hr><br>
               <a href="payfee.php"><i class="fas fa-money-bill-wave"></i> Pay fee</a><hr><br>
               <a href="#"><i class="fas fa-money-check"></i> who has paid?</a><hr><br>
               <a href="#"><i class="fas fa-user-minus"></i> Who hasn't paid?</a>
           </div>
           
           <div class="col-md-7 offset-md-3 ml-5 addstudent">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center" style="	color:#2196f3;font-weight:600">Add Student</h3><hr><br>
                            <?php 
                                  if(isset($msg)){
                                      echo $msg;
                                  }
                            ?>
                <form action="addstudent.php" method="POST" entype="multipart/form-data">
					<div class="form-group">
						<label for="">Roll No</label>
						<input name="roll_no" class="form-control"  type="text" >
					</div>
					<div class="form-group">
						<label for="">First Name</label>
						<input name="fname"class="form-control"  type="text" >
					</div>
					<div class="form-group">
						<label for="">Last Name</label>
						<input name="lname" class="form-control" type="text" >
					</div>
					<div class="form-group">
						<label for="">Mother's Name</label>
						<input name="mname" class="form-control"  type="text" >
					</div>
                    <div class="form-group">
						<label for="">Father's Name</label>
						<input name="faname" class="form-control"  type="text" > 
					</div>
                    <div class="form-group">
						<label for="">Date Of Birth</label>
						<input name="dob" class="form-control"  type="date" >
					</div>
                    <div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control"  type="text" >
					</div>
                    <div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control"  type="password">
					</div>
                    <div class="form-group">
						<label for="">Mobile</label>
						<input name="mobile" class="form-control" type="text" >
					</div>
                    <div class="form-group">
						<label for="">Faculty</label>
						<input name="class" class="form-control" type="text" >
					</div>
                    <div class="form-group">
						<label for="">Address</label>
						<input name="address" class="form-control" type="text" >
					</div>
					<div class="form-group">
						<label for="">Gender</label><br>
						<input name="gender"id="Male" value="Male" type="radio"><label for="Male">Male</label>
						<input name="gender"id="Female" value="Female"type="radio"><label for="Female">Female</label>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit"name="add" value="Add Student">
					</div><hr>
					<a class="d-block text-center" href="admindashboard.php">Back to Admin Dashboard</a>
				</form>
                        </div>
                    </div>
       </div>

</section>
    


	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>