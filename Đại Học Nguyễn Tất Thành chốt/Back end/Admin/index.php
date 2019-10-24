
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quản Lý Thông Tin Web</title>
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/styles.minc726.css">
</head>

<body class="">
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="index.php">Đại học Nguyễn Tất Thành</a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">
                        <?php
                        echo "" . $name;
                        ?>
                        <i class="fa fa-caret-down"></i></span><img src="../images/img-01.png" alt="Dangerfield" /></a>
                <ul class="dropdown-menu userinfo arrow">
                    <li class="username">
                        <a href="#">
                            <div class="pull-left"><img src="../images/img-01.png" alt="Jeff Dangerfield" /></div>
                            <div class="pull-right">
                                <?php
                                echo "Hello " . $name . "!";
                                ?>
                            </div>
                        </a>
                    </li>
                    <li class="userlinks">
                        <ul class="dropdown-menu">
                            <li><a href="taikhoan.php">Thay đổi mật khẩu<i class="pull-right fa fa-cog"></i></a></li>
                            <li class="divider"></li>
                            <li><a href="../Chucnang/dangxuat.php" class="text-right">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </header>

    <div id="page-container">
        <nav id="page-leftbar" role="navigation">
            <ul class="acc-menu" id="sidebar">
                <li class="divider"></li>
                <li><a href="index.php" id="trangchu"><i class="fa fa-home"></i> <span>Trang Chủ</span></a></li>
                <li><a href="tintuc.php" id="tintuc"><i class="fa fa-th"></i> <span>Tin tức</span> </a>
                </li>
                <li><a href="quanly.php" id="quanly"><i class="fa fa-table"></i> <span>Quản lý tài khoản</span></a>
                </li>
            </ul>
        </nav>
        <div id="page-content">
            <div class="container">
                <br />
                <div class="table-responsive">
                    <form method="post" id="update_form">
                        <div class="table-responsive">
                            <div id="inserted_item_data">
                                <?php
                                    require '../Chucnang/main.php';
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='../js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='../js/jqueryui-1.10.3.min.js'></script>
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>
    <script type='text/javascript' src='../js/jquery.nicescroll.min.js'></script>
</body>

</html>