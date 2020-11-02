<?php

 
$add_email_id=$_GET["add_email"];
$add_name=$_GET["add_fname"];
$add_password=$_GET["add_pass"];
echo $add_email_id;
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "users";
 
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users_details(user_id,user_fname,email_id,user_password,created_at,updated_at) VALUES(NULL, '$add_name','$add_email_id','$add_password' , current_timestamp(), current_timestamp()) ";

$result = mysqli_query($conn, $sql);
//$row=mysqli_fetch_array($result);
//var_dump($result);

if (!$result)

  {

  die('Error: ' . mysqli_connect_error());

  }

echo "1 record added";

mysqli_close($conn);

?>