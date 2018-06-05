<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
//ini_set("error_log","my_error.txt"); // 记录到改文件
ini_set("error_log","syslog"); // 记录到改文件
echo "<br /> ccc1";
echo $v1;  // 使用不存在的变量
echo "你的年龄为：$age"; // 正常数据处理!
echo "<br />ccc2"
?>
</body>
</html>