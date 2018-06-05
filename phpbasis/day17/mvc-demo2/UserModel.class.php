<?php
	require './BaseModel.class.php';
	class UserModel extends BaseModel{
		function GetAllUser(){
			$sql = "select * from user_list;";
			// $db = MySQLDB::GetInstance($config);
			// $data = $db->GetRows($sql);	
			$data = $this->db->GetRows($sql);
			return $data;
		}

		function GetUserCount(){
			$sql = "select count(*) as c from user_list;";
			// $db = MySQLDB::GetInstance($config);
			// $data = $db->GetOneData($sql);
			$data = $this->db->GetOneData($sql);	
			return $data;
		}
	}
?>