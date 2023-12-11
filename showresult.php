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
	<link rel="stylesheet" href="assets/css/editstudentcss.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body class="showstudent">
    
    <div class="container">
	<h3 style="text-align:center;margin-top:70px;"><img src="media/logo-no-background.png" alt="" srcset="" width="40%" class="mb-3"><h3><hr style="width:50%;display:blok;margin:0 auto;">
    </div>
    <div class="container">
        <div class="row">
        <?php

            if(isset($_POST['add'])){
                $roll=$_POST['roll'];

                $edit=connect()->query("SELECT students.roll_no,father_name,fname,lname,dob,cp1,cp2,cp3,cp4,cn1,cn2,cn3,cn4,ml1,ml2,ml3,ml4,cg1,cg2,cg3,cg4,j1,j2,j3,j4 FROM students INNER JOIN results where students.roll_no='$roll' AND results.roll_no='$roll'");
                while($edit_id=$edit->fetch_object())
            {
        ?>
            <div class="col-md-6"style="padding-left:200px;">
                <h6>First Name:<?php echo $edit_id->fname;?></h6>
                <h6>Last Name:<?php echo $edit_id->lname;?></h6>
                <h6>Father's Name:<?php echo $edit_id->father_name ?> </h6>

            </div>
            <div class="col-md-6"style="padding-left:170px;">
                <h6>Roll No: <?php echo $edit_id->roll_no ?></h6>
                <h6>Date of Birth: <?php echo $edit_id->dob ?></h6>

            </div><hr style="width:70%;display:blok;margin:0 auto;">
            <?php
            }
        }
        ?>
        </div>
    </div>
   <div class="container">
   <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['add'])){
    $roll=$_POST['roll'];

    $edit=connect()->query("SELECT students.roll_no,father_name,fname,lname,dob,cp1,cp2,cp3,cp4,cn1,cn2,cn3,cn4,ml1,ml2,ml3,ml4,cg1,cg2,cg3,cg4,j1,j2,j3,j4 FROM students INNER JOIN results where students.roll_no='$roll' AND results.roll_no='$roll'");
    while($edit_id=$edit->fetch_object())
{
?>
           <table class="table mt-5 ml-4 mb-3">
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">First Year</th>
      <th scope="col">Second Year</th>
      <th scope="col">Third Year</th>
      <th scope="col">Fourth Year</th>
      <th scope="col">Total Marks</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td style="font-weight:600">C-Programming</td>
      <td><?php echo $edit_id->cp1;?></td>
      <td><?php echo $edit_id->cp2;?></td>
      <td><?php echo $edit_id->cp3;?></td>
      <td><?php echo $edit_id->cp4;?></td>
      <td><?php $num1=$edit_id->cp1;
      $num2=$edit_id->cp2;
      $num3=$edit_id->cp3;
      $num4=$edit_id->cp4;
      $num=$num1+$num2+$num3+$num4;
      if($num<=20){
        echo "NG";
      }elseif($num<=20 || $num<=45){
        echo "C+";
      }elseif($num>=45 || $num>=20){
        echo "B+";
      }elseif($num>=70 || $num<=85){
        echo "A";
      }elseif($num>=86 || $num<=100){
        echo "A+";
      }
      elseif($num>100){
        echo  "Invalid Numerica Value";
      }
      else  {
        echo"Invalid";
      }
      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600">computer Network</td>
      <td><?php echo $edit_id->cn1;?></td>
      <td><?php echo $edit_id->cn2;?></td>
      <td><?php echo $edit_id->cn3;?></td>
      <td><?php echo $edit_id->cn4;?></td>
      <td><?php $num1=$edit_id->cn1;
      $num2=$edit_id->cn2;
      $num3=$edit_id->cn3;
      $num4=$edit_id->cn4;
      $num=$num1+$num2+$num3+$num4;
      if($num<=20){
        echo "NG";
      }elseif($num>=20 || $num<=45){
        echo "C+";
      }elseif($num>=45 || $num<=70){
        echo "B+";
      }elseif($num>=70 || $num<=85){
        echo "A";
      }elseif($num>=86 || $num<=100){
        echo "A+";
      }
      else{
        echo  "Invalid Numerica Value";
      }
      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600">Machine Learning</td>
      <td><?php echo $edit_id->ml1;?></td>
      <td><?php echo $edit_id->ml2;?></td>
      <td><?php echo $edit_id->ml3;?></td>
      <td><?php echo $edit_id->ml4;?></td>
      <td><?php $num1=$edit_id->ml1;
      $num2=$edit_id->ml2;
      $num3=$edit_id->ml3;
      $num4=$edit_id->ml4;
      $num= $num1+$num2+$num3+$num4;
      if($num<=20){
        echo "NG";
      }elseif($num>=20 || $num<=45){
        echo "C+";
      }elseif($num>=45 || $num<=70){
        echo "B+";
      }elseif($num>=70 || $num<=85){
        echo "A";
      }elseif($num>=86 || $num<=100){
        echo "A+";
      }
      else{
        echo  "Invalid Numerica Value";
      }

      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600">Computer Graphics</td>
      <td><?php echo $edit_id->cg1;?></td>
      <td><?php echo $edit_id->cg2;?></td>
      <td><?php echo $edit_id->cg3;?></td>
      <td><?php echo $edit_id->cg4;?></td>
      <td><?php $num1=$edit_id->cg1;
      $num2=$edit_id->cg2;
      $num3=$edit_id->cg3;
      $num4=$edit_id->cg4;
      $num= $num1+$num2+$num3+$num4;
      if($num<=20){
        echo "NG";
      }elseif($num>=20 || $num<=45){
        echo "C+";
      }elseif($num>=45 || $num<=70){
        echo "B+";
      }elseif($num>=70 || $num<=85){
        echo "A";
      }elseif($num>=86 || $num<=100){
        echo "A+";
      }
      else{
        echo  "Invalid Numerica Value";
      }

      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600"> Java</td>
      <td><?php echo $edit_id->j1;?></td>
      <td><?php echo $edit_id->j2;?></td>
      <td><?php echo $edit_id->j3;?></td>
      <td><?php echo $edit_id->j4;?></td>
      <td><?php $num1=$edit_id->j1;
      $num2=$edit_id->j2;
      $num3=$edit_id->j3;
      $num4=$edit_id->j4;
      $num= $num1+$num2+$num3+$num4;
      if($num<=20){
        echo "NG";
      }elseif($num>=20 || $num<=45){
        echo "C+";
      }elseif($num>=45 || $num<=70){
        echo "B+";
      }elseif($num>=70 || $num<=85){
        echo "A";
      }elseif($num>=86 || $num<=100){
        echo "A+";
      }
      else{
        echo  "Invalid Numerica Value";
      }

      
      
      
      ?></td>
    </tr>

  </tbody>
     
    </table>
    
    <?php
            }
        }
        ?>
    
   </div>
	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>