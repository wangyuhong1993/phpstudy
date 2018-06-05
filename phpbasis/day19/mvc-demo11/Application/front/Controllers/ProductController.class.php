<?php	
	class ProductController extends BaseController{
		function ShowALlProductAction(){
			$obj = ModelFactory::M('ProductModal');
			$data = $obj->getAllProduct();
			// 载入用户视图;
			include VIEW_PATH.'productList.html';
		}
		function DetailAction(){
			echo "bb";	
		}
		function DelAction(){
			$id= $_GET['id'];
			$obj = ModelFactory::M('ProductModal');
			$result = $obj->DelProduct($id);
			$this->goToUrl("删除成功","?c=Product&act=ShowALlProduct",1);
		}
	}
?>