
<?php
	require_once '../function/ketnoi.php';
	
	
	$Ten = $_POST['Ten'];
    $Email = $_POST['Email'];
    $Quyen = $_POST['Quyen'];

	$conn->query("INSERT INTO `` VALUES('', '$Ten','  $Email', ' $Quyen')");
	
?>
