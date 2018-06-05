<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 测试url自己添加参数  ?age=133 -->
    <?php
        // 演示自定义异常类
        class AgeException extends Exception{
            function __construct($msg, $code = 0){
                // 调用或者说继承父类的构造函数
                parent::__construct($msg, $code);
            }
        }
        class GetDataException extends Exception{
            function __construct($msg, $code = 0){
                parent::__construct($msg, $code);
            }
        }
        try{
            if(empty($_GET['age'])){
                throw new AgeException("get数据为空", 8888);
            }else {
                $age = $_GET['age']; // 获得一个age参数信息
                if($age<0 ||$age>127){
                    throw new AgeException("年龄不合法", 9999); 
                    throw $obj;
                }
            }
            echo "<br />恭喜,你的年龄适合社保";
        }catch(GetDataException $e1){
            echo "<br />发生异常了：";
            echo "<br />异常代号为：".$e1->GetCode();
            echo "<br />发生信息为：".$e1->GetMessage();
        }
        catch(AgeException $e2){
            echo "<br />发生异常了：";
            echo "<br />异常代号为：".$e2->GetCode();
            echo "<br />发生信息为：".$e2->GetMessage();
        }
        
    ?>
</body>
</html>