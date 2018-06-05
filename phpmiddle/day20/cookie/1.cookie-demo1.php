<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        setcookie("cookie1","值1"); // 没有设定时间
        setcookie("cookie2","值2",time()+60);  // 60秒之后过时！
    ?>
</body>
</html>