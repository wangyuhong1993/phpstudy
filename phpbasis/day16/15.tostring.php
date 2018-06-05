<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		class A{
			public $name;
			public $age;
			public $edu;
			function __construct($name,$age,$edu){
				$this->name = $name;
				$this->age = $age;
				$this->edu = $edu;
			}
			function __tostring(){
				$str = "姓名：".$this->name;
				$str .= "，年龄：".$this->age;
				$str .= "，学历：".$this->edu;
				return $str;
				// 这里，可以返回"任何字符串内容"
			}
		}
		$obj1 = new A('张三',18,'大学');
		// 当字符串使用,此时会自动调用魔术方法：__tostring(),并返回数据
		echo $obj1;

	?>
</body>
</html>