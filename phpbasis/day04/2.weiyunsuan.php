<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// 首先，需要设定对应的5个常量，代表对应的5个灯泡：
	define("D1", 1);   //对应二进制值为:	00000001	
	define("D2", 2);   //对应二进制值为:	00000010	
	define("D3", 4);   //对应二进制值为:	00000100	
	define("D4", 8);   //对应二进制值为:	00001000	
	define("D5", 16);   //对应二进制值为:	00010000	

	// 然后定义个变量,该变量就代表这5个灯泡的"任意组合状态"值：
	$state = 10;  // 其对应二进制为 00001010  表示2,4灯是亮的
	// 需求1:检测灯1是否是亮的
	
	// if( ($state & D1 ) > 0 ){
	// 	echo "<br />灯1是亮的";
	// }else{
	// 	echo "<br />灯1是灭的";
	// }
	
	// 需求2：检测所有灯是否是亮的
	function showAll(){
		echo "<p>";
		for($i = 1; $i <= 5; ++$i ){
			$s="D".$i;
			if( ($GLOBALS['state'] & constant($s)) > 0){
				echo "灯{$i}亮，";
			}else{
				echo "灯{$i}灭，";
			}
		}
		echo "</p>";
	}
	showAll();

	// 需求3：可以关闭指定的任意一个灯泡
	// 打开灯3
	$state = $state | D3;
	echo $state; 
	showAll();

	// 需求4：关闭其中的某盏灯
	$state = $state & (~D1);
	?>
</body>
</html>