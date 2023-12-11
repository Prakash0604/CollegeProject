<?php  require_once "autoload.php";
/*if(userlogincheck() == true){
    header('location:admindashboard.php');
}*/
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<!-- ALL CSS FILES  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/adminlogin.css">
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
            $login_data=authcheck('admin','email',$email);
              if($login_data !== false){
                if($pass == $login_data->password){
                    $_SESSION['id']=$login_data->a_id;
                    $_SESSION['name']=$login_data->name;
                    $_SESSION['email']=$login_data->email;
                    header('location:admindashboard.php');
                }else{
                    $msg=validate('Password is not correct','warning');
                } 
            }else{
                $msg=validate('Email is invalid','danger');
            }
        }
    }



   ?>
    <div class="warp ">
       <img style="width:500px; display:block;margin:0 auto;" src="media/logo-no-background.png " class="mt-4" alt="b3">
        <div class="card log">
            <div class="card-body">
                <h2 style="color:#8A6600;"class="text-center logh2">Admin Login</h2>
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
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>