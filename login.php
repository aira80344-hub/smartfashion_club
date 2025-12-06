<?php
 require_once('config.php'); 
 session_start();

	if(isset($_POST['login']))
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']); 
		$res = mysqli_query($conn,"SELECT user_name,user_email from tbl_user where (user_email = '$username' or user_phone='$username') AND user_password = '".md5($password)."' "); 
		
	    if($row = mysqli_fetch_array($res))
		{
			
			$user = $row['user_name'];
			$email = $row['user_email'];
			$_SESSION['email'] = $email;
			$_SESSION['user'] = $user;
            

            echo"<script>
				alert('Login Successfully!!!!');
				window.location.href='home.php';
			   </script>";
		}
		else 
		{
             echo"<script>
				alert('Username or password is wrong !!!');
				window.location.href='index.html';
			   </script>";
		}
	}
	else
	{
			echo"<script>
				alert('LogIn First!!!!');
				window.location.href='index.html';
			   </script>";
	}

?>