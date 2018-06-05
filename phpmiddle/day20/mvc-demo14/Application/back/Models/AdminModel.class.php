<?php
	class AdminModel  extends BaseModel{
		function CheckAdmin($user,$pass){
			$sql = " select count(*) as c from admin_user where admin_name = '$user' and admin_pass =md5('$pass');";
			$result = $this->_dbo->GetOneData($sql);  // 返回一个数据值：表示找到的行数
			if($result){ // 表示找到一条数据,就是正确的身份验证
				// 登录成功之后，应该去修改(更新)该条数据
				$sql = "UPDATE admin_user set login_times = login_times+1,last_login_time = NOW() WHERE admin_name = '$user' and admin_pass = md5('$pass');";
				$result = $this->_dbo->exec($sql);
				return true;
			}else {
				return false;
			}
		}
	}
?>