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
		
		$sql = "select * from user_list where user_id = ?";
		$stmt = $pdo->prepare($sql);

		$arr = array(15,22,20);
		foreach ($arr as $value) {
			$stmt->bindValue(1,$value);
			//3.执行
			$stmt->execute();
			$arr = $stmt->fetch(PDO::FETCH_ASSOC);
			print_r($arr);
			echo "<br/>";	
		}
		

		
		/* 预处理2 */
		// $sql = "select * from user_list where user_id = :v1 and age = :v2";
		// $stmt = $pdo->prepare($sql);
		// $stmt->bindValue(":v1",15);
		// $stmt->bindValue(":v2",23);
		// //3.执行
		// $stmt->execute();
		// $arr = $stmt->fetch();
		// print_r($arr);
	?>
</body>
</html>