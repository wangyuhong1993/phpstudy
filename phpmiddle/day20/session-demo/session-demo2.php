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
        session_start();  // 开启session,必须先“开启session功能”;
        if (!empty($_SESSION['d1'])) {
            echo "<br />session1:".$_SESSION['d1'];
        }else{
            echo "<br />没有session1";
        }

        if (!empty($_SESSION["d2"])) {
            echo "<br />session2:".$_SESSION["d2"];
        }else{
            echo "<br />没有session2";
        }
    ?>
</body>
</html>