<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>查看排课</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php include('header.php');?>

    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>课程名</td>
                    <td>教师</td>
                    <td>学生</td>
                    <td>教室</td>
                    <td>星期</td>
                    <td>节数</td>
                    <td>班级</td>
                    <td>周数</td>
                </tr>
                <?php foreach($result as $row){?>
                <tr>
                    <td><?php echo $row->course_name;?></td>
                    <td><?php echo $row->teacher;?></td>
                    <td><?php echo $row->user_name;?></td>
                    <td><?php echo $row->room_name;?></td>
                    <td><?php echo $row->week;?></td>
                    <td><?php echo $row->time;?></td>
                    <td><?php echo $row->grade;?></td>
                    <td><?php echo $row->begin;?>-<?php echo $row->end;?></td>
                    <td><a href="relation/del?relation_id=<?php echo $row->relation_id;?>">删除</a></td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
    <?php include('footer.php');?>
    <script href="assets/js/bootstrap.min.js"></script>
</body>
</html>