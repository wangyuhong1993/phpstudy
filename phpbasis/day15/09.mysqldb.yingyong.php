<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		require './MySQLDB.class.php';

		// 参数配置关联数组
		$config = array(
			'host'=>"localhost",
			'port'=>3306,
			'user'=>"root",
			'pass'=>"root",
			'charset'=>"utf8",
			'dbname'=>"crashcourse"
		);	
		
		$db1 = new MySQLDB($config);

		// 1.表查询
		$result = mysql_query("select * from student");
		var_dump($result);
			
		// 1.改变编码
		// $db1->setCharset("gbk");
		$result2 = mysql_query("select * from student");
		$rec = mysql_fetch_array($result2);
		echo "<hr/>";
		print_r($rec['sname']);

		// 3.测试链接关闭
		// $db1->closeDB();
		// $result = @mysql_query("select * from student");
		// 结果返回bool(false),说明已经关闭
		
		// 4.表数据操作
		$v1 = rand(0,100); 
		$sql = "insert into tab_int(f1,f2,f3) values($v1,2,3)";
		$db1->exec($sql);
			
		// 5.一行数据操作
		$sql = "select * from tab_int where f1= 1";
		$tab_int = $db1->GetOneRow($sql); // 这里返回的就是一个数组
		echo "<br/>f1:".$tab_int['f1'];
		echo "<br/>f2:".$tab_int['f2'];
		echo "<br/>f3:".$tab_int['f3'];

	?>	
</body>
</html>