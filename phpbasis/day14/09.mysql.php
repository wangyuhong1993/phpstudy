<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		/*
			设计一个类：mysql数据库操作类
			设计目标：
			1.该类一实例化，就可以自动连接上mysql数据库;
			2.该类可以单独去设定要使用的链接编码(set names XXX);
			3.该类可以单独去设定要使用的数据库(use XXX);	
			4.可以主动关闭链接
		*/
		class MySQLDB{
			public $link = null;
			function __construct($host,$port,$user,$pass,$charset,$dbname){
				// @一般
				$this->link = @mysql_connect("$host:$port","$user","$pass") or die("连接失败");
				// 设置数据库编码
				mysql_query("set names $charset");
				mysql_query("use $dbname");
			}
			// 重新设置编码
			function setCharset($charset){
				mysql_query("set names $charset");
			}
			// 可以设定要使用的链接编码
			function selectDB($dbname){
				mysql_query("use $dbname");
			}
			// 可关闭链接
			function closeDB(){
				mysql_close($this->link);
			}
		}
		$host = "localhost";
		$port = 3306;
		$user = "root";
		$pass = "root";
		$charset = "utf8";
		$dbname = "crashcourse";
		$db1 = new MySQLDB($host,$port,$user,$pass,$charset,$dbname);

		// 表查询
		$result = mysql_query("select * from student");
		var_dump($result);
			
		// 改变编码
		// $db1->setCharset("gbk");
		$result2 = mysql_query("select * from student");
		$rec = mysql_fetch_array($result2);
		echo "<hr/>";
		print_r($rec['sname']);

		// 测试链接关闭
		$db1->closeDB();
		$result = @mysql_query("select * from student");
		var_dump($result);
		// 结果返回bool(false),说明已经关闭
	?>
</body>
</html>