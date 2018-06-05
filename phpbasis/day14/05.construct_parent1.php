<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class Member{
			public $name = "匿名";
			public $age = 18;
			public $sex;
			function __construct($name,$age,$sex){
				$this->name = $name;
				$this->age = $age;
				$this->sex = $sex;
			}
		}
		class Teacher extends Member{
			public $edu = "大学";
			public $major;
			// 第二步
			function __construct($name,$age,$sex,$edu,$major){
				// 第三步
				// 手动调用父元素的构造方法
				parent::__construct($name,$age,$sex);
				$this->edu = $edu;
				$this->major = $major;
			}
			function ShowInfo(){
				echo "<br />姓名：{$this->name}";
				echo "<br />年龄：{$this->age}";
				echo "<br />性别：{$this->sex}";
				echo "<br />学历：{$this->edu}";
				echo "<br />专业：{$this->major}";
			}
		}
		// 第一步
		$t1 = new Teacher("张三",30,'男','大学','PHP');
		$t1->ShowInfo();
		?>
</body>
</html>