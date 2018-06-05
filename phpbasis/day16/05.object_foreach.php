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
			protected $p2 = 2;
			private $p3 = 3;
			static $p4 =4;
			function shwoAllProperties(){
				foreach($this as $key => $value){
					echo "<br/>属性$key:$value";
					// $this指向调用的对象$obj1  这个位置属于类的内部,就可以访问所有级别的实例属性了。
				}	
			}	
		}
		$obj1 = new A();
		foreach($obj1 as $key => $value){
			echo "<br/>属性$key:$value";
		}	
		echo "<hr />";
		// 那怎么能够将一个对象的所有属性都遍历出来呢?
		$obj1->shwoAllProperties(); 
	?>
</body>
</html>