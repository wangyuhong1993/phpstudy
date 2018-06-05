<?php
	class AdminController extends BaseController{
		function loginAction(){
			include VIEW_PATH.'login.html';
		}
		function checkLoginAction(){
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$model = ModelFactory::M("AdminModel");
			$result = $model->CheckAdmin($user,$pass); 
			if($result){
				echo "登录成功";
			}else{
				// 失败后就提示，并可以自动跳转到登录界面
				$this->goToUrl("登录失败","?p=back&c=Admin&act=login",2);
			}
		}
	}
	
?>