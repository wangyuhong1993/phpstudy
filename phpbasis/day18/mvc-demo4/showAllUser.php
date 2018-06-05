<?php
	require './UserModel.class.php';
	require './ModelFactory.class.php';
	// 实例化模型类,并从中获取2份数据：
	// $obj_user = new UserModel(); 
	if(!empty($_GET['act'])&&$_GET['act']=='detail'){
		// 删除一个用户
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$data = $obj->GetUserInfoById($id);
		// 载入用户视图;
		include './userInfo.html';
	}else if(!empty($_GET['act'])&&$_GET['act']=='showForm'){
		// 新增用户
		include './showForm.html';
	}
	else if(!empty($_GET['act'])&&$_GET['act']=='addUser'){
		// 接受表单数据;
		$user_name = $_POST['username'];
		$user_pass = $_POST['password'];
		$age = $_POST['age'];
		$xueli = $_POST['xueli'];
		$aihao = $_POST['aihao'];
		$xingqu = implode(',', $aihao); // 将数组的所有项,用英文逗号'，'连接起来 
		$from = $_POST['from'];

		$obj = ModelFactory::M('UserModel');
		$result = $obj->InsertUser($user_name,$user_pass,$age,$xueli,$xingqu,$from);
		echo "<font color = red>添加用户成功!</font> ";
		echo "<a href='?'>返回</a>";

	}else if(!empty($_GET['act'])&&$_GET['act']=='del'){
		// 删除一个用户
		$id = $_GET['id'];
		$obj = ModelFactory::M('UserModel');
		$result = $obj->delUserById($id);
		echo "<font color = red>删除成功</font> ";
		echo "<a href='?'>返回</a>";
	}else {
		// 转化通过单例去实现
		$obj_user = ModelFactory::M('UserModel'); 
		$data1 = $obj_user->GetAllUser();
		$data2 = $obj_user->GetUserCount(); 

		// 载入视图文件,以显示该2份数据;
		include './showAllUser_view.html';
	}
	
?>