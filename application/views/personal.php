<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/pensonal.css">
</head>
<body>
    <?php include('header.php')?>

    <div id="zhuti">
        <div id="container">
            <div class="header">
                <span>个人中心</span>
            </div>
            <div class="nav">
                <ul class="information">
                    <li id="name">
                        <span class="left">姓&nbsp;&nbsp;名:</span>
                        <span class="right"><?php echo $result->user_name;?></span>
                    </li>
                    <li id="name">
                        <span class="left">学&nbsp;&nbsp;号:</span>
                        <span class="right"><?php echo $result->num;?></span>
                    </li>
                    <li id="name">
                        <span class="left">学&nbsp;&nbsp;院:</span>
                        <span class="right">计算机科学技术学院</span>
                    </li>
                    <li id="name">
                        <span class="left">身&nbsp;&nbsp;份:</span>
                        <span class="right">
                            <?php
                                if($result->status == 0){
                                    echo '管理员';
                                }else if($result->status == 1){
                                    echo '学生';
                                }else{
                                    echo '老师';
                                }
                            ?>
                        </span>
                    </li>
                    <li id="name">
                        <span class="left">年&nbsp;&nbsp;级:</span>
                        <span class="right"><?php echo $result->start_school;?></span>
                    </li>
                </ul>
                <div id="password">
                    <span class="pswd">密&nbsp;&nbsp;码:</span>
                    <span class="pass"><?php echo $result->pass;?></span>
                </div>
                <div id="btn">
                    <a href="user/change"><button class="change">修&nbsp;&nbsp;改</button></a>
                    <a href="user/log_out"><button class="return">退&nbsp;&nbsp;出</button></a>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php')?>
</body>
</html>