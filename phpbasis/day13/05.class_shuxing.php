<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class Student{
			public $name = ''; // 实理属性
			static $count = 0; // 静态属性
		}

		$s1 = new Student();
		$s1->name = "杜建"; // 使用普通属性，这里是赋值;
		Student::$count++; // 使用静态属性;

		$s1 = new Student();
		$s1->name = "王辉"; 
		Student::$count++; 

		echo "<br/>当前的学生对象总数为:".Student::$count;
	?>
</body>
</html>