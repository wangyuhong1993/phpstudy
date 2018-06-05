<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class A{
			static $p1 = 1;
			static function show1(){
				echo "<br/>self::p1:".self::$p1;
				echo "<br/>static::p1:".static::$p1;
			}
		}
		class B extends A{
			static $p1 = 11;
		}
		A::show1();
		echo "<hr/>";
		B::show1();
	?>
</body>
</html>