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
    function f2(){
        $arr =func_get_args();
        echo "<p>函数f4被调用，其参数为：";
        foreach($arr as $value){
            echo $value;
	    }
    }
    f2(1,2,3);

    ?>
</body>
</html>