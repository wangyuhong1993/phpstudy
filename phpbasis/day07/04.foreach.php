<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- 遍历过程中值变量可以人为设定为引用传递:foreach($arr as $key => &$value){...} -->
	<!-- <?php
		$arr = array(1=>3,'a1'=>11,3=>5,'mn'=>18,88=>2);
		foreach($arr as $key => & $value){
			// 值变量$value可以使用引用传递。
			$value= $value*2;
			echo "<br />$key: $value";  
		}
		// 此时foreach中,修改了value值
		echo "<br />结果为："; print_r($arr);
	?> -->
	
	<script>
		var examplearr=[8,94,15,88,55,76,21,39];
		function sortarr(arr){
		    for(i=0;i<arr.length-1;i++){
		        for(j=0;j<arr.length-1-i;j++){
		            if(arr[j]>arr[j+1]){
		                var temp=arr[j];
		                arr[j]=arr[j+1];
		                arr[j+1]=temp;
		            }
		        }
		    }
		    return arr;
		}
		sortarr(examplearr);
		console.log(examplearr);

	</script>
</body>
</html>