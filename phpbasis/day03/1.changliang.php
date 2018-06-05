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
        define("PI",3.14);
        const CC1 = 1234;
        
        // 使用形式1:直接使用
        echo 'CC1的值是：' .CC1;
        // 使用形式2：constant()获取一个常量的值：
        echo '<br />'.constant("CC1");

        // 常量值得灵活使用，直接引用变量也可以获取。
        $i=1;
        $c1 ="CC".$i;

        echo '<br />常量 $c1的值为：'.constant("CC1");
        
        // 魔术常量
        echo "<br />".__FILE__;   //当前文件路径
        echo "<br />".__DIR__;   //当前目录路径
        echo "<br />".__LINE__;   //当前代码所在行号
    ?>
</body>
</html>