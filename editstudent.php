<?php
   require_once "autoload.php";
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>College Management System </title>
	<!-- ALL CSS FILES  -->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/editstudentcss.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    
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
           <div class="col-md-2 text-start ml-2 left"style="padding-bottom:265px;">
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
           <div class="col-md-7 offset-md-1 text-center edit mt-2" >
           <h2>Edit student by Student ID</h2><br>
            <form action="" method="POST">
                <div class="form-group">
                    <p style="color:#8a6600;font-weight:600">Search by Student ID: </p><input type="text" class="w-50;margin-left:120px" name="roll" class="form-control">
                    <input type="submit" name="add" value="Search" class="btn btn-info">
            
                </div> 
            </form>
            <?php

               if(isset($_POST['add'])){
                   $roll=$_POST['roll'];

                   $edit=connect()->query("SELECT * FROM students WHERE id LIKE '$roll'");
                   while($edit_id=$edit->fetch_object())
                   {
                       ?>
                    <div class="card">
                        <div class="card-body" >
                            <h3 class="text-center" style="	color:#2196f3;font-weight:600">Edit Student</h3><hr><br>
                <form action="admin_edit_student.php" method="POST" entype="multipart/form-data">
					<div class="form-group">
						<label for="">Roll No</label>
						<input name="roll_no" class="form-control" value="<?php echo $edit_id->roll_no; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">First Name</label>
						<input name="fname"class="form-control" value="<?php echo $edit_id->fname; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Last Name</label>
						<input name="lname" class="form-control" value="<?php echo $edit_id->lname; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Mother's Name</label>
						<input name="mname" class="form-control" value="<?php echo $edit_id->mother_name; ?>" type="text">
					</div>
                    <div class="form-group">
						<label for="">Father's Name</label>
						<input name="faname" class="form-control"  value="<?php echo $edit_id->father_name; ?>" type="text">
					</div>
                    <div class="form-group">
						<label for="">Date Of Birth</label>
						<input name="dob" class="form-control" value="<?php echo $edit_id->dob; ?>"  type="date">
					</div>
                    <div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo $edit_id->email; ?>"  type="text">
					</div>
                    <div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control" value="<?php echo $edit_id->password; ?>"  type="password">
					</div>
                    <div class="form-group">
						<label for="">Mobile</label>
						<input name="mobile" class="form-control" value="<?php echo $edit_id->mobile; ?>" type="text">
					</div>
                    <div class="form-group">
						<label for="">Faculty</label>
						<input name="class" class="form-control" value="<?php echo $edit_id->class; ?>" type="text">
					</div>
                    <div class="form-group">
						<label for="">Address</label>
						<input name="address" class="form-control" value="<?php echo $edit_id->address; ?>" type="text">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="edit" value="Edit Student">
					</div><hr>
					<a class="d-block text-center" href="admindashboard.php">Back to Admin Dashboard</a>
				</form>
                        </div>
                    </div>

                      <?php
                   }
               }


            ?>

      
           </div>
       </div>
</section>

    


	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>