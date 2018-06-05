<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class C1{  // 女神
			public $name;			
			function __construct($p1){
				$this->name = $p1; 
			}
			function __destruct(){
				// 析构方法,不能带参数
				echo "<br />{$this->name}被销毁了";
			}
		}
		$o1 = new C1('A');  // 程序运行结束，变量(对象)肯定都会被销毁!
		$o2 = new C1('B');
		$o3 = new C1('C');
		echo "<br/>"; var_dump($o1);
		echo "<br/>"; var_dump($o2);
		echo "<br/>"; var_dump($o3);
		echo "<br/>";
			
		<!-- 结果：
		object(C1)#1 (1) { ["name"]=> string(1) "A" } 
		object(C1)#2 (1) { ["name"]=> string(1) "B" } 
		object(C1)#3 (1) { ["name"]=> string(1) "C" } 

		C被销毁了
		B被销毁了
		A被销毁了 -->
		<!-- 1:对象销毁的顺序,默认情况下，跟其创建的顺序相反  -->

		

	?>
</body>
</html>