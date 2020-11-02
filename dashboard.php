<?php


      $dbHost = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "users";
      
      $login_email=$_GET["email"];
      $login_password=$_GET["pass"];
      // Create 
      //echo $login_email;
      $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT user_fname,email_id,user_password FROM users_details where email_id='$login_email' and user_password='$login_password'";
      
      $result = mysqli_query($conn, $sql);
      $row=mysqli_fetch_array($result);
      

      if ($row['email_id']==$login_email && $row['user_password']==$login_password) {
        // output data of each row
        echo "Hello ".$row['user_fname'];  

      } else {
        echo "0 results";
      }

?>
<!DOCTYPE html>
  <html>
    <head>
    
      <style>
            a:link, a:visited {
              background-color: blue;
              color: white;
              padding: 14px 14px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
            }

            a:hover, a:active {
              background-color: red;
            }
      </style>

    </head>
    <body>
          <br>
          <a href="add_user.php" target="_blank">ADD USER</a>
          <?php
          $sql="SELECT * FROM users_details";
          $result1 = mysqli_query($conn,$sql);
          //$row=mysqli_fetch_array($result1);
              echo "<table border='1'>
              <tr>
              <th>user_id</th>
              <th>user_name</th>
              <th>email_id</th>
              <th>created_at</th>
              <th>updated_at</th>
              <th>Edit User</a></th>
              <th>Delete User</a></th>
              </tr>";

              while($row = mysqli_fetch_array($result1))
              {
                ?>
                <tr class="text-center">
                <td> <?php echo $row['user_id'];  ?> </td>
                <td> <?php echo $row['user_fname'];  ?> </td>
                <td> <?php echo $row['user_password'];  ?> </td>
                <td> <?php echo $row['created_at'];  ?> </td>
                <td> <?php echo $row['updated_at'];  ?> </td>
                
                <td> <a href="edit_user.php?update=<?php echo $row['user_id']; ?>" class="text-white"> Update</a> </button> </td>
                <td>  <a href="delete.php?id=<?php echo $row['user_id']; ?>" class="text-white"> Delete </a>  </button> </td>
                </tr>
            <?php
              }
 
           ?>

          
    </body>
   </html>   
   