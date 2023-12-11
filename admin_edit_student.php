<?php
require_once "autoload.php";
if(isset($_POST['edit'])){
    $roll_no=$_POST['roll_no'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mname=$_POST['mname'];
    $faname=$_POST['faname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $mobile=$_POST['mobile'];
    $class=$_POST['class'];
    $address=$_POST['address'];
    connect()->query("UPDATE students SET roll_no='$roll_no',fname='$fname',lname='$lname',mother_name='$mname',father_name='$faname',dob='$dob',email='$email',password='$pass',mobile='$mobile',class='$class', address='$address' where roll_no='$roll_no'");
    
}
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "editstudent.php";
</script>