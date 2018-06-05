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
    <!-- 可变函数其实就是在调用函数的时候，使用一个变量名而已 -->
    <!--该变量的内部，就是该函数名!-->
    <?php
        function f1(){
            echo "<br />这是一个普通的函数而已！";
        }
        $v1 ="f1";
        $v1(); // 这就是可变函数！

        function jpg(){ echo "<br />处理jpg图片";}
        function png(){ echo "<br />处理png图片";}
        function gif(){ echo "<br />处理gif图片";}
        $file = "abc.png"; // 代表用户上传的图片
        $houzhui = strrchr($file, ".");
        echo "<br/>".$houzhui;
        $houzhui = substr($houzhui,1); //获取该字符串从位置1开始之后的所有字符
        $houzhui();  //可变函数
    ?>


</body>
</html>