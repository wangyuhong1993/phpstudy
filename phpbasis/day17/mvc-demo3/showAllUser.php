<?php
	require './UserModel.class.php';
	require './ModelFactory.class.php';
	// 实例化模型类,并从中获取2份数据：
	// $obj_user = new UserModel(); 

	if(!empty($_GET['act'])){
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$result = $obj->delUserById($id);
		echo "<font color = red>删除成功</font>";
	}
	// 转化通过单例去实现
	$obj_user = ModelFactory::M('UserModel'); 
	$data1 = $obj_user->GetAllUser();
	$data2 = $obj_user->GetUserCount(); 

	// 载入视图文件,以显示该2份数据;
	include './showAllUser_view.html';
?>