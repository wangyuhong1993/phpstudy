<?php
	require "./01.myDateTime.class.php";
	// 根据用户请求,以决定"获取"什么样的时间：
	if(!empty($_GET['f']) && $_GET['f'] == 'time'){
		// 效果1
		$obj = new MyDateTime();
		$t = $obj->GetTime();
	}else if (!empty($_GET['f']) && $_GET['f'] == 'date'){
		$obj = new MyDateTime();
		$t = $obj->GetDate();
	}else {
		$obj = new MyDateTime();
		$t = $obj->GetDateTime();
	}
	// 表现(展示时间)
	include './01.mvc_time.demo1.html';
?>