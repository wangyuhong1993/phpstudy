<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class C1{  // 女神
			var $name;			
			function __construct($p1){
				$this->name = $p1; 
			}
			function __destruct(){
				// 析构方法,不能带参数
				echo "<br />{$this->name}被销毁了";
			}
		}
		$o1 = new C1('小花');  // 程序运行结束，变量(对象)肯定都会被销毁!
	?>
</body>
</html>