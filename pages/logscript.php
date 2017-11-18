<?php
		require 'common.php';
		$data=json_decode(file_get_contents("php://input"));
		$email = mysqli_real_escape_string($con,$data->email);
		$password = mysqli_real_escape_string($con,$data->password);
		$query="SELECT id,email FROM user WHERE email='$email' AND password='$password'";
		$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
		$num_rows=mysqli_num_rows($query_result);
			$row=mysqli_fetch_array($query_result);
			session_start();
			$_SESSION['user_id']=$row['id'];
			$_SESSION['email']=$row['email'];
			mysqli_close($con);
			echo 'Data Inserted Successfully';
		}
?>