<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - HIMAGE - 后台管理 | 成员管理</title>
        <link rel="stylesheet" href="/Public/admin/admin.css">
    </head>
    	<center>
			<div id="nav">
	<ul>
		<li><a href="/admin.php/Item/index.html">项目管理</a></li>
		<li><a href="/admin.php/Member/index.html">成员管理</a></li>
		<!-- <li><a href="/admin.php/Web/index.html">网站管理</a></li>
		<li><a href="/admin.php/We/index.html">关于我们</a></li> -->
	</ul>
</div>
			<br>
			<table border="1" width="700"  cellspacing="0" cellpadding="8" align="center" >
			   <tr>
			     <th width="100" height="20" >昵称</th>
			     <th width="100">账户</th>
			     <th width="100">密码</th>
			     <th width="100">角色</th>
			     <th width="100">操作</th>
			   </tr>
			   <?php if(is_array($user)): $k = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr align="center">
			     <td><?php echo ($v["user_name"]); ?></td>
			     <td><?php echo ($v["user_account"]); ?></td>
			     <td><?php echo ($v["user_pwd"]); ?></td>
			     <td><?php echo ($v["user_typename"]); ?></td>
			     <td>
			     	<a href="/admin.php/Member/modify/d/<?php echo ($v["user_id"]); ?>.html">修改</a>
			     	<a href="/admin.php/Member/del/d/<?php echo ($v["user_id"]); ?>.html" onclick="if(confirm('确定删除该成员?')==false)return false;">删除</a>
			     </td>
			   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			    <tr>
			    <td colspan="5" align="center"><a href="/admin.php/Member/ad.html">添加成员</a></td>
			   </tr>
			   <tr>
			    <td colspan="5" align="center">共计<?php echo ($count); ?>位成员</td>
			   </tr>
			</table>
		</center>
    </body>
</html>