<!-- Kiểm tra phiên -->
<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>TRANG ADMIN</h1>
	<a href="logout.php">LOGOUT</a>
</body>
</html>