<?php
	require './BaseModel.class.php';
	class UserModel extends BaseModel{
		// 获取用户数据
		function GetAllUser(){
			$sql = "select * from user_list;";
			// $_dbo = MySQLDB::GetInstance($config);
			// $data = $_dbo->GetRows($sql);	
			$data = $this->_dbo->GetRows($sql);
			return $data;
		}

		// 获取用户数量
		function GetUserCount(){
			$sql = "select count(*) as c from user_list;";
			// $_dbo = MySQLDB::GetInstance($config);
			// $data = $_dbo->GetOneData($sql);
			$data = $this->_dbo->GetOneData($sql);	
			return $data;
		}

		// 删除用户
		function delUserById($id){
			$sql = "delete from user_list where user_id = $id";
			$data = $this->_dbo->exec($sql);
			return $data;
		}
	}
?>