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
        $num1 = $_POST['data1'];
        $fuhao = $_POST['yuansufu'];
        switch($fuhao){
            case "1":
                $result=decbin($num1);
                break;
            case "2":
                $result=decoct($num1);
                break;
            case "3":
                $result=dechex($num1);
                break;
            case "4":
                $result=bindec($num1);
                break;
            case "5":
                $result=octdec($num1);
                break;
            case "6":
                $result=hexdec($num1);
                break;
        }
    }else{
        $num1 = "";
        $result = "";
        $fuhao = "";
    }
?>

<!-- 当action为空字符串的时候，是提交到本页面! -->
<form action="" method="post">
    <input type="text" name="data1" value="<?php echo $num1 ?>" />
    <select name="yuansufu">
        <option value="1" <?php if($fuhao == "1"){ echo 'selected="selected"';} ?> >10to2</option>    
        <option value="2" <?php if($fuhao == "2"){ echo 'selected="selected"';} ?> >10to8</option>    
        <option value="3" <?php if($fuhao == "3"){ echo 'selected="selected"';} ?> >10to16</option>    
        <option value="4" <?php if($fuhao == "4"){ echo 'selected="selected"';} ?> >2to10</option> 
        <option value="5" <?php if($fuhao == "5"){ echo 'selected="selected"';} ?> >8to10</option> 
        <option value="6" <?php if($fuhao == "6"){ echo 'selected="selected"';} ?> >16to10</option>    
    </select>
    <input type="submit" value="提交" />
    <input type="text" name="result" value="<?php echo $result; ?>" />
</form>


</body>
</html>