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
        <div class="old-password">
            <span class="left">初始密码:</span>
            <span class="right1">*******</span>
        </div>
        <div class="new-password">
            <span class="left">新&nbsp;密&nbsp;码:</span>
            <input type="password" class="right">

        </div>
        <div class="confirm-password">
            <span class="left">确认密码:</span>
            <input type="password" class="right">

        </div>

        <div id="btn">
            <button class="change" <a href="change.html"></a>确&nbsp;&nbsp;认</button>
            <a href="user/personal"><button class="return">返&nbsp;&nbsp;回</button></a>
        </div>
    </div>
</div>
</div>
<?php include('footer.php')?>
</body>
</html>