<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - HIMAGE - 项目列表</title>
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
			<table border="1" width="720"  cellspacing="0" cellpadding="8" align="center" >
			   <tr>
			     <th width="200" height="20" >项目名称</th>
			     <th>banner图</th>
			     <th>操作</th>
			   </tr>
			   <?php if(is_array($showitem)): $k = 0; $__LIST__ = $showitem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr align="center">
			     <td><?php echo ($v["item_name"]); ?></td>
			     <td><img src="/Upload/banner/<?php echo ($v["item_banner_img"]); ?>" style="max-width: 200px;"/></td>
			     <td>
			     	<a href="/admin.php/Item/showtitle/item_id/<?php echo ($v["item_id"]); ?>.html">导航</a>
			     	<a href="/admin.php/Item/yt/item_id/<?php echo ($v["item_id"]); ?>.html">原图</a>
			     	<a href="/admin.php/Item/wx/i/<?php echo ($v["item_id"]); ?>.html">微信</a>
			     	<a href="/admin.php/Item/ewm/i/<?php echo ($v["item_id"]); ?>.html">二维码</a>
			     	<a href="/admin.php/Item/edit/item_id/<?php echo ($v["item_id"]); ?>.html">编辑</a>
			     	<a href="/admin.php/Item/delete/item_id/<?php echo ($v["item_id"]); ?>.html" onclick="if(confirm('确定删除该项目及其下所有内容?')==false)return false;">删除</a>
			     </td>
			   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
			    <tr>
			    <td colspan="3" align="center"><a href="/admin.php/Item/add.html">新建项目</a></td>
			   </tr>
			   <tr>
			    <td colspan="3" align="center">共计<?php echo ($item); ?>个项目</td>
			   </tr>
			</table>
		</center>
    </body>
	
</html>