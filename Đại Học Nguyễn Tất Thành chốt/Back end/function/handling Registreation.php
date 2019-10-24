<?php	
//Khai báo sử dụng session
session_start();
	//Khai báo utf-8 để hiển thị được tiếng việt
	header('Content-Type: text/html; charset=UTF-8');
   
	// Nếu không phải là sự kiện đăng ký thì không xử lý
	if (isset($_POST["btn_dangky"])){
        
		//kết nối database
        $conn = mysqli_connect('localhost', 'root', '', 'cosodulieu') or die("không thể kết nối tới database");

        // Lấy thông tin
        $username   = $_POST['txtUser'];
        $email      = $_POST['txtEmail'];
        $password   = $_POST['txtPass'];
        $confirmpassword   = $_POST['txtPass2'];

        //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($password != $confirmpassword) {
            echo "Mật khẩu không khớp. Vui lòng nhập lại. <a href='javascript: history.go(-1)'> Come back</a>";
        }else{   
            //Mã hóa mật khẩu
            $sql = "SELECT users_name, users_email, users_password, user_level FROM users WHERE  users_email='$email' ";
            $query = mysqli_query($conn,$sql);	
             
            //Kiểm tra tên đăng nhập này đã có người dùng chưa
            if (mysql_num_rows(mysql_query("SELECT users_name FROM  users WHERE users_name='$username'")) > 0)
            {
                echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'> Come back</a>";
            }else{
                $sql = "SELECT users_name, users_email, users_password, user_level FROM users WHERE  users_email='$email' ";
                $query = mysql_query($sql);	
                @$addusers = mysql_query("
                    INSERT INTO users (
                        users_name,
                        users_password,
                        users_email
                        
                    )
                    VALUE (
                        '{$username}',
                        '{$password}',
                        '{$email}'
                        
                    )
                ");
                if ($addusers)
        echo "Quá trình đăng ký thành công. <a href='../login/login.php'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='../function/registreation.php'>Thử lại</a>";  
            } 
        }
    }

?>

