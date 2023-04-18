<?php
	// 获取用户输入的信息
	// 注意：$_GET 大小写不能搞错
	// $name=$_GET["DengLu"];
	// $pwd=$_GET["MiMa"];
	
	$name1=$_POST["DengLu"];
	$pwd1=$_POST["MiMa"];
	
	include("../db/link.php");
	
	$sql="select * from tb_user where uname='$name1' and upwd='$pwd1' ";
	
	$result=@mysqli_query($link,$sql) or die("执行SQL出错，请联系管理员"); 
	
	$hang=mysqli_num_rows($result);
	
	if($hang==1){
		session_start();
		$_SESSION["user"]=mysqli_fetch_assoc($result);
		
		echo "<script>alert('登录成功')</script>";
		echo "<script>location='shouye.php';</script>";
	}else{
		echo "<script>alert('登录成功')</script>";
		echo "<script>location='denglu.php';</script>";
	}
?>
