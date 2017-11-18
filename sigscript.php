<?php 
		//$data=json_decode($_POST['data']);
		require 'pages/common.php';
		$name=mysqli_real_escape_string($con, $_POST['name']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password = md5(mysqli_real_escape_string($con,$_POST['password']));
		$contact=$_POST['contact'];
		$city=mysqli_real_escape_string($con, $_POST['city']);
		$address=mysqli_real_escape_string($con, $_POST['address']);
		$query="INSERT INTO user(name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
		$insert_query_result=mysqli_query($con,$query) or die(mysqli_error($con));
			session_start();
			$_SESSION['email']=$email;
			$_SESSION['user_id']=mysqli_insert_id($con);
			mysqli_close($con);
			header('#!/');
?>