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

		function GetUserInfoById($id){
			$sql = "select *  from user_list where user_id = $id;";
			$data = $this->_dbo->GetOneRow($sql);
			return $data;
		}
		// 删除用户
		function delUserById($id){
			$sql = "delete from user_list where user_id = $id";
			$data = $this->_dbo->exec($sql);
			return $data;
		}
		// 插入用户数据
		function InsertUser($username,$password,$age,$xueli,$xingqu,$from){
			$sql = "INSERT into user_list 
					(user_name,user_pass,age,edu,xingqu,`from`,reg_time)
					VALUES(
						'$username',md5('$password'),$age,'$xueli','$xingqu','$from',now()
					)";
			$data = $this->_dbo->exec($sql);
			return $data; 
		}
		// 更新用户表数据
		function UpdateUser($id,$user_name,$user_pass,$age,$edu,$xingqu,$from){
			$sql = "update user_list set user_name = '$user_name'";
			if(!empty($user_pass)){
				$sql.=",user_pass = md5('$user_pass')";
			}
			$sql.=",age = '$age'";	
			$sql.=",edu = '$edu'";
			$sql.=",xingqu = '$xingqu'";
			$sql.=",`from` = '$from'";
			$sql.=" where user_id = '$id'";	
			$result = $this->_dbo->exec($sql);
			return $result;
		}
	}
?>