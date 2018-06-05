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
        // 1.局部访问全局变量
        /**$v1 = 1;
        function f1(){
            echo "<br /> 在函数内部访问外部：v1 = $v1;";
        }
        f1();   // 报错，函数内部不能访问函数外部，反之亦然 
        echo "<hr />";

        // 2.静态变量
        function f2(){
            static $c = 0;
            $c++;  //此数据会持续保留
            $d = 0;
            $d++;
            echo "<br /> c=$c, d=$d,(此函数被调用次数为：$c)";
        }
        f2();
        f2();
        f2();
        echo "<hr />";
        
        // 3.函数内部global访问全局变量
        $v4 = 4;
        function f4(){
            // 在函数中，使用global来生命一个要使用的全局的同名的变量
            global $v4;  // 这里$v4是局部变量，只是跟全局变量同名
            echo "<br />在局部访问全局变量v4 = $v4";
            $v4 = 44;  // 修改其值 
        }
        f4();
        echo "<br />在全局再次访问v4 = $v4";
        echo "<hr />";
        */

        // 4.借用GLOBALS超全局变量
        $v5 = 5;
        function f5(){
            echo "<br/>在局部访问全局变量v5=" . $GLOBALS['v5'];
            $GLOBALS['v5'] = 55;  // 修改其值 
        }
        f5();
        echo "<br />在全局再次访问v5=".$GLOBALS['v5'];
        echo "<br />在全局再次访问v5=".$v5;
        

        // 5.销毁全局变量
        $v6 = 6;
        function f6(){
            echo "<br/>在局部访问全局变量v6=" . $GLOBALS['v6'];
            unset($GLOBALS['v6']);  // 修改其值 
        }
        f6();
        echo "<br />在全局再次访问v6=".$GLOBALS['v6'];
    ?>
</body>
</html>
