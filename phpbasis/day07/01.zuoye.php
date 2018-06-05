<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		function chuanlian(){
			$arr = func_get_args();  // 获得所有参数
			$s1 = $arr[0];
			$len = count($arr);  // 获取数组的长度
			$str = "";  //用于存储串联之后的结果
			for($i = 1; $i < $len; ++$i){
				if( $i < $len -1 ){
					$str .= $arr[$i].$s1;
				} else {
					$str .= $arr[$i];
				}
			} 
			return $str;
		}
		
		$str = chuanlian('-',"ab","cd","ef");
		echo "串联后的结果为：$str"; 
	?>
</body>
</html>