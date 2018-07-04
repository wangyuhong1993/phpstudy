<?php
	namespace Admin\Controller;
	use Think\Controller;
	/**
	*  测试控制器
	*/
	class TestController extends Controller
	{
		
		function test()
		{	
			// echo U("Home/Index/index",array("id"=>1));
			$this -> display();
		}
		function test1(){
			$array = array(
				array('白骨精','大师兄','二师兄','沙师弟'),
				array('宋江','孙二娘','林冲','李逵')
			);
			$this->assign("array",$array);
			$this->display();
		}
		// 对象变量的使用
		function test2(){
			// 实例化student对象
			$stu = new Student();
			$stu-> id =100;
			$stu-> name ='马冬梅';
			// dump($stu); 
			$this->assign('stu',$stu);
			$this->display();
		}
		// 模板中使用函数
		function test3(){
			$time = time();
			$this->assign("time",$time);
			$this->display();
		}
		 // getLastSql最后一条成功的sql
        public function test4(){
            // 实例化模型
            $model = M('Dept'); 
            $data = $model -> select();
            echo $model->getLastSql();
        }

        // 使用AR模式的语法格式来实现增加操作
        public function test5(){
            // 第一个映射：类映射表
            $model = M('Dept'); 
            // 第二个映射：属性映射到字段
            $model -> name = '财务部';
            $model -> pid = 1;
            $model -> sort = 4;
           	$model -> remark = '这是财务部';
           	// 第三步：实例映射记录
           	$result = $model->add();
           	dump($result);
        }

        // 使用AR模式的语法格式来实现修改操作
        public function test6(){
            // 第一个映射：类映射表
            $model = M('Dept'); 
            // 第二个映射：属性映射到字段
            $model -> id = '2';
            $model -> pid = 2;
           	$model -> remark = '这是法务部';
           	// 第三步：实例映射记录
           	$result = $model->save();
           	dump($result);
        }

        // 使用AR模式的语法格式来实现修改操作
        public function test7(){
            // 第一个映射：类映射表
            $model = M('Dept'); 
            // 第二个映射：属性映射到字段
            $model -> id = '2';
           	// 第三步：实例映射记录
           	$result = $model->delete();
           	dump($result);
        }

        // 使用thinkPHP辅助方法where操作
        public function test8(){
            // 第一个映射：类映射表
            $model = M('Dept'); 
            // 第二个映射：属性映射到字段
            $model -> where('id > 2');
           	// 第三步：实例映射记录
           	$result = $model->select();
           	dump($result);
        }

        // 使用thinkPHP辅助方法field操作
        public function test9(){
            // 第一个映射：类映射表
            $model = M('Dept'); 
            // 第二个映射：属性映射到字段
            $model -> limit(3);
            // 第三步：实例映射记录
            $result = $model->select();
            dump($result);
        }

        // 使用thinkPHP辅助方法field操作
        public function test10(){
            // 第一个映射：类映射表
            $model = M('Dept'); 
            // 第二个映射：属性映射到字段
            $model -> field('id,name');
            // 第三步：实例映射记录
            $result = $model->select();
            dump($result);
        }

        // 使用thinkPHP辅助方法order操作
        public function test11(){
            // 第一个映射：类映射表
            $model = M('Dept'); 
            // 第二个映射：属性映射到字段
            $model -> order('id desc');
            // 第三步：实例映射记录
            $result = $model->select();
            dump($result);
        }
        // 使用thinkPHP辅助方法group操作
        public function test12(){
            // 第一个映射：类映射表
            $model = M('Dept'); 
            // 以name分组，统计出现的次数
            $model -> group('name,count(*) as count');
            // 第三步：实例映射记录
            $result = $model->select();
            dump($result);
        }
	}
?>