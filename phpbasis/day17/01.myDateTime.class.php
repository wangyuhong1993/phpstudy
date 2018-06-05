<?php
	class MyDateTime{
		function GetDate(){
			return date("Y年m月d日");
		}
		function GetTime(){
			return date("H:i:s");
		}
		function GetDateTime(){
			return date("Y年m月d日 H:i:s");
		}
	}
?>