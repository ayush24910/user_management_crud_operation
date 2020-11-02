<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "users";
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbname);

$id = $_GET['id'];

//echo $id;   
$sql = "DELETE FROM users_details WHERE user_id = $id ";

$result=mysqli_query($conn, $sql);
header('location:dashboard.php');

?>

