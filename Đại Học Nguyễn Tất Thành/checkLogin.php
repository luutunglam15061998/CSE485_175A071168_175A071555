<?php 
	$email = $_POST['txtEmail'];
	$pass = $_POST['txtPass'];

	$conn = mysqli_connect('localhost','root','','cosodulieu');
	if (!$conn) {
		die('Khong the ket noi DB');		
	}

	$sql = "SELECT * FROM users WHERE email = '$email' AND password='$pass'";
	echo $sql;
	if (mysqli_query($conn,$sql)) {
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		if ($pass == $row['password']) {
			session_start();
			$_SESSION['user'] = $email;
			$_SESSION['password'] = $password;
			header("Location:admin.php");
		}
		else{
			header("Location:login.php");
		}
	}
	else {
		echo 'here';
	}
?>