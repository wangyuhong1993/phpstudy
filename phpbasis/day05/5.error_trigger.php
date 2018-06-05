<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/17
 * Time: 10:45
 */
echo "<br /> ccc1";
$age = 880; // 代表网页用户提交的年龄
if($age > 127 || $age < 0 ){
    // 异常数据处理！
    trigger_error("年龄不符合要求！",E_USER_ERROR);
}else{
    echo "你的年龄为：$age"; // 正常数据处理!
}
echo "<br />ccc2"
?>
</body>
</html>