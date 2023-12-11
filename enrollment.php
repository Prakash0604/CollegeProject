<?php
require_once "autoload.php";
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$uid=$_SESSION['admin'];
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
                    <div class="card enrollment">
                        <div class="card-body padding-bottom:300px">
                        <?php
// Include necessary files and initiate the session


// Handle form submission (approval or rejection)
if (isset($_POST['approve'])) {
    $studentId = $_POST['student_id'];

    // Update database with approval status
    $updateQuery = "UPDATE enrollments SET status = 'approved' WHERE id = $studentId";
    mysqli_query(connect(), $updateQuery);
    // If form is approved
    // Insert student data into the 'students' table
    $selectQuery = "SELECT * FROM enrollments WHERE id = $studentId";
    $result = mysqli_query(connect(), $selectQuery);
    $studentData = mysqli_fetch_assoc($result);

    $insertQuery = "INSERT INTO students (fname, mother_name, father_name, dob, email, mobile, class,gender)
                    VALUES (
                        '{$studentData['student_name']}', 
                        '{$studentData['mother_name']}', 
                        '{$studentData['father_name']}', 
                        '{$studentData['dob']}', 
                        '{$studentData['email']}', 
                        '{$studentData['contact_no']}', 
                        '{$studentData['applying_for']}', 
                        '{$studentData['gender']}'
                    )";
    $result=mysqli_query(connect(), $insertQuery);
    if ($result) {
        echo "<script>alert('Form Approved!');</script>";
       }
       header("Refresh:1");

    //    Delete Record
       $deleteQuery = "DELETE FROM enrollments WHERE id = $studentId";
       $result=mysqli_query(connect(), $deleteQuery);
       if ($result) {
           echo "<script>window.location.href = 'admindashboard.php';</script>";
          }
          header("Refresh:1");
   


}

if (isset($_POST['reject'])) {
    $studentId = $_POST['student_id'];

    // Update database with rejection status
    $updateQuery = "UPDATE enrollments SET status = 'rejected' WHERE id = $studentId";
    mysqli_query(connect(), $updateQuery);


    // Delete the record from the 'enrollments' table
    $deleteQuery = "DELETE FROM enrollments WHERE id = $studentId";
    $result=mysqli_query(connect(), $deleteQuery);
    if ($result) {
        echo "<script>alert('Form Rejected!');</script>";
       }
       header("Refresh:1");
    
}
// Retrieve student data
$selectQuery = "SELECT * FROM enrollments";
$result = mysqli_query(connect(), $selectQuery);

// Fetch data from the database
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

                            <h3 class="text-center" style="	color:#2196f3;">Student's Information</h3><hr><br>
                            <form action="" method="post">
                            <h2>Student Approval Panel</h2>

<table border="1" style="margin-left:80px ;">
    <tbody style="margin-left:50% ;">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Contact Number</th>
        <th>Faculty</th>
        <th>Email Address</th>
        <th>Message</th>
        <th>Action</th>
    </tr>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['student_name']; ?></td>
            <td><?php echo $student['father_name']; ?></td>
            <td><?php echo $student['mother_name']; ?></td>
            <td><?php echo $student['dob']; ?></td>
            <td><?php echo $student['gender']; ?></td>
            <td><?php echo $student['contact_no']; ?></td>
            <td><?php echo $student['applying_for']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['message']; ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="student_id" value="<?php echo $student['id']; ?>">
                    <button type="submit" name="approve" class="btn btn-primary mt-2 mb-2">Approve</button>
                    <button type="submit" name="reject" class="btn btn-danger mt-2 mb-2">Reject</button>
                </form>
            </td>
        </tr>
        </tbody>
    <?php endforeach; ?>
</table>


                                </form>
</div>
<a class="d-block text-center bg-dark" href="admindashboard.php">Back to Admin Dashboard</a>
</div>

      
           </div>
       </div>
</section>

    


	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
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