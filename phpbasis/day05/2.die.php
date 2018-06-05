<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		echo "<br />A";
		echo "<br />当前时间：".Date('Y-m-d H:i:s');
		sleep(3);   // 停止3秒，然后才允许后续程序
		echo "<br />当前时间：".Date('Y-m-d H:i:s');
		echo "<br />B";
		die("<br />终止!");
		echo "<br />C";
		echo "<br />D";
	?>
</body>
</html>