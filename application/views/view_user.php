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
                <td>用户id</td>
                <td>账号</td>
                <td>密码</td>
                <td>姓名</td>
                <td>年级</td>
                <td>身份</td>
            </tr>
            <?php foreach($result as $row){?>
                <tr>
                    <td><?php echo $row->user_id;?></td>
                    <td><?php echo $row->num;?></td>
                    <td><?php echo $row->pass;?></td>
                    <td><?php echo $row->user_name;?></td>
                    <td><?php echo $row->start_school;?></td>
                    <td>
                        <?php
                            switch($row->status){
                                case '0':
                                    echo '管理员';
                                    break;
                                case '1':
                                    echo '学生';
                                    break;
                                case '2':
                                    echo '教师';
                                    break;
                                default:
                                    echo '未知';
                            }
                        ?>
                    </td>
                    <td><a href="user/del?user_id=<?php echo $row->user_id;?>">删除</a></td>
                </tr>
            <?php }?>
        </table>
    </div>
</div>
<?php include('footer.php');?>
<script href="assets/js/bootstrap.min.js"></script>
</body>
</html>