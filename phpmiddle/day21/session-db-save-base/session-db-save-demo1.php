<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		require_once("./session-db-save-base.php");
		// 上述设定需要在"启动session"之前做：
		session_start();
		$_SESSION['sess1'] = '2468';
 	?>
 	<a href="./session-save-demo2.php">goto page2</a><br/>
	 <a href="./session-save-demo3.php">goto page3</a>
</body>
</html>