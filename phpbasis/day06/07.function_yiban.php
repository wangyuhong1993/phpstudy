<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		// if(function_exists("f1") == false){
		// 	function f1(){
		// 		echo "<br/>这个函数我自己定义了!";
		// 	}
		// }
		// f1();

		function foo()
		{
		    $numargs = func_num_args();
		    echo "Number of arguments: $numargs<br />\n";
		    if ($numargs >= 2) {
		        echo "Second argument is: " . func_get_arg(1) . "<br />\n";
		    }
		    $arg_list = func_get_args();
		    for ($i = 0; $i < $numargs; $i++) {
		        echo "Argument $i is: " . $arg_list[$i] . "<br />\n";
		    }
		}

		foo(1, 2, 3);
	?>
</body>
</html>