<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		require_once("./session-save-base.php");
		// 上述设定需要在"启动session"之前做：
		session_start();
		if(!empty($_SESSION['sess1'])){
			echo $_SESSION['sess1'];
		}else {
			echo "不存在sess1";
		}
 	?>
</body>
</html>