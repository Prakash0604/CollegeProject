<?php
   require_once "autoload.php";
   error_reporting(E_ALL);
ini_set('display_errors', 1);


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
    <link rel="stylesheet" href="assets/css/addresult.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    <?php

     if(isset($_POST['submit'])){
         $cprogram1=$_POST['cp1'];
         $cprogram2=$_POST['cp2'];
         $cprogram3=$_POST['cp3'];
         $cprogram4=$_POST['cp4'];
         $cnetwork1=$_POST['cn1'];
         $cnetwork2=$_POST['cn2'];
         $cnetwork3=$_POST['cn3'];
         $cnetwork4=$_POST['cn4'];
         $machine1=$_POST['ml1'];
         $machine2=$_POST['ml2'];
         $machine3=$_POST['ml3'];
         $machine4=$_POST['ml4'];
         $graphic1=$_POST['cg1'];
         $graphic2=$_POST['cg2'];
         $graphic3=$_POST['cg3'];
         $graphic4=$_POST['cg4'];
         $java1=$_POST['j1'];
         $java2=$_POST['j2'];
         $java3=$_POST['j3'];
         $java4=$_POST['j4'];
         $roll=$_POST['roll'];

         connect()->query("INSERT INTO results (roll_no,cp1,cp2,cp3,cp4,cn1,cn2,cn3,cn4,ml1,ml2,ml3,ml4,cg1,cg2,cg3,cg4,j1,j2,j3,j4) VALUES('$roll','$cprogram1','$cprogram2','$cprogram3','$cprogram4','$cnetwork1','$cnetwork2','$cnetwork3','$cnetwork4','$machine1','$machine2','$machine3','$machine4','$graphic1','$graphic2','$graphic3','$graphic4','$java1','$java2','$java3','$java4')");
     }




    ?>
    
	<div class="container">
        <div class="heading">
            <h2 style="margin-top:60px;color:#29ffeba6;"class="text-center">Enter Marks of the Student</h2>
            <span style="width:390px; border:2px solid white;margin:0 auto;display:block;"></span>
        </div>
        <div class="table1">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">First Year Exam</th>
      <th scope="col">Second Year Exam</th>
      <th scope="col">Third Year Exam</th>
      <th scope="col">Fourth Year Exam</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <form action="" method="POST">
      <td style="font-weight:600">C-Programming</td>
      <td><input type="text" name="cp1"></td>
      <td><input type="text" name="cp2"></td>
      <td><input type="text" name="cp3"></td>
      <td><input type="text" name="cp4"></td>
    </tr>
    <tr>
      <td style="font-weight:600">Computer Networking</td>
      <td><input type="text" name="cn1"></td>
      <td><input type="text" name="cn2"></td>
      <td><input type="text" name="cn3"></td>
      <td><input type="text" name="cn4"></td>
    </tr>
    <tr>
      <td style="font-weight:600">Machine Learning</td>
      <td><input type="text" name="ml1"></td>
      <td><input type="text" name="ml2"></td>
      <td><input type="text" name="ml3"></td>
      <td><input type="text" name="ml4"></td>
    </tr>
    <tr>
      <td style="font-weight:600">Computer Graphics</td>
      <td><input type="text" name="cg1"></td>
      <td><input type="text" name="cg2"></td>
      <td><input type="text" name="cg3"></td>
      <td><input type="text" name="cg4"></td>
    </tr>
    <tr>
      <td style="font-weight:600">Java</td>
      <td><input type="text" name="j1"></td>
      <td><input type="text" name="j2"></td>
      <td><input type="text" name="j3"></td>
      <td><input type="text" name="j4"></td>
    </tr>

  </tbody>
</table>
<div class="rollno">
    <span style="font-weight:700;color:white">Roll No: </span><input class="w-25" type="text" placeholder="Enter roll no.." name="roll"><br>
    <input type="submit" name="submit" class="w-25 mt-3 btn btn-info" style="margin-left:60px; font-weight:600" value="Add Result">
</div>
</form>
        </div>
    </div>
    <a href="admindashboard.php" class="d-block text-center text-primary ml-5 mt-3" style="font-size:20px;font-weight:600;">Back to Admin Dashboard</a>
    

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>