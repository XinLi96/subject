<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div id="zhuti">
        <div class="header">
            <span class="land">登录</span>
            <a href="Welcome"><span class="close">×</span></a>
        </div>
        <div class="tishi">
            <span>提示:请输入正确用户名和密码进行登录</span>
        </div>
        <form action="user/do_log" method="post">
            <div id="name">
                <span class="xingming">
                    用户名:
                </span>
                <span>
                    <input type="text"  class="username" name="user_num">
                </span>
            </div>
            <div id="password">
                <span class="mima">
                    密&nbsp;码:
                </span>
                <span>
                    <input type="password"  class="userpswd" name="user_pass">
                </span>
            </div>
            <div id="denglu">
                <span>
                    <button class="left" type="submit">登录</button>
                </span>
                <span>
                    <button class="right" type="reset">重置</button>
                </span>
            </div>
        </form>
        <div class="xian"></div>
        <div id="footer">
            <a href="Welcome"><button class="guanbi">关闭</button></a>
        </div>
    </div>
</body>
</html>