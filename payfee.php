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
	<link rel="stylesheet" href="assets/css/payfee.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    <?php 

      if(isset($_POST['add'])){
          $roll=$_POST['roll'];
          $status=NULL;
          if(isset($_POST['status'])){
            $status=$_POST['status'];
          }
         connect()->query("UPDATE students SET fee_status='$status' where roll_no='$roll'");
          
      }




      ?>
	<section>
        <div class="row" style="background-color:black;">
            <div class="col-md-6 mt-2">
                <h3 style="font-size:25px;color:orange" class="text-center">VidhyaPrarambha</h3>
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
               <a href="paidstudent.php"><i class="fas fa-money-check"></i> who has paid?</a><hr><br>
               <a href="nonpaidstudent.php"><i class="fas fa-user-minus"></i> Who hasn't paid?</a>
           </div>
          <div class="col-md-7 offset-md-1 mt-3" >
          <div class="card w-50 shadow" style="display:block;margin:0 auto">
              <div class="card-body text-center">
              <h3 class="text-center" style="	color:#2196f3;font-weight:600">Pay Fees</h3><hr><br>
                  
                  <form action="" method="POST">
                  <div class="form-group">
						<label for="">Roll No</label>
						<input name="roll" class="form-control w-50" style="display:block;margin:0 auto" type="text">
					</div>
					<div class="form-group">
						<label for="">Status of Pay Fee</label><br>
						<input name="status" id="one" value="1" type="radio"><label for="one">True</label>
						<input name="status" id="two" value="0"type="radio"><label for="two">False</label>
					</div>
                    <div class="form-group">
						<input class="btn btn-primary" type="submit"name="add" value="Submit">
					</div>
                  </form>
                  
              </div>
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