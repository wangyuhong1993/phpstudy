<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		/*
			商品类：有名称,有价钱，库存数，可显示自身信息(名称，价钱)。
			手机类：是商品的一种，并且有品牌，有产地，可显示自身信息。
			图书类：是商品的一种，有作者，有出版社，可显示自身信息。
			创建一个手机对象，并显示其自身信息;
			创建一个图书对象，并显示其自身信息;
			扩展要求：尽量体现封装性就更好了。
		*/
		class Product{
			protected $name;
			protected $price = 0; //价格
			protected $count = 0; //库存
			protected function ShowInfo(){
				echo "<p>商品名称：".$this->name;
				echo "<br/>商品价格：".$this->price;
			}
			protected function __construct($name,$price,$count){
				$this->name = $name;
				$this->price = $price;
				$this->count = $count;
			}
		}
		class Mobile extends Product
		{
			protected $pinpai;
			protected $chandi;
			function __construct($name,$price,$count,$pinpai,$chandi){
				parent::__construct($name,$price,$count);
				$this->pinpai = $pinpai;
				$this->chandi = $chandi;
			}
			public function ShowInfo(){
				parent::ShowInfo(); // 调用父类的显示信息方法
				echo "<br />商品品牌：".$this->pinpai;
				echo "<br />商品产地：".$this->chandi;
				echo "<br/>商品库存：".$this->count;
			}
		}
		$m1 = new Mobile('联想3280',1280,1000,'lenovo','北京上地信息产业基地');
		$m1->ShowInfo();
	?>
</body>
</html>