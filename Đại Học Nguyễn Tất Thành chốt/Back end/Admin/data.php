
<?php
	require_once '../function/ketnoi.php';
	if(ISSET($_POST['res'])){
		$query = $conn->query("SELECT * FROM `student`");
		while($fetch = $query->fetch_array()){
			echo
				"
					<tr>
						<td>".$fetch['Ten']." ".$fetch['Email']." ".$fetch['mem_id']."</td>
						<td>".$fetch['Quyen']."</td>
						<td><center><button class='btn btn-warning edit' name='".$fetch['mem_id']."'><span class='glyphicon glyphicon-edit'></span>Sửa </button> | <button class='btn btn-danger delete' name='".$fetch['mem_id']."'><span class='glyphicon glyphicon-trash'></span>Xóa</button></center></td>
					</tr>
				";
			
		}
	}
	
?> 