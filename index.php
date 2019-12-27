<html>
<head>
<meta charset="utf-8"></meta>
<title>店铺订单查询后台</title>
<style>
.box {
    width: 600px;
    height: 300px;
    margin: auto;
    border-radius: 3px;
    border: 1px solid silver;
    margin-top: 10%;
    position: relative;
}

input {
    border-radius: 3px;
    border: 1px solid grey;
}
</style>
</head>
<body>
<div class="box">
<div align="center" style="margin-top: 30px">
<img src="login.png" width="100px" height="100px">
</div>
<div style="width: 100%; text-align: center; margin-bottom: 20px">
<h2>后台登录</h2>
</div>
<center>
<form method="POST" action="loginchk.php">
<table>
<tr>
<td>用户名</td>
<td><input type="text" name="username" maxlength="5"></td>
</tr>
<tr>
<td>密码</td>
<td><input type="password" name="password" maxlength="10"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="提交">
<input type="reset" value="重填">
</td>
</tr>
</table>
</form>
</center>
</div>
</body>
</html>
