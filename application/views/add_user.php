<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加用户</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/add_user.css">
</head>
<body>
    <?php include('header.php');?>

    <div class="con">
        <form action="user/add_user" method="post">
            用户名:<input type="text" name="name"><br>
            身&nbsp;&nbsp;&nbsp;&nbsp;份:<input type="text" name="status" placeholder="0:管理员 1:学生 2:老师"><br>
            学&nbsp;&nbsp;&nbsp;&nbsp;号:<input type="text" name="num"><br>
            年&nbsp;&nbsp;&nbsp;&nbsp;级:<input type="text" name="nianji"><br>
            密&nbsp;&nbsp;&nbsp;&nbsp;码:<input type="text" name="pass" placeholder="默认为12345"><br>
            <input type="submit" class="btn">
            <input type="reset" class="btn">
        </form>
    </div>

    <?php include('footer.php');?>
</body>
</html>