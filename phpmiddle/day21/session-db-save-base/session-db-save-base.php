<?php
    // 演示session的超时后的自动回收：
    ini_set("session.gc_maxlifetime", 15); // 15秒就超时
    ini_set("session.gc_probability", 1);  // 回收概率分子
    ini_set("session.gc_divisor", 2);  // 回收概率分母

    ini_set("session.save_handler","user");  // session自定义存储
    // 该函数一次性设定6个函数名，分别代表session运行时要做的6个事情:
    // 开始，结束，读，写，删除，回收
    // 函数名可以自己定,但每个函数名,页都必定需要去对应函数!
    session_set_save_handler("begin","end1","read","write","delete","gc");

    // ------------------ pdo 操作 -----------------------
    $dsn = "mysql:host=localhost; port=3306; dbname = crashcourse";
	$opt = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8');
    $pdo = new pdo($dsn,'root','root',$opt);
    var_dump($pdo);

    function begin(){
        echo "<p>session开始了!</p>";
    }
    function end1(){
        echo "<p>session结束了!</p>";
    }
    // 系统会自动传入要读取的session_id
    function read($session_id){
        echo "<p>读取session文件数据：";
        $data = '';
        $sql = "select sess_data from session where sess_id = '$session_id';";
        $result = $GLOBALS['pdo']->query($sql);
        if(!$result){
            var_dump($result);
        }
        return $data;
    }
    // 系统会自动传入要写入的session_id及数据内容
    function write($session_id, $session_data){
        echo "<p>将session数据写入：";
        $sql = "insert into session( sess_id, sess_data, sess_time)";
        $sql.= "values('$session_id',)";
        
    }
    // 系统会自动传入要删除的session_id
    function delete($session_id){
        echo "<p>session".$session_id."被删除</p>";
    }
    // 系统会自动传入最大额超时时间
    function gc($maxlifetime){
        echo "<p>session进行一次回收操作</p>";
    }

?>