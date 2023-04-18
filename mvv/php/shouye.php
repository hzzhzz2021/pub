<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/shouye.css"/>
		<link rel="stylesheet" type="text/css" href="../css/chaxun.css"/>
		<link rel="stylesheet" type="text/css" href="../css/liebiao.css"/>
	</head>
	<body>

		<div id="datu">
			<img src="../img/img6.jpeg"/>
		</div>

		<div id="daohang">
			<a href="shouye.php">影片列表</a>
			<a href="tianjia.php">添加新影片</a>
			<?php
			session_start();
			if($_SESSION && array_key_exists("user",$_SESSION)){
				$user=$_SESSION["user"];
				echo '欢迎'.$user['uname'];
				echo '<a href="tuichu.php">退出</a>';
			}else{
				echo '<a href="denglu.php">登录</a>';
				echo '<a href="zhuce.php">注册</a>';
			}
			?>

		</div>

		<h1>影片列表</h1>

		<!-- 查询 -->
		<form action="#" id="chaxun">
			名称：<input class="name" type="text"/>
			类型：<select class="type">
				<option>请选择...</option>
				<option>爱情片</option>
				<option>科幻片</option>
				<option>武侠片</option>
			</select>
			价格：<input class="price" type="number" placeholder="最低价格"/>
			<input class="price"  type="number" placeholder="最高价格"/>
			<input class="btn" type="submit" value="查询"/>
		</form>

		<!-- 影片列表 -->
		<table>
			<tr>
				<!-- td td区别：th有加粗居中的效果 -->
				<td>电影名称</td>
				<th>电影类型</th>
				<th>余票</th>
				<th>单价</th>
				<th>操作</th>
			</tr>
			<tr>
				<td>流浪地球</td>
				<td>科幻</td>
				<td>1000</td>
				<td>9.9</td>
				<td>
					<a href="#">订票</a>
					<a href="#">删除</a>
				</td>
			</tr>
			<tr>
				<td>流浪地球</td>
				<td>科幻</td>
				<td>1000</td>
				<td>9.9</td>
				<td>
					<a href="#">订票</a>
					<a href="#">删除</a>
				</td>
			</tr>
			<tr>
				<td>流浪地球</td>
				<td>科幻</td>
				<td>1000</td>
				<td>9.9</td>
				<td>
					<a href="#">订票</a>
					<a href="#">删除</a>
				</td>
			</tr>
			<tr>
				<td>流浪地球</td>
				<td>科幻</td>
				<td>1000</td>
				<td>9.9</td>
				<td>
					<a href="#">订票</a>
					<a href="#">删除</a>
				</td>
			</tr>
			<tr>
				<td>流浪地球</td>
				<td>科幻</td>
				<td>1000</td>
				<td>9.9</td>
				<td>
					<a href="#">订票</a>
					<a href="#">删除</a>
				</td>
			</tr>
		</table>


	</body>
</html>