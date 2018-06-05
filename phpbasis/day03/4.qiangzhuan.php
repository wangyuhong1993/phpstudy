<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// 强制转化
		$v1 = 123;
		$s1 = (float) $v1;  // 将v1的值转换为float类型
		$s2 = (string) $v1;  // 将v1的值转换为string类型
		echo "<br />s1为"; var_dump($s1); 
		echo "<br />s2为"; var_dump($s2);
		echo "<hr />";

		$v2 = 456;
		echo "<br />v2为"; var_dump($v2);    // 本身是整形
		setType($v2, "string");  //直接转换v2的类型为string
		echo "<br />v2为"; var_dump($v2);    // 转换为字符串
	?>
</body>
</html>