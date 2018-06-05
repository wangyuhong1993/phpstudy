<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	主文件开始位置:
	<?php
		echo "<br />主文件中的位置A";
		$v1 = include "./page1.php";  //要载入的文件
		echo "<br />"; var_dump($v1);
		
		echo "<br />主文件中的位置B";
	?>
	<br />主文件结束位置：
</body>
</html>