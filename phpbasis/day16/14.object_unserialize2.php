<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include './class/Xuliehua2.class.php';
		// 这里，演示对象的反序列化效果
		$s1 = file_get_contents('./obj2.txt');
		$o1 = unserialize($s1);
		echo "<pre>";
			var_dump($o1);
		echo "</pre>";
		// 调用对象的方法
		$o1->f1();
	?>
</body>
</html>