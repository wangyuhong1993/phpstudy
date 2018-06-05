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
        // 先一个一个获取数据
        if(!empty($_POST)){
            $d1 = $_POST['data1'];
            $d2 = $_POST['data2'];
            // 然后输出，看看
            echo " d1 = $d1,d2 = $d2";
            echo "<hr />";
            //再来看看整个$_POST这个数组数据！
            print_r($_POST);
        }else{
            echo "非法的页面访问";
        }
    ?>
</body>
</html>