<?php
    // 第一步：声明命名空间
    namespace Home\Controller;
    // 第二步：定义控制器并且继承父类
    use Think\Controller;
    class UserController extends Controller{
        // 测试方法 public private protected static
        public function test(){
            echo $_GET['id'];
        }
    }
    
?>