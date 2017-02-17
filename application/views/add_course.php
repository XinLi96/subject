<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加课程</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/add_course.css">
</head>
<body>
    <?php include('header.php');?>

    <div class="con">
        <form action="course/add_course" method="post">
            课程名称:<input type="text" name="course_name"><br>
            开始周数:<input type="text" name="begin"><br>
            结束周数:<input type="text" name="end"><br>
            <input type="submit" class="btn">
            <input type="reset" class="btn">
        </form>
    </div>

    <?php include('footer.php');?>
</body>
</html>