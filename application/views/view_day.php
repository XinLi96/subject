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
                <td width="500">第<?php echo $zhou;?>周 星期<?php echo $ji;?></td>
            </tr>
            <tr>
                <td rowspan="4">上午</td>
                <td>1</td>
                <td rowspan="2">
                    <?php
                        $status = $this->session->userdata('status');//先看用户身份
                        if($status == 1){//学生查看格式
                            foreach($result as $row){//每一节课通过将所有与自己有关的课程查出，循环所有课程判断第几节课，第几周、星期几在查询数据库时已做处理
                                if($row->time == 1){
                                    echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                                }
                            }
                            foreach($sleResult as $row){
                                if($row->sl_time == 1){
                                    echo $row->sl_name.'<br>'.$row->sl_room.'<br>'.$row->sl_teacher;
                                }
                            }
                        }else{//教室查看格式
                            foreach($result as $row){
                                if($row->time == 1){
                                    echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->grade;
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
                    $status = $this->session->userdata('status');
                    if($status == 1){
                        foreach($result as $row){
                            if($row->time == 2){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                        foreach($sleResult as $row){
                            if($row->sl_time == 2){
                                echo $row->sl_name.'<br>'.$row->sl_room.'<br>'.$row->sl_teacher;
                            }
                        }
                    }else{
                        foreach($result as $row){
                            if($row->time == 2){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->grade;
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
                <td colspan="6" align="center"><b>午休</b></td>
            </tr>
            <tr>
                <td rowspan="4">下午</td>
                <td>5</td>
                <td rowspan="2">
                    <?php
                    $status = $this->session->userdata('status');
                    if($status == 1){
                        foreach($result as $row){
                            if($row->time == 3){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                        foreach($sleResult as $row){
                            if($row->sl_time == 3){
                                echo $row->sl_name.'<br>'.$row->sl_room.'<br>'.$row->sl_teacher;
                            }
                        }
                    }else{
                        foreach($result as $row){
                            if($row->time == 3){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->grade;
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
                    $status = $this->session->userdata('status');
                    if($status == 1){
                        foreach($result as $row){
                            if($row->time == 4){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->teacher;
                            }
                        }
                        foreach($sleResult as $row){
                            if($row->sl_time == 4){
                                echo $row->sl_name.'<br>'.$row->sl_room.'<br>'.$row->sl_teacher;
                            }
                        }
                    }else{
                        foreach($result as $row){
                            if($row->time == 4){
                                echo $row->course_name.'<br>'.$row->room_name.'<br>'.$row->grade;
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