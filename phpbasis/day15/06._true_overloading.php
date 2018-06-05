<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// 目标：设计一个类：这个类的实例，可以实现如下需求：
		// 调用方法f1:传入一个参数，就求其平方，传入2个参数，就求其立方和,传入3个参数，就求其立方和;
		class A {
			// 这是一个魔术方法，在A的对象调用不存在的方法的时候
			// 会被自动吊用来应该这种情况
			function __call($Func_name,$arguments){
				if($Func_name === "f1"){
					$len = count($arguments);  // 获取实参的数量
					if($len <1 || $len > 3) {
						trigger_error("使用非法的方法!",E_USER_ERROR);
					}else if ($len == 1){
						return $arguments[0];
					}else if ($len == 2 ){
						return pow($arguments[0],2)+pow($arguments[1],2); 
					}else if ($len == 3){
						return pow($arguments[0],3)+pow($arguments[1],3)+pow($arguments[2],3);
					}
				}else if ($Func_name === "f2"){

				}else {
					
				}
			}
		}
		$a1 = new A();
		$v1 = $a1->f1(1);
		$v2 = $a1->f1(2,3);
		$v3 = $a1->f1(4,5,6);
		echo "<br />v1:".$v1;
		echo "<br />v2:".$v2;
		echo "<br />v3:".$v3;
	?>
</body>
</html>