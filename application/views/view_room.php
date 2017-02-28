<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>查看教室</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<?php include('header.php');?>

<div class="container">
    <div class="table-responsive">
        <table class="table">
            <tr>
                <td>教室id</td>
                <td>教室名称</td>
            </tr>
            <?php foreach($result as $row){?>
                <tr>
                    <td><?php echo $row->room_id;?></td>
                    <td><?php echo $row->room_name;?></td>
                    <td><a href="room/del?room_id=<?php echo $row->room_id;?>">删除</a></td>
                </tr>
            <?php }?>
        </table>
    </div>
</div>
<?php include('footer.php');?>
<script href="assets/js/bootstrap.min.js"></script>
</body>
</html>