<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// 创建表
	/*CREATE TABLE `user_list` (
	  `user_id` int(11) NOT NULL AUTO_INCREMENT,
	  `user_name` varchar(10) DEFAULT NULL,
	  `user_pass` char(32) DEFAULT NULL,
	  `age` tinyint(3) unsigned DEFAULT NULL,
	  `edu` enum('小学','中学','大学','硕士','博士') DEFAULT NULL,
	  `xingqu` set('排球','篮球','足球','地球') DEFAULT NULL,
	  `from` enum('东北','华北','华东','华南') DEFAULT NULL,
	  `reg_time` datetime DEFAULT NULL,
	  PRIMARY KEY (`user_id`)
	)*/

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
		
		$db1 = MySQLDB::GetInstance($config);

		// 删除用户数据
		if(!empty($_GET)){
			$id = $_GET['id'];
			$sql = "delete from user_list where user_id = $id";
			
			// 执行sql语句
			$db1->exec($sql); 
			echo "删除成功!"; 	
		}

		//接受表单数据
		if(!empty($_POST)){
			//先接收表单数据
			$username = $_POST['username'];
			$password = $_POST['password'];
			$age = $_POST['age'];
			$xueli = $_POST['xueli'];
			$aihao = $_POST['aihao']; //这是一个数组结果，类似这样:array('aa','bb','cc');
			$xingqu = "";
			
			$xingqu = implode(',',$aihao);
			// $xingqu就成了类似这样的字符串："aa,bb,cc"; 类似js的join函数
			$from =$_POST['from'];

			// 	然后，构建sql语句(insert语句)
			$sql = "INSERT into user_list 
					(user_name,user_pass,age,edu,xingqu,`from`,reg_time)
					VALUES(
						'$username',md5('$password'),$age,'$xueli','$xingqu','$from',now()
					)";

			// 执行sql语句
			$db1->exec($sql); 
			echo "执行成功!"; 
		}	

	?>	
	<form name="form1" action="" method="post">
		<h1>添加数据</h1>
		用户名：<input type="text" name="username"><br/>
		密码：<input type="password" name="password"><br/>
		年龄：<input type="text" name="age"><br/>
		学历：<select name="xueli">
			<option value="小学">小学</option>
			<option value="中学">中学</option>
			<option value="大学">大学</option>
			<option value="硕士">硕士</option>
			<option value="博士">博士</option>
		</select><br/>
		兴趣爱好：
		<input type="checkbox" name="aihao[]" value="排球">排球	
		<input type="checkbox" name="aihao[]" value="篮球">篮球
		<input type="checkbox" name="aihao[]" value="足球">足球
		<input type="checkbox" name="aihao[]" value="地球">地球
		<br/>
		地区：
		<input type="radio" name="from" value="东北">东北	
		<input type="radio" name="from" value="华北">华北
		<input type="radio" name="from" value="华东">华东
		<input type="radio" name="from" value="华南">华南
		<br/>
		<button type="submit">提交</button>
	</form>
	<?php
		$sql = "select * from user_list";
		$result = $db1->GetRows($sql);
		echo "<table border='1'>";
		foreach($result as $key=>$rec) {
			echo "<tr>";
			echo "<td>".$rec['user_name']."</td>";
			echo "<td>".$rec['age']."</td>";
			echo "<td>".$rec['edu']."</td>";
			echo "<td>".$rec['xingqu']."</td>";
			echo "<td>".$rec['from']."</td>";
			echo "<td>".$rec['reg_time']."</td>";
			echo "<td>";
			echo "<a href='?id={$rec['user_id']}' onclick = 'return queren()'>删除</a>";
			echo "</td>";
			echo "<tr/>";
		}
		echo "<table>";
		$user_count = $db1->GetOneData("select count(*) from user_list");
	?>
	当前用户总数为：<?php echo $user_count; ?>。
</body>
</html>
<script>
	function queren(){
		var s1 = window.confirm("你真的要删除吗?");
		return s1;
	}
</script>