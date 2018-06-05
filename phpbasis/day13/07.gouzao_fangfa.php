<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class NvShen{  // 女神
			var $name;			
			var $age;
			var $edu;
			function __construct($p1,$p2,$p3){
				$this->name = $p1; //将$p1数据赋值给当前对象的name属性
				$this->age = $p2;
				$this->edu = $p3;
			}
			function xiyifu(){
				echo "<br />{$this->age}岁的{$this->edu}学历";
				echo "的{$this->name}在勤快地洗衣服";
			}
		}
		$girl3 = new NvShen('小花',18,'大学');
		$girl3->xiyifu();

		$girl4 = new NvShen('小红',19,'高中');
		$girl4->xiyifu();
	?>
</body>
</html>