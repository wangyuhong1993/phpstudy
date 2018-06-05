<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	$v1 =123;
	// 1.单引号字符串
	// 其实需要或可以是别的转义符有：\\  \'
	$str1 = 'ab\cde\'fgabcd $v1 ';
	echo $str1;
	echo "<hr />";

	// 2.双引号字符串
	// 其实需要或可以是别的转义符有：\\  \" \n(换行符), \t(tab符)
	// 还有一个: \$ 表示"$"符，其实就是取消了其在双引号字符串中的变量其实含义
	$str2 = "ab\"cde\nfgab\tcd $v1";
	echo $str2;
	echo "<hr />";
?>

<!-- 3.双引号定界符字符串 -->
<?php
echo <<<"FOOBAR"
Hello World!
FOOBAR;
echo "<hr />";
// 其实需要或可以是别的转义符有：\\ \n(换行符), \t(tab符)
// 注意该字符串的结束一行，只能出现该标识符本身及一个分号，其他什么都不可以出现！
?>

<!-- 4.单引号定界符字符串 -->
<?php
echo <<<'FOOBAR'
Hello World!
FOOBAR;
// 没有制表符
?>
</body>
</html>