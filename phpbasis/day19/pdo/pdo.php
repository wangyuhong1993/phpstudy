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
		// var_dump($pdo); // 打印pdo对象看看

		// 错误——静默模式
		$sql = "updateee tab_int set f1 =1;";  // 错误语句
		$result = $pdo->exec($sql); 
		if($result===false){
			echo "<p>发生错误：";
			echo "<br />错误代号：".$pdo->errorCode();
			$e = $pdo->errorInfo(); // 这个一个数组,第三项是错误
			echo "<br />$e[2]";
		}

		// 错误——异常模式
		// 下面，让pdo对象"进入"异常模式,已处理出错信息：
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		try{
			$sql = "updateee tab_int set f1 =1;";  // 错误语句
			$result = $pdo->exec($sql);
			echo "执行成功";
		}catch(Exception $e){  // $e 就是错误对象
			echo "<p>发生错误：";
			echo "<br />错误代号：".$e->getCode();
			echo "<br />".$e->getMessage ();
		}
	?>
</body>
</html>