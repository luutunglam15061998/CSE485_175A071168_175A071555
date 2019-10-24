<?php
	//kết nối database
	$conn = mysqli_connect('localhost', 'root', '', 'cosodulieu') or die("không thể kết nối tới database");

		$username = $_POST['nameNew'];
		$email = $_POST['emailNew'];
		$matkhau = password_hash($_POST['mkNew'], PASSWORD_DEFAULT);
		if($_POST['cvNew'] == 'Hội Viên') {
			$chucvu = 3;
		}else{
			$chucvu = 2;
		}
	$conn->query("INSERT INTO users( usersName, usersEmail, usersPass, usersLevel) 
	VALUES (N'$username', '$email', '$matkhau', '$chucvu')");	
?>