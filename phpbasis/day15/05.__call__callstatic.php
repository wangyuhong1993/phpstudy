<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class A {
			// 当对这个类中的对象的不存在的实例方法进行"调用"的时候，会自动调用本方法
			// 必须带两个形参：方法名，实参数据（数组）
			function __call($mothodName,$argument){
				echo "__call方法被调用了";
			}
			
		}
		$a1 = new A();
		$a1->f1(); // 不存在的方法时
	?>
</body>
</html>