<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>可退课</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/select_center.css">
</head>
<body>
<?php include('header.php');?>
<div class="container">
    <div class="wrapper">
        <table class="table">
            <tr>
                <td>课程名称</td>
                <td>上课时间</td>
                <td>课程开始</td>
                <td>课程结束</td>
                <td>上课地点</td>
                <td>上课老师</td>
                <td>操作</td>
            </tr>
            <?php foreach($res as $item){?>
                <tr>
                    <td><?php echo $item->sl_name;?></td>
                    <td><?php echo '星期'.$item->sl_week.' 第'.$item->sl_time.'节';?></td>
                    <td><?php echo $item->sl_start.'周';?></td>
                    <td><?php echo $item->sl_end.'周';?></td>
                    <td><?php echo $item->sl_room;?></td>
                    <td><?php echo $item->sl_teacher;?></td>
                    <td><a href="select/quit_by_id?asso_id=<?php echo $item->asso_id;?>">退课</a></td>
                </tr>
            <?php }?>
        </table>
    </div>
</div>
<?php include('footer.php');?>

</body>
</html>