<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class A{
			public $p1 = "这是A中的属性";
			static protected $p2 = 2;
		}
		class B extends A{
			static function Show1(){
				echo "<p>这里是子类B中的方法";
				echo "<br />这里要显示父类的属性p1:".parent::$p1;
				echo "<br />这里要显示父类的属性p2:".parent::$p2;
			}
		}
		
		B::Show1();  // 静态方法，直接使用类名来调用	
		?>
</body>
</html>