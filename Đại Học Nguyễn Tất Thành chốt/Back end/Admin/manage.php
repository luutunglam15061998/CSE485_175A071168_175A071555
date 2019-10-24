
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Admin </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">
    <link rel="stylesheet" href="assets/css/styles.minc726.css?=140">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>
    <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>
    <link rel='stylesheet' type='text/css' href='assets/plugins/datatables/dataTables.css' />
    <link rel='stylesheet' type='text/css' href='assets/plugins/codeprettifier/prettify.css' />
    <link rel='stylesheet' type='text/css' href='assets/plugins/form-toggle/toggles.css' />
</head>

<body class="">


    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right"
            title="Toggle Sidebar"></a>
            <div class="navbar-header pull-left">
                <a class="navbar-brand" href="../Home page/home.php"> Đại Học Nguyễn Tất Thành </a>
            </div>

        <ul class="nav navbar-nav pull-right toolbar">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"> Admin
                        <i class="fa fa-caret-down"></i></span><img src="assets/img/LOGO.jpg"
                        alt="Dangerfield" /></a>
                <ul class="dropdown-menu userinfo arrow">
                    <li class="username">
                        <a href="#">
                            <div class="pull-left"><img src="assets/img/LOGO.jpg"
                                    alt="Jeff Dangerfield" /></div>
                            <div class="pull-right">
                                <h5>Hello, Admin !</h5>
                            </div>
                        </a>
                    </li>
                    <li class="userlinks">
                        <ul class="dropdown-menu">
                            <li><a href="">Sửa Thông Tin <i class="pull-right fa fa-pencil"></i></a></li>
                            <li class="divider"></li>
                            <li><a href="../Login/login.php" class="text-right">Đăng Xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </header>

    <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                <li class="divider"></li>
                <li><a href="../../index.php"><i class="fa fa-home"></i> <span>Trang Chủ</span></a></li>
                <li><a href="../Login/login.php"><i class="fa fa-th"></i> <span> Tin tức </span></a></li>
                <li><a href="Manage.php"><i class="fa fa-table"></i> <span>  Quản trị </span></a>
                </li>
            </ul>
        </nav>

        <!-- BEGIN RIGHTBAR -->
        <div id="page-content">
            <div id='wrap'>                            
                <div id="page-heading">
                    <h1> <a href="News.php"> Quản Lý </a> </h1>                   
                </div>
                <?php
                    //kết nối database
	                 $conn = mysqli_connect('localhost', 'root', '', 'cosodulieu') or die("không thể kết nối tới database");
                     mysqli_set_charset($conn, "utf8");
                    // query students table
                    $sql = 'SELECT * FROM `student`';

                    $result = mysqli_query($conn, $sql);

                    if(!$result) {
                        die('Query error: [' . $db->error . ']');
                    }

                        echo mysqli_num_rows($result);
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-sky">
                                <div class="panel-heading">
                                <h4> <a style = "color: white;"; href = " Add-account.php"> Thêm Tài Khoản </a></h4>                                   
                                </div>
                                <div class="panel-body collapse in">
                                    <table cellpadding="0" cellspacing="0" border="0"
                                        class="table table-striped table-bordered datatables" id="example">
                                        <thead>
                                            <tr>
                                                <th> Id </th>
                                                <th> Tên </th>
                                                <th> Email </th>                                            
                                                <th> Quyền </th>
                                                <th colspan = 2> Hành động </th>
                                            </tr>
                                            <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : ?>
                                                <tr>
                                                    <th><?php echo $row['mem_id']; ?></th>
                                                    <th><?php echo $row['Ten']; ?></th>
                                                    <th><?php echo $row['Email']; ?></th>
                                                    <th><?php echo $row['Quyen']; ?></th>        
                                                    <th><center><button class='btn btn-warning edit' name='".$fetch['mem_id']."'><span class='glyphicon glyphicon-edit'></span>Sửa </button> | <button class='btn btn-danger delete' name='".$fetch['mem_id']."'><span class='glyphicon glyphicon-trash'></span>Xóa</button></center></th>                                         
                                                </tr>
                                            <?php endwhile; ?>

                                        </thead>
                                        <tbody id="data"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- page-content -->
    </div> <!-- page-container -->


    <script type='text/javascript' src='assets/js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='assets/js/jqueryui-1.10.3.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.nicescroll.min.js'></script>
    <script type='text/javascript' src='assets/js/application.js'></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>