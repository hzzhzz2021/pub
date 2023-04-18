<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link  type="text/css" rel="stylesheet" href="../css/denglu.css"/>
	</head>
	<body>
		
		<form action="zhuce_chuli.php" method="POST">
			<table>
				<tr>
					<!-- 一个单元格占两列，列合并 -->
					<td colspan="2" class="title">注册</td>
				</tr>
				<tr>
					<td>登录名：</td>
					<td><input type="text" class="info" placeholder="请输入登录名" name="DengLu" style="background-image: url('../icon/yonghuming.png');" /></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input  type="password" class="info" placeholder="请输入密码" name="MiMa" style="background-image: url('../icon/mima_2.png');"/></td>
				</tr>
				<tr>
					<td colspan="2" class="btn">
						<input  type="submit" value="注册"/>
						<a href="denglu.php">登录</a>
					</td>
				</tr>
			</table>
		</form>
		
		
	</body>
</html>