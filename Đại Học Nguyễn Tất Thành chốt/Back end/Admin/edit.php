
<?php
	require_once '../function/ketnoi.php';
	
	if(ISSET($_POST['id'])){
		$id = $_POST['id'];
		
		$query = $conn->query("SELECT * FROM `studet` WHERE `mem_id` ='$id'");
		$fetch = $query->fetch_array();
		
		$array = array(
			'mem_id' => $fetch['mem_id'],
			'Ten' => $fetch['Ten'],
			'Email' => $fetch['Email'],
			'Quyen' => $fetch['Quyen']
		);
		
		echo json_encode($array);
	}
?>