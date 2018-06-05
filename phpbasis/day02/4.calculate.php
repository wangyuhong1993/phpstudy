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
        $num2 = $_POST['data2'];
        $fuhao = $_POST['yuansufu'];
        if( $fuhao == '+'){
            $result = $num1 + $num2;  
        }else if ( $fuhao == '-' ) {
            $result = $num1 - $num2;  
        }else if ( $fuhao == '*' ) {
            $result = $num1 * $num2;  
        }else{
            $result = $num1/$num2;  
        }
    }else{
        $num1 = "";
        $num2 = "";
        $result = "";
        $fuhao = "";
    }
?>

<!-- 当action为空字符串的时候，是提交到本页面! -->
<form action="" method="post">
    <input type="text" name="data1" value="<?php echo $num1 ?>" />
    <select name="yuansufu">
        <option value="+" <?php if($fuhao == "+"){ echo 'selected="selected"';} ?> >+</option>    
        <option value="-" <?php if($fuhao == "-"){ echo 'selected="selected"';} ?> >-</option>    
        <option value="*" <?php if($fuhao == "*"){ echo 'selected="selected"';} ?> >*</option>    
        <option value="/" <?php if($fuhao == "/"){ echo 'selected="selected"';} ?> >/</option>    
    </select>
    <input type="text" name="data2" value="<?php echo $num2 ?>" />
    <input type="submit" value="提交" />
    <input type="text" name="result" value="<?php echo $result; ?>" />
</form>


</body>
</html>