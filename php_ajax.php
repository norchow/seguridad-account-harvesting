<?php
   include("config.php");
   
   // email sent from form 
   $myemail = mysqli_real_escape_string($db,$_POST['email']);
   
   $sql = "SELECT id FROM users WHERE email = '$myemail'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myemail, table row must be 1 row
	
   if($count == 1) {
      echo "OK";
   }else {
      header('HTTP/1.1 400 Wrong mail');
      echo "ERROR";
   }
?>