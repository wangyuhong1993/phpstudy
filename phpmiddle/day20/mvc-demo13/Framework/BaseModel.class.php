<?php
	class BaseModel{
		// 这个,用于存储数据库工具类的实例(对象)
		protected $_dbo = null;
		function __construct(){
			$config = array(
				'host'=>"localhost",
				'port'=>3306,
				'user'=>"root",
				'pass'=>"root",
				'charset'=>"utf8",
				'dbname'=>"crashcourse"
			);
			$this->_dbo = MySQLDB::GetInstance($config);
		}
	}

?>