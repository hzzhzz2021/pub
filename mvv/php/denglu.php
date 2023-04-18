<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link type="text/css" rel="stylesheet" href="../css/denglu.css"/>
	</head>
	<body>
		
		<!-- action 处理页面的地址 -->
		<!-- method 处理输入信息的方式 -->
		<form action="denglu_chuli.php" method="post">
			<table>
				<tr>
					<!-- 一个单元格占两列，列合并 -->
					<td colspan="2" class="title">登录</td>
				</tr>
				<tr>
					<td>登录名：</td>
					<!-- required 设置输入框为必填 -->
					<td><input type="text" name="DengLu" class="info" required placeholder="请输入登录名" style="background-image: url('../icon/yonghuming.png');" /></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input  type="password" name="MiMa" class="info" required placeholder="请输入密码" style="background-image: url('../icon/mima_2.png');"/></td>
				</tr>
				<tr>
					<td colspan="2" class="btn">
						<input  type="submit" value="登录"/>
						<a href="zhuce.php">立即注册</a>
					</td>
				</tr>
			</table>
		</form>
		
		
	</body>
</html>