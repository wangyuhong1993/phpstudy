<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// 单例模式：
		// 就是设计这样一个类，这个类只能"创造"出它的一个对象(实例):
		class Single{
			// 构造函数添加private,类不可new创建对象 
			// 第一步：私有化改造函数
			private function __construct(){
				
			}
			// 第二步：定义一个静态属性，初始化null
			static private $instance = null;
			// 第三步：顶一个静态方法，从中判断对象是否生成并适当返回该对象
			static function GetObject(){
				// 准备在这里,根据自己的逻辑，控制好对象的数量:就一个;
				// 然后"返回给人家"
				if(!isset(self::$instance)){
					// 还没有生产
					$obj = new self(); // 就生产一个
					self::$instance = $obj;  // 并妥当地存起来;
					return $obj;  // 然后返回
				}else {
					return self::$instance;  // 就直接返回该已经生产的对象
				}
			}
		}
		// $ob1 = new Single();
		// $ob2 = new Single();
		$ob1 = Single::GetObject(); 
		var_dump($ob1); echo "<br />";
		$ob2 = Single::GetObject(); 
		var_dump($ob2); echo "<br />";
	?>
</body>
</html>