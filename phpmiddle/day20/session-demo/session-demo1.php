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
        if($_POST){
            session_start();  // 开启session,必须先“开启session功能”;
            $_SESSION['d1'] = $_POST['data1'];   
            $_SESSION['d2'] = $_POST['data2']; 
        }  
    ?>
    <form action = "" method="post">
        数据1：<input type="text" name="data1" /><br />
        数据2：<input type="text" name="data2" /><br />
        <input type="submit" value="提交">
    </form>
</body>
</html>