<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class C1{
			public $p1 = 1;
			static $p2 = 2;
			function showInfo1(){
				// 实例方法
				echo "<br />实例方法被调用!";
				echo "<br />p1的值为: ".$this->p1;
				// $this代表一个对象，就是调用当前这个
			}
			static function showInfo2(){
				// 实例方法
				echo "<br />静态方法被调用!";
				echo "<br />p1的值为: ".self::$p2;
				// self代表实例本身
				// 使用$this会报错，因为实例不是对象
			}
		}

		$o1 = new C1(); 
		$o1->showInfo1();  // 使用对象调用实例方法
		C1::showInfo2();  // 使用类来调用静态方法
	?>
</body>
</html>