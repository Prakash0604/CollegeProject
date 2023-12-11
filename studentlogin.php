<?php  require_once "autoload.php";
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
    <link rel="stylesheet" href="assets/css/studentlogin.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
<?php 
    if(isset($_POST['add'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        if(empty($email) || empty($pass)){
            $msg=validate('All fields are required!','danger');
        }
        else{
            $login_data=authcheck('students','email',$email);
              if($login_data !== false){
                if($pass == $login_data->password){
                    $_SESSION['id']=$login_data->id;
                    $_SESSION['roll']=$login_data->roll_no;
                    $_SESSION['fname']=$login_data->fname;
                    $_SESSION['lname']=$login_data->lname;
                    $_SESSION['mname']=$login_data->mother_name;
                    $_SESSION['faname']=$login_data->father_name;
                    $_SESSION['dob']=$login_data->dob;
                    $_SESSION['email']=$login_data->email;
                    $_SESSION['password']=$login_data->password;
                    $_SESSION['mobile']=$login_data->mobile;
                    $_SESSION['class']=$login_data->class;
                    $_SESSION['address']=$login_data->address;
                    $_SESSION['gender']=$login_data->gender;
                    header('location:studentdashboard.php');
                }else{
                    $msg=validate('Password is not correct','warning');
                } 
            }else{
                $msg=validate('Email is invalid','danger');
            }
        }
    }



   ?>
    <div class="warp">
       <img style="width:500px; display:block;margin:0 auto;" src="media/logo-no-background.png" class="mt-4" alt="college-logo">
        <div class="card log">
            <div class="card-body">
                <h2 style="color:#8A6600;"class="text-center logh2">Student Login</h2>
                <?php

                     if(isset($msg)){
                       echo $msg;
                     }

                ?>
                <form action="" method="POST">
                  <div class="form-group">
                    <label style="color:#8A6600;"for="">Email</label>
                    <input name="email" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label style="color:#8A6600;" for="">Password</label>
                    <input name="pass" type="password" class="form-control">
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary me-md-2" name="add" type="submit">Login</button>
                    
                </div>
               </form>
               <hr>
               <a href="index.php" class="d-block text-center">Back to home</a>
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