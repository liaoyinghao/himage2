<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - HIMAGE - 创建项目</title>
        <link rel="stylesheet" href="/Public/admin/admin.css">
    </head>
    	<center>
            HIMAGE  创建项目
			<div id="nav">
	<ul>
		<li><a href="/admin.php/Item/index.html">项目管理</a></li>
		<li><a href="/admin.php/Member/index.html">成员管理</a></li>
		<li><a href="/admin.php/Web/index.html">网站管理</a></li>
		<li><a href="/admin.php/We/index.html">关于我们</a></li>
	</ul>
</div>
			<form name="frm" method="post" enctype="multipart/form-data" action="<?php echo U('Item/addItem');?>">
		      <table border="1" width="" align="center" cellspacing="0" cellpadding="8">
		        <tr>
				   <th colspan="2">项目创建</th>
				</tr>
		        <tr>
		           <td width="120">项目名称</td>
		           <td><input type="text" name="name"/></td>
		        </tr>
		        <tr>
		           <td>Banner图</td>
		           <td>
		             <input type="file" name="banner"/>
		           </td>
		        </tr>
		        <tr>
		            <td width="120">项目Link</td>
		            <td><input type="text" name="link"/></td>
		        </tr>
		        <tr>
		            <th colspan="2">
		               <input type="submit" value="创建"/> 
		               <input type="reset"  value="重写"/>
		            </th>
		        </tr>
		      </table>
			</form>
		</center>
    </body>
</html>