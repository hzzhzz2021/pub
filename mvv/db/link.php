<?php
	// 创建数据库链接

	$fuwuqi="localhost";
	$name="root";
	$pwd="root";
	$dbname="moviesinfoDB";
	
	// 连接数据库mysqli_connect
	$link=@mysqli_connect($fuwuqi, $name, $pwd, $dbname) or die("连接数据库失败，请联系管理员！");
	
	// 设置编码格式，解决中文乱码
	@mysqli_query($link, "set names utf8");
?>

