<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class MyDreamGirl{
			var $name = "小花"; //此时他叫做"属性"
			var $age = "18"; 
			var $edu = "大学";
			
			// 此时，他叫做"方法"了
			function xiyifu(){
				echo "<br/>{$this->age}岁的{$this->edu}学历的{$this->name}在勤快的洗衣服";
			}
		}

		// 创建一个新的Person类的对象，并"放入"变量$obj1中
		$obj1 = new MyDreamGirl();  
		$obj1->xiyifu();
	?>
</body>
</html>