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
        try {
            echo "<p>行1</p>";
            throw new Exception("异常1", 3);
            echo "<p>行2</p>";
        }catch(Exception $e){
            echo "<br />发生异常了：";
            echo "<br />异常代号为：".$e->GetCode();
            echo "<br />发生信息为：".$e->GetMessage();
        }
        echo "<p>行3</p>";
    ?>   
</body>
</html>