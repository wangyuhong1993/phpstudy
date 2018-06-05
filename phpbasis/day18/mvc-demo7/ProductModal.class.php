<?php
	require './BaseModel.class.php';
	class ProductModal extends BaseModel{ 
		function getAllProduct(){
			$sql = "select product.*, protype_name from product inner join product_type as t on t.protype_id = product.protype_id";
			$data =  $this->_dbo->getRows($sql);
			// 载入用户视图;
			include './productList.html';
		}
	}
?>