<?php
	namespace Admin\Controller;
	use Think\Controller;
	/**
	*  测试控制器
	*/
	class IndexController extends Controller
	{
        // index
        public function index(){

            $this->display();
        }
        // home
        public function home(){

            $this->display();
        }
	}
?>