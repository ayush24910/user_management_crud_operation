<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form action="edit_user.php" >
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> EmailId: </label>
 <input type="text" name="emailid"  class="form-control"> <br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>
<?php


          $dbHost = "localhost";
          $dbUsername = "root";
          $dbPassword = "";
          $dbname = "users";
          if(isset($_GET['done'])){
     
    $id = $_POST['update'];
    $email_id = $_GET['emailid'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo $id;
    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbname);
          
    $sql = " UPDATE users_details SET user_id='$id',user_email='$email_id' ,user_fname='$username', user_password='$password' where user_id=$id ";
   
    $query = mysqli_query($conn,$sql);
          
    //header('location:dashboard.php');
    
   
   if($query==true)
   {
     echo "updated";
   }
   else{
     echo "error";
   }
  }



?>