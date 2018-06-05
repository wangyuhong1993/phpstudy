<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class C1{
			// 定义普通常量1
			const PI = 3.14;
			const G = 9.8;
		}

		// 使用类常量:
		$v1 = C1::PI*3*3;
		echo "<br/>v1 = $v1";
		echo "<br/>C1::G = ".C1::G;
	?>
</body>
</html>