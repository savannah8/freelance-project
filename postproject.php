<?php 
session_start(); 
include "db_conn.php";

$jobtitle = $_POST['jobtitle'];
$category = $_POST['category'];
$compensation = $_POST['compensation'];
$requirements = $_POST['requirements'];

$sql = "INSERT INTO `jobs` (job_title, job_category, job_description, job_compensation)
VALUES ('$jobtitle', '$category', '$requirements','$compensation')";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: home.php?success=Your account has been created successfully");
 exit();
}else {
       header("Location: home.php?error=unknown error occurred&$user_data");
    exit();
}
?>