<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - HIMAGE - 关于我们</title>
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
			<form name="frm" method="post" enctype="multipart/form-data" action="<?php echo U('Item/addItem');?>">
		      <table border="1" width="" align="center" cellspacing="0" cellpadding="8">
		        <tr>
				   <th colspan="2">关于我们</th>
				</tr>
		        <tr>
		           <td>Logo</td>
		           <td>
		             <img src="/Upload/We/<?php echo ($we["we_logo"]); ?>" style="max-width: 200px;"/>
		           </td>
		        </tr>
		         <tr>
		           <td>背景图片</td>
		           <td>
		             <img src="/Upload/We/<?php echo ($we["we_back"]); ?>" style="max-width: 200px;"/>
		           </td>
		        </tr>
		        <tr>
		           <td width="120">公司名称</td>
		           <td>
		           		<?php echo ($we["we_name"]); ?>
		           </td>
		        </tr>
		        <tr>
		            <td width="120">联系方式</td>
		            <td>
		            	<?php echo ($we["we_phone"]); ?>
		            </td>
		        </tr>
		        <tr>
		            <th colspan="2">
		               <a href="/admin.php/We/add.html">修改</a>
		            </th>
		        </tr>
		      </table>
			</form>
		</center>
    </body>
</html>