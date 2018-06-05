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
			function f1(){
				echo "<br/>这是A中方法f1";
			}
		}
		class B extends A{
			public $p2= "这是B中属性";
		}
		
		$b1 = new B();  
		echo "<br />".$b1->p1; // 输出属性
		$b1->f1(); // 调用方法
	?>
</body>
</html>