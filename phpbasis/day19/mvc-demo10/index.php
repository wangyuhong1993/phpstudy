<?php
	// php 自动执行index.php文件 
	
	$p = !empty($_GET['p'])?$_GET['p']:'front'; // 确定使用哪个平台。 
	define("PLAT", $p); // 平台常量
	define("DS",DIRECTORY_SEPARATOR); // unix:'/',windows:'\'
	define("ROOT", __DIR__.DS);
	define("APP",ROOT.'Application'.DS); //application的完整路径
	define("FRAMEWORK", ROOT.'Framework'.DS);  //框架基础类所在路径
	define("PLAT_PATH", APP.PLAT.DS);  // 当前平台所在目录
	define("CTRL_PATH", PLAT_PATH.'Controllers'.DS);  // 当前控制器所在目录
	define("MODEL_PATH", PLAT_PATH.'Models'.DS);  // 当前模型所在目录
	define("VIEW_PATH", PLAT_PATH.'Views'.DS);  // 当前视图所在目录

	// User当做默认控制器
	$c = !empty($_GET['c'])?$_GET['c']:'User'; // 他可能是"User"、"Product"或其他

	require FRAMEWORK.'MySQLDB.class.php';
	require FRAMEWORK.'BaseModel.class.php';
	require FRAMEWORK.'ModelFactory.class.php';
	require FRAMEWORK.'BaseController.class.php';  // 这个都一样，无需动

	require MODEL_PATH. $c ."Model.class.php";  // 加载模型类

	// 代表某个控制器,每个控制器是一个独立文件,但并不写在这里
	// 而是$c决定
	// class XXXController extends BaseController{....}

	// 这里才是需要载入的"当前控制器类"
	require CTRL_PATH.$c."Controller.class.php";
	$controller = $c."Controller";  // 构建控制器的类名

	$ctrl = new $controller(); // 创建类实例
	$act = !empty($_GET['act'])?$_GET['act']:'index';
	$action  =$act.'Action';
	$ctrl->$action();  //可变方法
?>