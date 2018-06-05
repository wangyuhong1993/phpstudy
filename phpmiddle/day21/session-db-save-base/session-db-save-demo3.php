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
        require_once("./session-db-save-base.php");
        session_start(); 
        session_destroy();  // 销毁session
    ?>
    <p><a href="session-save-demo1">回到demo1</a></p>
</body>
</html>