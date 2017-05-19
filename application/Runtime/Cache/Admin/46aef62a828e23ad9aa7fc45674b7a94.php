<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - HIMAGE - 后台管理 | 成员添加</title>
        <link rel="stylesheet" href="/Public/admin/admin.css">
    </head>
    	<center>
			<div id="nav">
	<ul>
		<li><a href="/admin.php/Item/index.html">项目管理</a></li>
		<li><a href="/admin.php/Member/index.html">成员管理</a></li>
		<li><a href="/admin.php/Web/index.html">网站管理</a></li>
		<li><a href="/admin.php/We/index.html">关于我们</a></li>
	</ul>
</div>
			<br>
			后台管理 | 成员添加
			<br>
			<br>
			<form name="frm" method="post" enctype="multipart/form-data"  action="<?php echo U('Member/add');?>" onkeydown="if(event.keyCode==13)return false;">
				<table border="1" width="300"  cellspacing="0" cellpadding="8" align="center" >
				   <tr>
				     <th width="100" height="20">昵  称</th>
				     <td><input type="text" name="user_name"/></td>
				   </tr>
				   <tr>
				     <th width="100" height="20">账  户</th>
				     <td><input type="text" name="user_account"/></td>
				   </tr>
				   <tr>
				     <th width="100" height="20">密  码</th>
				     <td><input type="text" name="user_pwd"/></td>
				   </tr>
				   <tr>
				     <th width="100" height="20">角  色</th>
				     <td>
				     	<select name="user_type">
						  <option selected="selected" value="1">摄影师</option>
						  <option value="0">管理员</option>
						</select>
				     </td>
				   </tr>
				   <tr>
				    <td colspan="2" align="center"><input type="submit" value="添加"/></td>
				   </tr>
				</table>
			</form>
		</center>
    </body>
</html>