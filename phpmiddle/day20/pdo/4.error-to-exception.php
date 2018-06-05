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
    // 演示原来的错误,转化为异常来处理： 
    // 分2步：
    // 1.设定发生错误时，要进行"自定义错误处理"的函数
    set_error_handler("MyErrorHanler");
    // 2.定义该函数
    // 参数：code , msg ，文件， 行数
    function MyErrorHanler($errno, $errstr, $errfile, $errline){
        // 正常情况这边是错误处理=>现在转为异常处理

        // 参数：msg ， code， 
        throw new ErrorException($errstr, $errno, $errno, $errfile, $errline);
    }
    // 下面,演示之前的"常规错误"：
    try{
        echo "<br />行1";
        echo "<br />行2：v1=$v1"; // 故意错误：未定义的变量。
        echo "<br />行3：";
    }catch( Exception $e){
        echo "<br />发生异常了:";
        echo "<br />异常代号为:".$e->GetCode();
        echo "<br />异常信息为:".$e->GetMessage();
    }

       
    ?>
</body>
</html>