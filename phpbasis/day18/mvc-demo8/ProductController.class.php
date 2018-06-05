<?php	
	class ProductController{
		function ShowALlProductAction(){
			$obj = ModelFactory::M('ProductModal');
			$data = $obj->getAllProduct();
		}
		function DetailAction(){
			echo "bb";	
		}
		function DelProductAction(){
			
		}
	}
?>