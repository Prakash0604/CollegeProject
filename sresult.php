<?php
   require_once "autoload.php";
   
   $login_data=loginuserdata('students',$_SESSION['roll']);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>College ManagementSystem </title>
	<!-- ALL CSS FILES  -->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/sresult.css">
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
     <div class="container">
         
                        <h3 class="text-center" style="margin-top:30px;color:#2196f3;font-weight:600">Show Results</h3><br>
                        <?php 

  $data=connect()->query("SELECT * from results where roll_no='{$_SESSION['roll']}'");
  while($login_data=$data->fetch_object())
  
{
?>
                <table class="table mt-5">
  <thead>
    <tr>
      <th >Subject</th>
      <th >First Year Mark</th>
      <th >Second Year Marks</th>
      <th>Third Year Marks</th>
      <th>Fourth Year Marks</th>
      <th >Total GPA</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td style="font-weight:600">C-Programming</td>
      <td><?php echo $login_data->cp1;?></td>
      <td><?php echo $login_data->cp2;?></td>
      <td><?php echo $login_data->cp3;?></td>
      <td><?php echo $login_data->cp4;?></td>
      <td><?php $num1=$login_data->cp1;
      $num2=$login_data->cp2;
      $num3=$login_data->cp3;
      $num4=$login_data->cp4;
      $num= $num1+$num2+$num3+$num4;
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
      <td style="font-weight:600">Computer Network</td>
      <td><?php echo $login_data->cn1;?></td>
      <td><?php echo $login_data->cn2;?></td>
      <td><?php echo $login_data->cn3;?></td>
      <td><?php echo $login_data->cn4;?></td>
      <td><?php $num1=$login_data->cn1;
      $num2=$login_data->cn2;
      $num3=$login_data->cn3;
      $num4=$login_data->cn4;
      $num= $num1+$num2+$num3+$num4;
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
      <td style="font-weight:600">Machine Learning</td>
      <td><?php echo $login_data->ml1;?></td>
      <td><?php echo $login_data->ml2;?></td>
      <td><?php echo $login_data->ml3;?></td>
      <td><?php echo $login_data->ml4;?></td>
      <td><?php $num1=$login_data->ml1;
      $num2=$login_data->ml2;
      $num3=$login_data->ml3;
      $num4=$login_data->ml4;
      $num= $num1+$num2+$num3+$num4;
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
      <td style="font-weight:600">Computer Graphics</td>
      <td><?php echo $login_data->cg1;?></td>
      <td><?php echo $login_data->cg2;?></td>
      <td><?php echo $login_data->cg3;?></td>
      <td><?php echo $login_data->cg4;?></td>
      <td><?php $num1=$login_data->cg1;
      $num2=$login_data->cg2;
      $num3=$login_data->cg3;
      $num4=$login_data->cg4;
      $num= $num1+$num2+$num3+$num4;
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
      <td style="font-weight:600">Java</td>
      <td><?php echo $login_data->j1;?></td>
      <td><?php echo $login_data->j2;?></td>
      <td><?php echo $login_data->j3;?></td>
      <td><?php echo $login_data->j4;?></td>
      <td><?php $num1=$login_data->j1;
      $num2=$login_data->j2;
      $num3=$login_data->j3;
      $num4=$login_data->j4;
      $num= $num1+$num2+$num3+$num4; 
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

  </tbody>
     
    </table>
   
    <?php
   
}
?>
               
                     

     </div>
</section>


	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>