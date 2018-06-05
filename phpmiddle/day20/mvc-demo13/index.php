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

	// 设置自动加载
	function __autoload($class){
		$base_class = array("MySQLDB","BaseModel","ModelFactory","BaseController");
		if(in_array($class, $base_class)){
			require FRAMEWORK.$class.'.class.php';
		}else if (substr($class, -5) == "Model"){
			// 所需要的类的名字最后5个字符是"Model"时
			require MODEL_PATH.$class.'.class.php';
		}else if (substr($class, -10) == "Controller"){
			// 所需要的类的名字最后5个字符是"Model"时
			require CTRL_PATH.$class.'.class.php';
		}
	}

	// 以下6行代码,被上面自动加载函数所代替
	// require FRAMEWORK.'MySQLDB.class.php';
	// require FRAMEWORK.'BaseModel.class.php';
	// require FRAMEWORK.'ModelFactory.class.php';
	// require FRAMEWORK.'BaseController.class.php';  // 这个都一样，无需动

	// require MODEL_PATH. $c ."Model.class.php";  // 加载模型类
	// // 这里才是需要载入的"当前控制器类"
	// require CTRL_PATH.$c."Controller.class.php";


	$controller = $c."Controller";  // 构建控制器的类名

	$ctrl = new $controller(); // 创建类实例
	$act = !empty($_GET['act'])?$_GET['act']:'index';
	$action  =$act.'Action';
	$ctrl->$action();  //可变方法
?>