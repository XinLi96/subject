<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>安排教学</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/arrangement.css">
</head>
<body>
    <?php include('header.php');?>

    <div class="con">
        <form action="relation/add_relation" method="post">
            课程名称:<input type="text" name="course_name"><br>
            关联用户:<input type="text" name="user_name"><br>
            所用教室:<input type="text" name="room_name"><br>
            教&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;师:<input type="text" name="teacher"><br>
            周几上课:<input type="text" name="week"><br>
            上课节数:<input type="text" name="time"><br>
            所属班级:<input type="text" name="grade"><br>
            <input type="submit" class="btn">
            <input type="reset" class="btn">
        </form>
    </div>

    <?php include('footer.php');?>
</body>
</html>