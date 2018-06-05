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
        if (!empty($_COOKIE["cookie1"])) {
            echo "<br />cookie1:".$_COOKIE["cookie1"];
        }else{
            echo "<br />没有cookie1";
        }

        if (!empty($_COOKIE["cookie2"])) {
            echo "<br />cookie2:".$_COOKIE["cookie2"];
        }else{
            echo "<br />没有cookie2";
        }
    ?>
</body>
</html>