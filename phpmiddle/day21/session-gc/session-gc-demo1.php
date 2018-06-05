<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// 演示session的超时后的自动回收：
		ini_set("session.gc_maxlifetime", 15); // 15秒就超时
		ini_set("session.gc_probability", 1);  // 回收概率分子
		ini_set("session.gc_divisor", 1);  // 回收概率分母
		// 上述设定需要在"启动session"之前做：
		session_start();
		$_SESSION['sess1'] = '13579';
 	?>
 	<a href="session-gc-demo2.php">goto page2</a>
</body>
</html>