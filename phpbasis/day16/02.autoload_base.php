<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		function __autoload($name){
			require_once './'.$name.'.class.php';
		}

		// 参数配置关联数组
		$config = array(
			'host'=>"localhost",
			'port'=>3306,
			'user'=>"root",
			'pass'=>"root",
			'charset'=>"utf8",
			'dbname'=>"crashcourse"
		);	
		
		$db1 = MySQLDB::GetInstance($config);
	?>
</body>
</html>