<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加教室</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/add_room.css">
</head>
<body>
    <?php include('header.php');?>

    <div class="con">
        <form action="room/add_room" method="post">
            教室名称:<input type="text" name="room_name"><br>
            <input type="submit" class="btn">
            <input type="reset" class="btn">
        </form>
    </div>

    <?php include('footer.php');?>
</body>
</html>