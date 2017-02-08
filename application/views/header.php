<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo site_url();?>">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
</head>
<body class="homepage">
<header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><!-- <img src="images/logo.png" alt="logo"> -->我的超级课程表</a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="Welcome">首页</a></li>
<!--                    <li><a href="#">About Us</a></li>-->
                    <?php
                        $status = $this->session->userdata('status');
                        if($status == 0 && $status!=null){
                            echo '<li><a href="Welcome/add_course">添加课程</a></li>
                    <li><a href="Welcome/add_user">添加用户</a></li>
                    <li><a href="Welcome/add_room">添加教室</a></li>';
                        }else{
                            echo '<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">查看课表<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="Welcome/view_by_week">按周查看</a></li>
                            <li><a href="Welcome/view_by_day">按天查看</a></li>
                        </ul>
                    </li>';
                        }
                    ?>

                    <li>
                        <?php
                            if($status==0){
                                echo '<a href="Welcome/arrangement">安排教学</a>';
                            }
                            else{
                                echo '<a href="Welcome/contact">联系我们</a>';
                            }
                        ?>
                    </li>
                    <li>
                        <?php
                            $user_name = $this->session->userdata('user_name');
                            if($status == 1){
                                $houzui = '同学';
                            }else if($status == 2){
                                $houzui = '老师';
                            }else if($status == 0){
                                $houzui = '';
                            }
                            if($user_name){
                                echo '<a href="user/personal">欢迎'.$user_name.$houzui.'</a>';
                            }else{
                                echo '<a href="Welcome/login">登录</a>';
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/wow.min.js"></script>
</body>
</html>