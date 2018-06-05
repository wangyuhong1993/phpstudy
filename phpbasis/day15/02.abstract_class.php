<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// 怪物类(抽象类)
		abstract class Guai{
			protected $blood = 100;
			abstract protected function Attach();  //抽象方法
		}
		// 蛇怪类
		class Snake extends Guai{
			protected function Attach(){
				echo "<br />悄悄靠近主人公，然后迅猛咬一口";
				$this->blood--; // 自身掉血1点
			}
		}
		// 虎怪类
		class Tiger extends Guai{
			protected function Attach(){
				echo "<br />猛扑猛咬主人公";
				$this->blood--; // 自身掉血1点
			}
		}

		// 妖怪：这个类，作为抽象类,可以不去"实现"父类的抽象方法;
		// 也可以实现
		abstract class Yao extends Guai {

		}
		class bajie extends Yao {
			function Attach(){
				echo "<br />猛扒主人公";
				$this->blood-=2; // 自身掉血1点
				echo "$this->blood";
			}
		}

		$o1 = new bajie();
		$o1->Attach();  // 98
	?>
</body>
</html>