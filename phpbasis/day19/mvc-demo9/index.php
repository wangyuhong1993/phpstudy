<?php
	// php 自动执行index.php文件 

	// User当做默认控制器
	$c = !empty($_GET['c'])?$_GET['c']:'User'; // 他可能是"User"、"Product"或其他

	require './Framework/MySQLDB.class.php';
	require './Framework/BaseModel.class.php';
	require './Framework/ModelFactory.class.php';
	require './Framework/BaseController.class.php';  // 这个都一样，无需动
	require "./Models/". $c ."Model.class.php";  // 加载模型类

	// 代表某个控制器,每个控制器是一个独立文件,但并不写在这里
	// 而是$c决定
	// class XXXController extends BaseController{....}

	// 这里才是需要载入的"当前控制器类"
	require "./Controllers/".$c."Controller.class.php";
	$controller = $c."Controller";  // 构建控制器的类名

	$ctrl = new $controller(); // 创建类实例
	$act = !empty($_GET['act'])?$_GET['act']:'index';
	$action  =$act.'Action';
	$ctrl->$action();  //可变方法
?>