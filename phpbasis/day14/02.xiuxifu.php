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
			protected $p2 = 2;
			private $p3 = 3;
			
			// 2.访问类类部的受保护变量
			function showInfo(){
				echo "<br />this->p1=".$this->p1;
				echo "<br />this->p2=".$this->p2;
				echo "<br />this->p3=".$this->p3;
			}
		}
		$a1 = new A();
		echo "<br />a1->p1=".$a1->p1;  
		
		// 1.直接使用
		/**
		echo "<br />a1->p2=".$a1->p2;  // 出错
		echo "<br />a1->p3=".$a1->p3;  // 出错 */

		echo "<hr />";
		$a1->showInfo();

		class B extends A{
			function showParentInfo(){
				echo "<br />this->p1=".$this->p1;
				echo "<br />this->p2=".$this->p2;
				echo "<br />this->p3=".$this->p3;  // 出错！因为这里是继承类内部，又是私有的
			}
		}

		echo "<hr/>";
		$b1= new B(); 
		$b1->showParentInfo(); 
	?>
</body>
</html>