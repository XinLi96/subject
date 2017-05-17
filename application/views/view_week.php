<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>按周查看</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/view_week.css">
</head>
<body>
    <?php include('header.php');?>
    <div class="wrapper">
        <table style="color:#000" border="1" class="table-week">
            <tr>
                <td width="76"><?php echo '第'.$zs.'周';?></td>
                <td width="86" height="50"> </td>
                <td width="100">周一</td>
                <td width="100">周二</td>
                <td width="100">周三</td>
                <td width="100">周四</td>
                <td width="100">周五</td>
                <td width="100">周六</td>
                <td width="108">周日</td>
            </tr>
            <tr>
                <td rowspan="4">上午</td>
                <td>1</td>
                <td rowspan="2">
                    <?php
                        $status = $this->session->userdata('status');//先看用户的身份
                        if($status == 1){//学生身份课表格式
                            foreach($result as $row){//每一节课通过将所有与自己有关的课程查出，循环所有课程判断星期几、第几节课，第几周在查询数据库时已做处理
                                if($row->week == 1&&$row->time == 1){//看其是否是星期一的1-2节
                                    echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                                }
                            }
                        }else{//教室身份课表格式
                            foreach($result1 as $row1){
                                if($row1->week == 1&&$row1->time == 1){
                                    echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                                }
                            }
                        }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 2&&$row->time == 1){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 2&&$row1->time == 1){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 3&&$row->time == 1){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 3&&$row1->time == 1){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 4&&$row->time == 1){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 4&&$row1->time == 1){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 5&&$row->time == 1){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 5&&$row1->time == 1){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 6&&$row->time == 1){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 6&&$row1->time == 1){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 7&&$row->time == 1){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 7&&$row1->time == 1){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
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
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 1&&$row->time == 2){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 1&&$row1->time == 2){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 2&&$row->time == 2){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 2&&$row1->time == 2){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 3&&$row->time == 2){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 3&&$row1->time == 2){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 4&&$row->time == 2){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 4&&$row1->time == 2){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 5&&$row->time == 2){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 5&&$row1->time == 2){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 6&&$row->time == 2){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 6&&$row1->time == 2){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 7&&$row->time == 2){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 7&&$row1->time == 2){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>

                <td>4</td>
            </tr>
            <tr>
                <td colspan="9" align="center"><b>午休</b></td>
            </tr>
            <tr>
                <td rowspan="4">下午</td>
                <td>5</td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 1&&$row->time == 3){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 1&&$row1->time == 3){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 2&&$row->time == 3){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 2&&$row1->time == 3){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 3&&$row->time == 3){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 3&&$row1->time == 3){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 4&&$row->time == 3){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 4&&$row1->time == 3){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 5&&$row->time == 3){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 5&&$row1->time == 3){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 6&&$row->time == 3){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 6&&$row1->time == 3){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 7&&$row->time == 3){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 7&&$row1->time == 3){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
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
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 1&&$row->time == 4){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 1&&$row1->time == 4){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 2&&$row->time == 4){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 2&&$row1->time == 4){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 3&&$row->time == 4){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 3&&$row1->time == 4){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 4&&$row->time == 4){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 4&&$row1->time == 4){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 5&&$row->time == 4){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 5&&$row1->time == 4){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 6&&$row->time == 4){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 6&&$row1->time == 4){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
                        }
                    }
                    ?>
                </td>
                <td rowspan="2">
                    <?php
                    if($status == 1){
                        foreach($result as $row){
                            if($row->week == 7&&$row->time == 4){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                    }else{
                        foreach($result1 as $row1){
                            if($row1->week == 7&&$row1->time == 4){
                                echo $row1->course_name.'<br>'.$row1->room_name.'<br>'.$row1->grade;
                            }
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