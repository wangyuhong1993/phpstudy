<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class A{
			public $p1 = 1;
			function __get($prop_name){
				// $prop_name 是传递的属性名，也可以不接收
				echo "<br />你小心点啊,你正用的属性{$prop_name}我还没有定义呢。";
				// return ''; //也可以返回0，或false,或任何其他被"看做没有"的数据。
				// 也可以这样处理
				trigger_error("发生错误：属性不存在。",E_USER_ERROR);
			}
		}
		$a1 = new A();
		echo $a1->p1; //1;
		echo $a1->p2;  //一旦该类中定义了__GET方法，此时就不会报错，而是直接调用该方法了
	?>
</body>
</html>