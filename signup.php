<?php
include 'config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
 $sql = "SELECT user_email FROM tbl_user WHERE  user_email ='$email'";
 $results = mysqli_query($conn, $sql);
 if (mysqli_num_rows($results) <= 0) 
 {
     if ($password == $confirm_password)
      {
        $query = "INSERT INTO tbl_user(user_name,user_email,user_phone,user_password)values('$username','$email','$mobile','".md5($password)."')";
        $data = mysqli_query($conn,$query);
        if($data)
         {
 	          echo ("<script LANGUAGE='JavaScript'>
			    window.alert('Registerd Successfully');
			    window.location.href='home.html';
			    </script>");
          }
          else
           {
 	           echo ("<script LANGUAGE='JavaScript'>
			    window.alert('Somthing Went Wrong');
			    window.location.href='home.html';
			    </script>");
            }
        }
        else
          {
	         echo ("<script LANGUAGE='JavaScript'>
			    window.alert('Boath Password Does Not Match');
			    window.location.href='home.html';
			    </script>");
           }
    }
  else
  {
  	echo ("<script LANGUAGE='JavaScript'>
			    window.alert('Aleready Exist');
			    window.location.href='home.html';
			    </script>");
  }
?>