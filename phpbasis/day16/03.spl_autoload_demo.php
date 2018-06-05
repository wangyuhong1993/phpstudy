<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// 这里，演示自定义的自动构造函数的使用：
	spl_autoload_register("autoload1"); // 声明"autoload1"作为自动加载函数
	spl_autoload_register("autoload2"); // 声明"autoload1"作为自动加载函数

	function autoload1($class_name){
		// 这个自动加载函数，用于加载class目录中的类文件
		$file = "./class/".$class_name.".class.php";
		if(file_exists($file)){
			// 如果文件存在————需要控制一下，因为每次都需要先调用这个自定义加载函数
			require_once $file;
		}
		// 如果不存在，则本函数就没有成功加载该类文件，就会加载lib目录中的类文件
	}
	function autoload2($class_name){
		// 这个自动加载函数，用于加载class目录中的类文件
		$file = "./lib/".$class_name.".class.php";
		if(file_exists($file)){
			// 如果文件存在————需要控制一下，因为每次都需要先调用这个自定义加载函数
			require_once $file;
		}
		// 如果不存在，则本函数就没有成功加载该类文件，就会加载lib目录中的类文件
	}
	$a1 = new A(); // 这个类在class目录下;
	echo "<br />";
	var_dump($a1);
	$b1 = new B(); // 这个类在class目录下;
	echo "<br />";
	var_dump($b1);
	?>
</body>
</html>