<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>按周查看</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/input_day.css">
</head>
<body>
    <?php include('header.php');?>
    <div class="con">
      <form action="relation/view_by_week" method="post">
          第几周:<input type="text" name="week" placeholder="1-18周"><br>
          <input type="submit" class="btn">
          <input type="reset" class="btn">
      </form>
    </div>
    <?php include('footer.php');?>
</body>
</html>