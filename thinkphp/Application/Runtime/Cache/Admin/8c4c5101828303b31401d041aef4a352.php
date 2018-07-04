<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php echo (date('Y-m-d H:i:s',$time)); ?>
	个性签名:<?php echo ((isset($sign) && ($sign !== ""))?($sign):'这个家伙很懒,什么都没有留下...'); ?>
</body>
</html>