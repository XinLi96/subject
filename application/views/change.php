<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改密码</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/change.css">
</head>
<body>
<?php include('header.php')?>
<div id="zhuti">
    <div id="container">
        <div class="header">
            <span>修改中心</span>
        </div>

        <form action="user/change_pass" method="post">
            <div class="old-password">
                <span class="left">初始密码:</span>
                <span class="right1"><?php echo $result->pass;?></span>
            </div>
            <div class="new-password">
                <span class="left">新&nbsp;密&nbsp;码:</span>
                <input type="text" class="right" name="pass1">

            </div>
            <div class="confirm-password">
                <span class="left">确认密码:</span>
                <input type="text" class="right" name="pass2">

            </div>

            <div id="btn">
                <button class="change" type="submit">确&nbsp;&nbsp;认</button>
                <a href="user/personal"><button type="" class="return">返&nbsp;&nbsp;回</button></a>
            </div>
        </form>
    </div>
</div>
</div>
<?php include('footer.php')?>
</body>
</html>