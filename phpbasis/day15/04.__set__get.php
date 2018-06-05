<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class A {
			// 定义一个属性,这个属性意图存储"若干个"不存在的属性和数据;
			protected $prop_list = array(); // 初始化空数组

			// 这个方法会在A的对象使用一个不存在的属性进行赋值的时候自动调用
			function __set($p,$v){
				echo "<br/>你正在使用不存在的属性";
				$this->prop_list[$p] = $v;
			}
			function __get($p){
				if(isset($this->prop_list[$p])){
					return $this->prop_list[$p];
				}else {
					return "该属性不存在";
				}
			}
			function __isset($prop){
				$v1 = isset($this->prop_list[$prop]);
				return $v1;
			}
			function __unset($prop){
				unset($this->prop_list[$prop]); //这里其实是在销毁其中的属性列表那个数组中的某个单元
			}
		}
		$a1 = new A(); 
		$a1->h1 = 1;
		$a1->h2 = 2;
		$a1->abc = '传智';
		echo "<hr/>";

		echo "<br />然后可以输出这些'不存在的属性'的值";
		echo "<br />a1->p1:".$a1->h1;
		echo "<br />a1->h2:".$a1->h2;
		echo "<br />a1->abc:".$a1->abc;

		// 下面演示isset判断一个不存在的属性
		$v1 = isset($a1->h1); 
		$v2 = isset($a1->h2);
		echo "<hr>";
		var_dump($v1);
		var_dump($v2);    

		// 下面演示销毁一个不存在的属性
		echo "<hr />";
		unset($a1->h2);
		echo "<br />a1-h2:".$a1->h2;
	?>
</body>
</html>