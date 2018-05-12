<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/message.css">
</head>
<body>
<?php include('header.php');?>
<div class="container">
    <div class="wrapper">

        <ul class="messageList">
            <li class="messageOne">
                <div class="addMessage">
                    <div class="addMessName"><input class="name" type="text" placeholder="昵称"></div>
                    <div class="addMessEmail"><input class="email" type="text" placeholder="邮箱"></div>
                    <div class="addMessCon"><textarea class="con" name="" id="" cols="80" rows="5" placeholder="评论内容"></textarea></div>
                    <button class="messageBtn">发表评论</button>
                </div>
            </li>
            <div class="prependOne">
                <?php foreach($message as $item){?>
                    <li class="messageOne">
                        <div class="oneLeft">
                            <div class="messName">昵称：<?php echo $item->mess_name; ?></div>
                            <div class="messMail">邮箱：<?php echo $item->mess_email; ?></div>
                            <div class="messTime">时间：<?php echo $item->mess_date; ?></div>
                        </div>
                        <div class="oneRight">
                            留言内容：<div class="messCon"><?php echo $item->mess_con; ?></div>
                        </div>
                    </li>
                <?php } ?>
            </div>
        </ul>
    </div>
</div>
<?php include('footer.php');?>

<script href="assets/js/bootstrap.min.js"></script>
<script href="assets/js/jquery.js"></script>
<script href="assets/js/mess"></script>
<script>
    (function($){
        $('.messageBtn').on('click',function(){
            var messName = $('.addMessName').eq(0).find('.name').val();
            var messEmail = $('.addMessEmail').eq(0).find('.email').val();
            var messCon = $('.addMessCon').eq(0).find('.con').val();
            var dateTime = getDate();
            var template = '<li class="messageOne">\
                                <div class="oneLeft">\
                                    <div class="messName">昵称：{name}</div>\
                                <div class="messMail">邮箱：{email}</div>\
                                <div class="messTime">时间：{time}</div>\
                                </div>\
                                <div class="oneRight">\
                                    留言内容：<div class="messCon">{con}</div>\
                                    </div>\
                            </li>';
            var myreg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
            if(myreg.test(messEmail)){
                $.get("message/add_message",{
                    'name': messName,
                    'email': messEmail,
                    'con': messCon,
                    'dateTime': dateTime
                },function(data){
                    var renderStr = template.replace(/{name}/ig,messName).replace(/{email}/ig,messEmail).replace(/{con}/ig,messCon).replace(/{time}/ig,dateTime);
                    alert('留言成功，感谢您的支持。');
                    $('.prependOne').eq(0).prepend(renderStr);
                },'text');
            }else{
                alert('请输入正确的邮箱格式');
            }
        });
        
        function getDate() {
            /* 获取当前时间日期开始 */
            var date=new Date();
            var year=date.getFullYear();
            var month=date.getMonth()+1;
            var day=date.getDate();
            var hour="00"+date.getHours();
            hour=hour.substr(hour.length-2);
            var minute="00"+date.getMinutes();
            minute=minute.substr(minute.length-2);
            var second="00"+date.getSeconds();
            second=second.substr(second.length-2);
            /* 获取当前时间日期结束 */

            return (year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second);
        }
        console.log(getDate());
    })(jQuery)
</script>
</body>
</html>