<?php
    // 第一步：声明命名空间
    namespace Admin\Controller;
    // 第二步：定义控制器并且继承父类
    use Think\Controller;
    class DeptController extends Controller{
        public function shilihua(){
            // 普通实例化
            $model = new \Admin\Model\DeptModel();
            dump($model);
        }
        // add方法使用
        public function add(){
            // 实例化模型
            $model = M('Dept'); 
            // 声明数组(关联数组)
            $data = array(
                'name' => '人事部',
                'pid' => '0',
                'sort' => '1',
                'remark' => '这是人事部门'
            );
            $result = $model->add($data); // 增加操作
            dump($result);
        }
        // addAll方法添加多条数据
        public function addAll(){
            // 实例化模型
            $model = M('Dept'); 
            // 声明数组(关联数组)
            $data = array(
                array(
                    'name' => '行政部',
                    'pid' => '0',
                    'sort' => '2',
                    'remark' => '这是行政部门'
                ),
                array(
                    'name' => '技术部',
                    'pid' => '0',
                    'sort' => '3',
                    'remark' => '这是技术部门'
                )
            );
            $result = $model->addAll($data); // 增加操作
            dump($result);
        }
        // save方法修改数据
        public function save(){
            // 实例化模型
            $model = M('Dept'); 
            // 声明数组(关联数组)
            $data = array(
                'id' => '1',
                'pid' => '1',
            );
            $result = $model->save($data); // 增加操作
            dump($result);
        }
        // select方法修改数据
        public function select(){
            // 实例化模型
            $model = M('Dept'); 
            $data = $model -> select();
            $data1 = $model -> select(1);

            // find部分
            $data2 = $model->find(); 
            $data3 = $model->find(2); 
            dump($data1);
        }
       
    }
    
?>