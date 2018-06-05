<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class Person{
			var $name; //一个特征，其实就是"变量"
			var $age; //一个特征，其实就是"变量"
			var $edu;
		}

		// 创建一个新的Person类的对象，并"放入"变量$obj1中
		$obj1 = new Person();  
		$obj1->name = "张三"; //符号"->"就是表示指代对象中的某个"特征",这里是给特征赋值
		$obj1->age = 18;
		$obj1->edu = "大学";
		var_dump($obj1);  
	?>
</body>
</html>