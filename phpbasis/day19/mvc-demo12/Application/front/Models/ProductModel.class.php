<?php
	class ProductModal extends BaseModel{ 
		// 获取全部商品
		function getAllProduct(){
			$sql = "select product.*, protype_name from product inner join product_type as t on t.protype_id = product.protype_id";
			$data =  $this->_dbo->getRows($sql);
			return $data;
		}
		// 删除商品
		function DelProduct($id){
			$sql = "delete from product where pro_id = $id";
			return $this->_dbo->exec($sql);
		}
	}
?>