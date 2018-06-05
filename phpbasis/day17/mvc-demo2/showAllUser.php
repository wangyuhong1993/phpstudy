<?php
	require './UserModel.class.php';
	// 实例化模型类,并从中获取2份数据：
	$obj_user = new UserModel(); 
	$data1 = $obj_user->GetAllUser();
	$data2 = $obj_user->GetUserCount();
	// 载入视图文件,以显示该2份数据;
	include './showAllUser_view.html';
?>