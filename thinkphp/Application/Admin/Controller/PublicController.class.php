<?php
// 命名空间声明
namespace Admin\Controller;
// 引入父类控制器
use Think\Controller;
// 声明类并且继承父类
class PublicController extends Controller{
	// 登录页面展示
	public function login(){
		$this->display();
	}
}
?>