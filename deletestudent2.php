<?php
// Include database connection file
require_once "autoload.php";


// Check if the ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the deletion query
    $delete_query = "DELETE FROM your_table WHERE id = $id";
    $result = mysqli_query($conn, $delete_query);

    // Check if the deletion was successful
    if ($result) {
        echo "<script>alert('Record deleted successfully.');</script>";
    } else {
        echo "<script>alert('Error deleting record.');</script>";
    }
}

// Redirect back to the main page
echo "<script>window.location.href = 'admindashboard.php';</script>";
?>
