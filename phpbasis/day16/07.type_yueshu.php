<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		//演示类型约束:
		interface USB{}  // 这就是一个接口
		class A{} //这就是类
		class B implements USB{} //这个类实例了接口USB
		function f1($p1,array $p2,A $p3,USB $p4){
			echo "<br />没有约束的p1:".$p1;
			echo "<br />要求是数组的p2:";
				print_r($p2);
			echo "<br />要求是类A的对象:";
				var_dump($p3);
			echo "<br />要求是实现了接口USB的对象:";
				var_dump($p4);
		}

		$obj1 = new A();
		$obj2 = new B();
		$arr = array(1,2,3);
		f1('hehe',$arr,$obj1,$obj2);
	?>
</body>
</html>