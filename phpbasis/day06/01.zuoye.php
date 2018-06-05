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
        // 第一题——打印所有的错误标志及其值
        $arr =array("E_ERROR","E_WARNING","E_PARSE","E_NOTICE","E_CORE_ERROR","E_CORE_WARNING",
            "E_COMPILE_ERROR","E_USER_ERROR","E_USER_WARNING","E_USER_NOTICE","E_STRICT","E_ALL");
        function zhuanhuan($n){
            $s = decbin($n); // 转化为2进制数字字符串
            $s = str_pad($s,16,"0",STR_PAD_LEFT);  //str_pad 填充字符串
            $s = str_replace("1","<font color='red'>1</font>",$s);  // php字符串替换
            return $s;
        }
        echo "<table border='1'>";
            foreach($arr as $key => $value){
                echo "<tr>";
                    echo "<td>$value</td>";
                    echo "<td>" . constant($value) . "</td>";
                    echo "<td>" . zhuanhuan(constant($value)) . "</td>";
                echo "</tr>";
            }
        echo "</table>";

        if(!empty($_POST['num'])){
            $n=$_POST['num']; // 获取表单的值
            $c = 0;  //用于记录能被整除的个数！
            for ($i = 2; $i <=$n; $i++){
                if($n % $i == 0){
                    $c++;
                }
            }
            if($c >= 2){
                echo "{$n}不是素数";
            }else {
                echo "{$n}是素数";
            }
        }
    ?>

    <!--第二题——写一个表单，可以输入一个数字，提交后判断该数字是否是一个"素数"，如果是，就输出"数字xx是一个素数"，
    否则就输出"数字xx不是素数"。-->
    <form action="" method="post">
        <input type="text" name="num" />
        <input type="submit" value="判断" />
    </form>
</body>
</html>