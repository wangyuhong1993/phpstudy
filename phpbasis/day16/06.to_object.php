<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// 参数配置关联数组
		$config = array(
			'host'=>"localhost",
			'port'=>3306,
			'user'=>"root",
			'pass'=>"root",
			'charset'=>"utf8",
			'5'=>"hehe"
		);	
		$obj1 = (object)$config;
		echo "<pre>";
		var_dump($obj1);
		echo "</pre>";
		echo "<br/>单独取user出来：".$obj1->user;
		// echo "<br/>单独取5出来：".$obj1->5; //报错

		echo "<hr/>";
		$v1 = 1;   $objv1 = (object)$v1;
		$v2 = 2.2;  $objv2 = (object)$v2;
		$v3 = "abc";  $objv3 = (object)$v3;
		$v4 = true;  $objv4 = (object)$v4;
		var_dump($objv1);echo "<br />";
		var_dump($objv2);echo "<br />";
		var_dump($objv3);echo "<br />";
		var_dump($objv4);echo "<br />";
	?>
</body>
</html>