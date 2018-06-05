<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// 作业1：输出图案，三角形
		$n=5;
		for ($i=1; $i <= $n; $i++) { 
			for ($j=0; $j < $i; $j++) { 
				echo "☆&nbsp;";
			}
			echo "<br>";
		}

		// 作业2：公鸡5元一只，母鸡3元一只，小鸡一块钱三只，刚好用一百块钱买了一百只鸡，公鸡多少，母鸡多少，小鸡多少？
		// 穷举法，效率很差
		$count = 0;
		for ($gongji=0; $gongji <= 100; $gongji++) {  
			for ($muji=0; $muji <= 100; $muji++) { 
				for ($xiaoji=0; $xiaoji <= 100 ; $xiaoji++) {
					$shuliang = $gongji + $muji + $xiaoji;
					$zongjia = $gongji*5 + $muji*3 + $xiaoji/3;
					if($shuliang == 100 && $zongjia == 100){
						echo "<br /> 公鸡为：$gongji, 母鸡为：$muji, 小鸡为：$xiaoji";
					}
					++$count;   //代表循环的次数
				}
			}
		}
		echo "<br />总计算次数：$count";

		// 优化
		$c = 0;  
		for ($gongji=0; $gongji <= 100/5; $gongji++) {   // 考虑公鸡的价格
			for ($muji=0; $muji <= (100-$gongji*5)/3; $muji++) {   // 考虑母鸡的价格,以及考虑公鸡花出去的钱
				$xiaoji =  100 - $gongji - $muji;
				$zongjia = $gongji*5 + $muji*3 + $xiaoji/3;

				if ($xiaoji % 3 !=0) {
					continue;  //考虑小鸡的数量应该是3的倍数，价钱才能"取整"；
				}

				if($zongjia == 100){
					echo "<br /> 公鸡为：$gongji, 母鸡为：$muji, 小鸡为：$xiaoji";
					break;
				}
				++$c;   //代表循环的次数
			}
		}
		echo "<br />总计算次数：$c";
	?>
</body>
</html>