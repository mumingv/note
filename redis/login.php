<!DOCTYPE html>
<head>
<title>Login</title>
<meta charset="utf-8" />
<style type="text/css">

.header {
	font-size: 14px;
	font-family: "微软雅黑";
	font-weight: bold;
	line-height: 16px;
	margin-bottom: 15px;
}

.parent {
	text: center;
}

.down {
	margin-top: 15px;
}

.float {
	float: left;
	width: 60px;
	font-size: 12px;
	line-height: 20px;
}

.button {
	margin-top: 15px;
	margin-left: 60px;
}

</style>
</head>

<body> 

<?php
echo "aaaabbbb";
echo $_POST["username"];
?>
<p class="header">登陆网易通行证</p>

<form method="post">
<div class="parent">
	<div class="float">用户名：</div>
    <div class="frame"><input type="text" name="username"></div>
	
</div>

<div class="parent down">
	<div class="float">密码：</div>
	<div class="frame"><input type="text" name="password"></div>
</div>

<div class="button">
	<input type="submit">登陆</input>
</div>
</form>

</body>
</html>
