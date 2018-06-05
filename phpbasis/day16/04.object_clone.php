<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class A{
			public $p1 =1;
		}
		$obj1 = new A();
		$obj1->p1 = 11;
		$obj2 = $obj1;
		var_dump($obj1);
		echo "<br />";
		var_dump($obj2);
		$obj3 = clone $obj1; // 克隆出新对象
		echo "<br />";
		var_dump($obj3);
		echo "<br />";
		$obj2->p2 = 22;
		var_dump($obj1); echo "<br />";
		var_dump($obj2); echo "<br />";
		var_dump($obj3); echo "<br />";

	?>
</body>
</html>