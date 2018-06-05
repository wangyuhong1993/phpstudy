<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$dsn = "mysql:host=localhost; port=3306; dbname=crashcourse";
		$opt = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8');
		$pdo = new pdo($dsn,'root','root',$opt);
		
		$sql = "select * from user_list where user_id = ? and age = ?";
		$stmt = $pdo->prepare($sql);
		// $stmt->bindValue(1,15);
		// $stmt->bindValue(2,23);
		//3.执行
		$stmt->execute(array(15,23));
		$arr = $stmt->fetch(PDO::FETCH_ASSOC);
		print_r($arr);
		
		/* 预处理2 */
		/*$sql = "select * from user_list where user_id = :v1 and age = :v2";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(":v1",15);
		$stmt->bindValue(":v2",23);
		//3.执行
		$stmt->execute();
		$arr = $stmt->fetch();
		print_r($arr);*/
	?>
</body>
</html>