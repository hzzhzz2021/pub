<?php
	$xingming=$_POST["DengLu"];
	$mima=$_POST["MiMa"];
	
	include("../db/link.php");

	$sql="insert into tb_user(uname, upwd) values('$xingming', '$mima')";
	
	@mysqli_query($link,$sql) or die("执行SQL出错，请联系管理员");
	
	echo "<script>location='denglu.php';</script>";
?>