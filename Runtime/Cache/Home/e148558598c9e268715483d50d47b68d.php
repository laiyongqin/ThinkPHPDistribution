<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>北京瑞德轩科贸有限公司</title>
<link href="__PUBLIC__/Home/css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="login_bg">
<div class="main" style="width:1024px;">
<div class="lipin"><img src="__PUBLIC__/Home/images/lipin.jpg" width="87" height="155" /></div>
<div class="login_box" style="position:relative;">
<form action='' method='POST'>
<table width="210" border="0" cellspacing="0" cellpadding="0" class="table">
	<tr>
		<td width="52">卡号：</td>
		<td width="158" colspan="2"><input name="username" type="text" class="wb_156" /></td>
	</tr>
	<tr>
		<td>密码：</td>
		<td colspan="2"><input name="password" type="text" class="wb_156" /></td>
	</tr>
	<tr>
		<td>验证码：</td>
		<td><input name="verify" type="text" class="wb_75" /></td>
		<td><img src="__APP__/Home/Index/verify" width="60" height="20" onclick='this.src=this.src+"?"+Math.random();'/></td>
	</tr>
	<tr>
		<td></td>
		<td><input name="" type="submit" value=" " class="dl" /></td>
		
		<td><input name="" type="button" value=" " class="cz" style="float:left;" /></td>
	</tr>
</table>
</form>

</div>
<div class="b_wz"><img src="__PUBLIC__/Home/images/login_wz.jpg" width="176" height="24" /></div>
</div>
	
</div>

</body>
</html>