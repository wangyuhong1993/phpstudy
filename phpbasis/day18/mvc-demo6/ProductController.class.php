<?php
	require './ProductModal.class.php';
	require './ModelFactory.class.php';
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

	$ctrl = new ProductController(); // 创建类实例
	$act = !empty($_GET['act'])?$_GET['act']:'index';
	$action  =$act.'Action';
	$ctrl->$action();  //可变方法

?>