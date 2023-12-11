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
           <div class="col-md-2 text-start ml-2 left" style="padding-bottom:265px;" >
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
           <div class="col-md-7 offset-md-1 text-center edit mt-2">
           <h2>Search student by Roll Number</h2><br>
            <form action="" method="POST">
                <div class="form-group">
                    <p style="color:#8a6600;font-weight:600">Search by Roll No: </p><input type="text" class="w-25;margin-left:120px" name="roll" class="form-control">
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
                    <div class="card card1">
                        <div class="card-body padding-bottom:300px">
                            <h3 class="text-center" style="	color:#2196f3;">Student's Information</h3><hr><br>
                            <form action="" method="post">
                <table class="table" >
  <thead>
    <tr>
      <th scope="col">Roll Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
      <th scope="col">Faculty</th>
      <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    <tr>
        <th scope="row"><?php echo $edit_id->roll_no; ?></th>
        <input type="hidden" name="id">
      <td> <?php echo $edit_id->fname; ?></td>
      <td><?php echo $edit_id->lname; ?></td>
      <td><?php echo $edit_id->mother_name; ?></td>
      <td><?php echo $edit_id->father_name; ?></td>
      <td><?php echo $edit_id->dob; ?></td>
      <td><?php echo $edit_id->email; ?></td>
      <td><?php echo $edit_id->password; ?></td>
      <td><?php echo $edit_id->mobile; ?></td>
      <td><?php echo $edit_id->address; ?></td>
      <td><?php echo $edit_id->class; ?></td>
      <td><a href="deletestudent2.php" onclick="deleteRecord($row['id'])" class="btn btn-danger">Delete</a></td>
    </tr>
  </tbody>
</table>
</form>
</div>
<a class="d-block text-center bg-dark" href="admindashboard.php">Back to Admin Dashboard</a>
</div>

                      <?php
                   }
               }    

            // if(isset($_POST['delete'])){
            //     $roll=$_POST['roll_no'];
            
            //     connect()->query("DELETE FROM `students` WHERE `roll_no` LIKE '$roll'");
                
            // } 
    



            ?>

      
           </div>
       </div>
</section>

    


	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
    <script>
    function deleteRecord(id) {
        var confirmDelete = confirm("Are you sure you want to delete this record?");
        if (confirmDelete) {
            window.location.href = "deletestudent2.php?id=" + id;
        }
    }
    </script>
</body>
</html>