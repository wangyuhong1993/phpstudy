<?php
	class AdminController extends BaseController{
		function loginAction(){
			if(!empty($_COOKIE['user_name'])){
				$cookie_user = $_COOKIE['user_name'];
			}else {
				$cookie_user = '';
			}
			include VIEW_PATH.'login.html';
		}
		function checkLoginAction(){
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$model = ModelFactory::M("AdminModel");
			$result = $model->CheckAdmin($user,$pass); 
			if($result){
				// 1.会话技术：cookie信息保存
				// setcookie("isLogin","ok");

				// 2.会话技术：session信息保存
				session_start();  // 开启session,此时服务器给浏览器发送一个cookie,cookie名就"PHPSESSID",cookie名就"PHPSESSID",cookie值是一个不重复的随机字符串
				$_SESSION['isLogin'] = "ok";  // 存储一个session数据,此数据"存储"在服务端。
				 
				// 记录用户名session各页面都可以用
				$_SESSION['user_name'] = $user;

				// 记住用户名
				setcookie("user_name",$user,time()+7*24*3600,"/");  // 7天之内可以不用输入用户名

				// 登录成功跳转至后台页 
				$this->goToUrl("登录成功","?p=back&c=Admin&act=LoginOK",1);
			}else{
				// 失败后就提示，并可以自动跳转到登录界面
				$this->goToUrl("登录失败","?p=back&c=Admin&act=login",2);
			}
		}
		function LoginOKAction(){
			session_start();
			// 获取session
			if(!empty($_SESSION['isLogin']) && $_SESSION["isLogin"] == "ok"){
				include VIEW_PATH.'admin_home.html';
			}else{
				$this->goToUrl("您还没有登录,请登录","?p=back&c=Admin&act=login",3);
			}
		}
		function productAdminAction(){
			session_start();
			// 获取session
			if(!empty($_SESSION['isLogin']) && $_SESSION["isLogin"] == "ok"){
				include VIEW_PATH.'product_admin.html';
			}else{
				$this->goToUrl("您还没有登录,请登录","?p=back&c=Admin&act=login");
			}
		}
		function logoutAction(){
			session_start();
			session_destroy();
			header("Location:?p=back&c=Admin&act=login");  // 直接跳转至登录页
		}
	}
	
?>