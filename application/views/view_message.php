<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>查看留言</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<?php include('header.php');?>

<div class="container">
    <div class="table-responsive">
        <table class="table">
            <tr>
                <td>昵称</td>
                <td>联系方式</td>
                <td>留言内容</td>
                <td>留言日期</td>
                <td>操作</td>
            </tr>
            <?php foreach($result as $row){?>
                <tr>
                    <td><?php echo $row->mess_name;?></td>
                    <td><?php echo $row->mess_email;?></td>
                    <td><?php echo $row->mess_con;?></td>
                    <td><?php echo $row->mess_date;?></td>
                    <td><a href="room/del?room_id=<?php echo $row->mess_id;?>">删除</a></td>
                </tr>
            <?php }?>
        </table>
    </div>
</div>
<?php include('footer.php');?>
<script href="assets/js/bootstrap.min.js"></script>
</body>
</html>