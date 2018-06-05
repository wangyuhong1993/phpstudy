<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class Animal{
			public $p1 = "能进食";
			function Move(){
				echo "<br />能移动身体";
			}
		}
		class Fish extends Animal{
			public $skin = "布满鱼鳞"; 
			// 覆盖了父类的同名属性
			public $p1 = "张开圆形的嘴巴大量进食";  
			// 覆盖了父类的同名函数
			function Move(){
				echo "<br />摆动尾巴前进";
			}
		}
		$f1 = new Fish();
		$f1->Move();
		?>
</body>
</html>