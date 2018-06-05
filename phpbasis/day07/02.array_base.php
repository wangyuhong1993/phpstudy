
<!-- 1.html 编码方法 -->
<!-- <meta charset="UTF-8"> -->

<!-- 2.php 编码方法 -->
<?php
	header("Content-Type:text/html;charset=UTF-8");
	// 1.求一维数组的平均值
	// $a = array(1,11,111,1111);
	// $len = count($a);
	// $sum = 0;  // 用于总和
	// for ($i=0; $i <$len; $i++) { 
	// 	$sum += $a[$i];  // 累加思想
	// }
	// echo "<br /> 平均值为: ".($sum/$len);

	// 2.foreach 遍历
	// $arr = array(1=>3,'a1'=>11,3=>5,'mn'=>18,88=>2);
	// foreach ($arr as $key => $value) {
	// 	echo "<br />$key=>$value";
	// }
	// // 溢出---为空
	// $k = key($arr);
	// $v = current($arr);
	// echo "<br/>此时(遍历之后),'位置'为";var_dump($k);
	// echo "<br/>此时(遍历之后),对应'值'为";var_dump($v);

	// 3.使用for循环和next()函数实现
	$arr4 = array(1=>3,'a1'=>11,3=>5,'mn'=>18,88=>2);
	$len = count($arr4);
	for ($i = 0; $i < $len; ++$i) {
		$key = key($arr4); // 取得当前键
		$value = current($arr4); // 取得"当前项"的值
		echo "<br />$key => $value";
		next($arr4); 
	}

	// 4.使用while和each和list配合来遍历该数组
	$arr5 = array(1=>3,'a1'=>11,3=>5,'mn'=>18,88=>2);
	while (list($key,$value) = each($arr5)) {
		echo "<br />$key => $value";
	}
?>


