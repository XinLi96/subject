<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>按天查看</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/view_day.css">
</head>
<body>
    <?php include('header.php');?>
    <div class="wrapper">
        <table style="color:#000" border="1" class="table—day">
            <tr>
                <td width="76"> </td>
                <td width="86" height="50"> </td>
<!--                <td width="100">周一</td>-->
<!--                <td width="100">周二</td>-->
<!--                <td width="100">周三</td>-->
<!--                <td width="100">周四</td>-->
                <td width="500">第<?php echo $zhou;?>周 周<?php echo $ji;?></td>
<!--                <td width="100">周六</td>-->
<!--                <td width="108">周日</td>-->
            </tr>
            <tr>
                <td rowspan="4">上午</td>
                <td>1</td>
                <td rowspan="2">
                    <?php
//                        $status = $
                        foreach($result as $row){
                            if($row->time == 1){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>2</td>
            </tr>
            <tr>

                <td>3</td>
                <td rowspan="2">
                    <?php
                    foreach($result as $row){
                        if($row->time == 2){
                            echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                        }
                        }
                    ?>
                </td>
            </tr>
            <tr>

                <td>4</td>
            </tr>
            <tr>
                <td colspan="6" align="center"><b>午休</b></td>
            </tr>
            <tr>
                <td rowspan="4">下午</td>
                <td>5</td>
                <td rowspan="2">
                    <?php
                    foreach($result as $row){
                        if($row->time == 3){
                            echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                        }
                        }
                    ?>
                </td>
            </tr>
            <tr>

                <td>6</td>
            </tr>
            <tr>

                <td>7</td>
                <td rowspan="2">
                    <?php
                    foreach($result as $row){
                        if($row->time == 4){
                            echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                        }
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>8</td>
            </tr>
        </table>
    </div>
    <?php include('footer.php');?>
</body>
</html>