<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		interface Player { // 播放器接口
			function play();
			function stop();
			function next();
			function prev(); 
		}
		interface USBset{ // USB设备接口
			const USBWidth = 12;  //usb接口的宽度,单位毫米
			const USBHeight = 5;  //usb接口的高度,单位毫米
			function dataIn(); //数据输入
			function dataOut(); //数据输出
		}
		// mp3播放器类,它同时具有播放器的功能，也具有usb的特征和功能
		// 从这2个接口获取其"特征信息";
		class MP3Player implements Player,USBset{
			function play(){}
			function stop(){}
			function next(){}
			function prev(){} 
			function dataIn(){} 
			function dataOut(){}
		}
	?>
	
</body>
</html>