<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>College Management System</title>
	<!-- ALL CSS FILES  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body style="background-color:white;">
	
    <section style="background-color:black"class="header">
       <nav class="navbar  navbar-expand-lg navbar-light bg-black">
         <div class="container">
           <div class="col-md-6 col-12">
           <a class="navbar-brand" href="#"><img style="width:50%"src="media/logo-no-background.png"></a>
            </div>
            <div class="col-md-6 col-12">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto mt-1">
                 <li class="nav-item">
                    <a class="nav-link nav2" href="index.php">Home</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link nav2" href="about_us.php">About us</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link nav2" href="contact_us.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav2" href="admit.php">Admission Detail</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item log" href="adminlogin.php">Admin Login</a>
                    <a class="dropdown-item log" href="studentlogin.php">Student Login</a>
                    </div>
                </li>
              </ul>
           </div>
           </div>
       </div>
    </nav>

  <!-- background image section start -->
  <section class="background">
       <!-- <img style="width:10%"src="" alt="background"> -->
  </section>
  <?php
   require_once "autoload.php";
// Assuming you have a database connection established
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['enroll'])) {
    // Get form data
    $studentName = $_POST['stu_name'];
    $fatherName = $_POST['stu_father'];
    $motherName = $_POST['stu_mother'];
    $dob = $_POST['stu_dob'];
    $gender= $_POST['gender'];
    $contactNo = $_POST['contact'];
    $applyingFor = $_POST['faculty'];
    $applyingYear= $_POST['year'];
    $email= $_POST['email'];
    $message = $_POST['message'];

    // ... (repeat for other form fields)

    // Insert data into the database
    $insertQuery = "INSERT INTO enrollments (student_name, father_name, mother_name, dob, gender, contact_no, applying_for, applying_year, email, message) 
                    VALUES ('$studentName', '$fatherName', '$motherName', '$dob', '$gender', '$contactNo', '$applyingFor', $applyingYear, '$email', '$message')";
    $result = mysqli_query(connect(), $insertQuery);

    if ($result) {
        echo "<script>alert('Form submitted successfully!');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

  <section class="admit-form" style="background-color:white">
      <div class="container">
          <div class="row">
              <div class="col-md-8 offset-2">
              <form action="" style="margin-top:40px;" method="post">
					<div class="form-group">
						<label for="">Student's Name<span style="color:red">*</span></label>
						<input  style="border:2px solid #88C83C"class="form-control" type="text" name="stu_name" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="">Father’s Name<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C" class="form-control" type="text" name="stu_father" placeholder="Father's name">
					</div>
					<div class="form-group">
						<label for="">Mother's Name<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C"class="form-control" type="text" name="stu_mother" placeholder="Mother's name">
					</div>
					<div class="form-group" style="width:45%">
						<label for="">Date of Birth<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C" class="form-control" name="stu_dob" type="date">
					</div>
                    <div class="form-group" style="width:50%;float:right;margin-top:-85px;">
                    <label for="cars">Gender<span style="color:red">*</span></label>

                        <select style="border:2px solid #88C83C" name="gender" class="form-control"id="gender">
                        <option  name="male">Male</option>
                        <option name="female">Female</option>
                        <option name="other">Other</option>
                     
                        </select>
					</div>

                    <div class="form-group">
						<label for="">Contact No<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C"name="contact" class="form-control" type="text" placeholder="Contact Number">
					</div>
                    <div class="form-group" style="width:47%">
                    <label for="cars">Applying for which grade? <span style="color:red">*</span></label>

                        <select style="border:2px solid #88C83C"name="faculty" class="form-control"id="cars">
                        <option value="bca">BCA</option>
                        <option value="bscsit">BSCSIT</option>
                        <option value="bhchons">BHC.Hons</option>
                        <option value="bpharma">B.Pharamacy</option>
                        <option value="bhm">BHM</option>
                        <option value="btech">B.Tech</option>
                        <option value="nursing">Nursing</option>
                        <option value="civil">B.Civil</option>
                        <option value="art">B.Arts</option>

                     
                        </select>
					</div>
                    <div class="form-group" style="width:50%;float:right;margin-top:-85px;">
                    <label for="cars">Applying for which year?<span style="color:red">*</span></label>

                        <select name="year"style="border:2px solid #88C83C" class="form-control"id="cars">
                        <option value="2002">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                     
                        </select>
					</div>
                   
					<div class="form-group">
						<label for="">Email<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C" name="email" class="form-control" placeholder="Email" type="text">
					</div>
                    <div class="form-group">
						<label for="">Message<span style="color:red">*</span></label>
						<textarea style="border:2px solid #88C83C" name="message"  class="form-control rounded-0" placeholder="Message" rows="5"></textarea>
					</div>
					
					<div class="form-group">
						<input class="btn-b" type="submit" name="enroll" value="Sign Up">
					</div>
				</form>

              </div>
          </div>
      </div>
  </section>
  
 <!-- footer-start -->
<section class="mt-3">
<div class="container">
  <div class="row">
    <div class="col-md-7">
    <p class="text-white"> 2023 VidhyaPrarambha &#127183 Made with &#128151 in Nepal. Powered By  | Dipak & Prakash </p>
      
    </div>
    <div class="col-md-5 text-center">
    <a  target="_blank" href="https://www.facebook.com/"><i style="color: #fff;" class="fab fa-facebook"></i></a>
    <a  target="_blank" href="https://www.twitter.com/"><i style="color: #fff;" class="fab fa-twitter"></i></a>
    <a  target="_blank" href="https://www.youtube.com/"><i style="color: #fff;" class="fab fa-youtube"></i></a>
    <a  target="_blank" href="https://mail.google.com/"> <i style="color: #fff;" class="fas fa-envelope"></i></a> 
    </div>
  </div>
</div>
</scection>

<!-- footer-end -->
  


	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>