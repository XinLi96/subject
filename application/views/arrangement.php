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
<!--            课程名称:<input type="text" name="course_name"><br>-->
            <br>
            课程名称:&nbsp;&nbsp;
            <select name="course_name" id="xx">
                <?php foreach($result as $row){?>
                    <option value="<?php echo $row->course_name;?>"><?php echo $row->course_name;?></option>
                <?php }?>
            </select> <br>
            关联用户:<input type="text" name="user_name" placeholder="学生姓名"><br><br>
<!--            所用教室:<input type="text" name="room_name" placeholder="教室名称。如：三号楼-105"><br>-->
            所用教室:&nbsp;
            <select name="room_name" id="xx">
                <?php foreach($result1 as $row1){?>
                    <option value="<?php echo $row1->room_name;?>"><?php echo $row1->room_name;?></option>
                <?php }?>
            </select> <br>
            教&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;师:<input type="text" name="teacher" placeholder="教师姓名"><br><br>
<!--            周几上课:<input type="text" name="week" placeholder="星期几上课"><br>-->
            周几上课:&nbsp;
            <select name="week" id="xx">
                <option value="1">星期一</option>
                <option value="2">星期二</option>
                <option value="3">星期三</option>
                <option value="4">星期四</option>
                <option value="5">星期五</option>
                <option value="6">星期六</option>
                <option value="7">星期日</option>
            </select> <br>
            <br>
<!--            上课节数:<input type="text" name="time" placeholder="第几课上课，如：1:1-2、2:2-3..."><br>-->
            上课节数:&nbsp;
            <select name="time" id="xx">
                <option value="1">1-2</option>
                <option value="2">3-4</option>
                <option value="3">5-6</option>
                <option value="4">7-8</option>
            </select> <br>
            所属班级:<input type="text" name="grade" placeholder="属于哪个班级的课程"><br>
            <input type="submit" class="btn">
            <input type="reset" class="btn">
        </form>
    </div>

    <?php include('footer.php');?>
</body>
</html>