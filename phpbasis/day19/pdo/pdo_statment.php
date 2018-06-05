<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		/* 
		写法1：
		$dsn = "mysql:host=localhost;port=3306;dbname=crashcourse";
		$pdo = new PDO($dsn, 'root', 'root');
		$pdo->query("set character set 'utf8'");*/
		
		$dsn = "mysql:host=localhost; port=3306; dbname=crashcourse";
		$opt = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8');
		$pdo = new pdo($dsn,'root','root',$opt);

		$sql = "SELECT * FROM tab_int";
		$stmt = $pdo->query($sql);
		$arr1 = $stmt->fetch(PDO::FETCH_ASSOC);
		$arr2 = $stmt->fetch(PDO::FETCH_NUM);
		$arr3 = $stmt->fetch();
		echo "<br />"; print_r($arr1);
		echo "<br />"; print_r($arr2);
		echo "<br />"; print_r($arr3);	
	?>
</body>
</html>