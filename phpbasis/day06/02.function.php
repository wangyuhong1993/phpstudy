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
    // 1.默认参数的传递问题
    // function f1($x = 3,$y = 4){
    //     $s =$x * $x +$y *$y;
    //     $result = sqrt($s);  //求其开方
    //     return $result;  // 返回该数据值
    // }
    // $v1 = f1(30,40);
    // $v2 = f1();
    // echo "\$v1:".$v1."<br/>";
    // echo "\$v2:".$v2."<br/>";

    // 2.演示形参的引用传递问题
    function f2($a, & $b){
        $a = $a * $a;
        $b = $b * $b;
        return $a + $b;  // 返回$a + $b
    }
//    f2(3,4);  //报错
    $c = 4;
    $v3 = f2(3,$c);
    echo "\$v3:".$v3;
    echo "<br/>";

    // // 3.值传递的实参变量和引用类型的实参变量的变化问题
    // function f3($a, & $b){
    //     $a = $a * $a;
    //     $b = $b * $b;
    //     return $a + $b;  // 返回$a + $b
    // }

    // $s1 = 3;
    // $s2 = 4;
    // $v3 = f2($s1,$s2);
    // echo "\$s1:".$s1;
    // echo "<br />";
    // echo "\$s2:".$s2;
    // echo "<br />";
?>
</body>
</html>