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
    // 我们准备要定义错误"处理器了"：
    // 第一步：设定要作为错误处理的函数名：
    set_error_handler("my_error_hander");
    // 第二步：定义该函数：
    // $errCode: 代表错误代号（级别）
    // $errMsg: 代表错误信息内容
    // $errFlie: 代表发生错误的文件名
    // $errLine: 代表发生错误的行号

    // 注意，该函数我们不要在程序中调用，而是，一发生错误就会被自动调用
    // 而且会传入该4个实参数据
    function my_error_hander($errCode,$errMsg,$errFile,$errLine){
        $str = "";
        $str .= "<h1 style='color: red'>大事不好，发生错误：</h1>";
        $str .= "<br />错误代号为:".$errCode;
        $str .= "<br />错误内容为:".$errMsg;
        $str .= "<br />错误文件为:".$errFile;
        $str .= "<br />错误行号为:".$errLine;
        $str .= "<br />".date('Y-d-m H:i:s');
        echo $str;  // 输出该构建的错误代码
    }
    echo $v1;  // 使用不存在的变量
    echo "你的年龄为：$age"; // 正常数据处理!
    ?>
</body>
</html>