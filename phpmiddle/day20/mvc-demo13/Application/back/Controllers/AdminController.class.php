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
				// 会话技术：保存登录信息
				setcookie("isLogin","ok");
				// 登录成功跳转至后台页 
				$this->goToUrl("登录成功","?p=back&c=Admin&act=LoginOK",1);
			}else{
				// 失败后就提示，并可以自动跳转到登录界面
				$this->goToUrl("登录失败","?p=back&c=Admin&act=login",2);
			}
		}
		function LoginOKAction(){
			// 获取cookie
			if(!empty($_COOKIE['isLogin'])&&$_COOKIE["isLogin"]=="ok"){
				include VIEW_PATH.'admin_home.html';
			}else{
				$this->goToUrl("您还没有登录,请登录","?p=back&c=Admin&act=login",3);
			}
		}
	}
	
?>