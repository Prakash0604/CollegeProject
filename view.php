<?php
   require_once "autoload.php";
   $login_data=loginuserdata('students',$_SESSION['id']);
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
	<link rel="stylesheet" href="assets/css/studentdash.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	<section>
        
        <div class="row" style="background-color:black;">
            <div class="col-md-6 mt-2">
                <h3 style="font-size:25px;color:orange" class="text-center">VidhyaPrarambha</h3>
            </div>
            <div class="col-md-6">
                    <nav class="navbar  navbar-expand-lg  navbar-light">
         
                        <div class="collapse navbar-collapse heade" id="navbarNavDropdown">
                           <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                       <a class="nav-link nav1" href="#"><i class="fas fa-user-graduate"></i> Student Panel</a>
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
    <div class="navv">
   <ul class="nav justify-content-center">
  <li class="nav-item ml-5">
    <a class="nav-link active" href="studentdashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
  </li>
  <li class="nav-item ml-5">
    <a class="nav-link" href="view.php"><i class="fas fa-eye"></i> View Details</a>
  </li>
  <li class="nav-item ml-5">
    <a class="nav-link" href="sedit.php"><i class="fas fa-user-edit"></i> Edit Details</a>
  </li>
  <li class="nav-item ml-5">
    <a class="nav-link" href="sresult.php"><i class="fas fa-search"></i> Show Result</a>
  </li>
</ul>
</div>
  </section>
 <section>
 <?php 

if(isset($_GET['id'])){
  $edit_id=$_GET['id'];
  $data=connect()->query("SELECT * from students where id='$edit_id'");
  $login_data=$data->fetch_object();
}
?>
     <div class="container">
         <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center" style="	color:#2196f3;font-weight:600">View Details</h3><hr><br>
                <form action="" method="POST" entype="multipart/form-data">
					<div class="form-group">
						<label for="">Roll No</label>
						<input name="roll_no" class="form-control" value="<?php echo $login_data->roll_no; ?>" type="text" disabled>
					</div>
					<div class="form-group">
						<label for="">First Name</label>
						<input name="fname"class="form-control" value="<?php echo $login_data->fname;  ?>" type="text" disabled>
					</div>
					<div class="form-group">
						<label for="">Last Name</label>
						<input name="lname" class="form-control" value="<?php echo $login_data->lname; ?>" type="text" disabled>
					</div>
					<div class="form-group">
						<label for="">Mother's Name</label>
						<input name="mname" class="form-control" value="<?php echo $login_data->mother_name; ?>" type="text" disabled>
					</div>
                    <div class="form-group">
						<label for="">Father's Name</label>
						<input name="faname" class="form-control"  value="<?php echo $login_data->father_name; ?>" type="text" disabled>
					</div>
                    <div class="form-group">
						<label for="">Date Of Birth</label>
						<input name="dob" class="form-control" value="<?php echo $login_data->dob; ?>"  type="date" disabled>
					</div>
                    <div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo $login_data->email; ?>"  type="text" disabled>
					</div>
                    <div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control" value="<?php echo $login_data->password; ?>"  type="text" disabled>
					</div>
                    <div class="form-group">
						<label for="">Mobile</label>
						<input name="mobile" class="form-control" value="<?php echo $login_data->mobile; ?>" type="text" disabled>
					</div>
                    <div class="form-group">
						<label for="">Faculty</label>
						<input name="class" class="form-control" value="<?php echo $login_data->class;  ?>" type="text" disabled>
					</div>
          <div class="form-group">
						<label for="">Address</label>
						<input name="address" class="form-control" value="<?php echo $login_data->address; ?>" type="text" disabled>
					</div>
					
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