<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - <?php echo ($title['item_name']); ?> - 微信功能  </title>
        <link rel="stylesheet" href="/Public/admin/admin.css">
    </head>
    	<center>
            <?php echo ($title['item_name']); ?> - 微信功能  
			<div id="nav">
	<ul>
		<li><a href="/admin.php/Item/index.html">项目管理</a></li>
		<li><a href="/admin.php/Member/index.html">成员管理</a></li>
		<li><a href="/admin.php/Web/index.html">网站管理</a></li>
		<li><a href="/admin.php/We/index.html">关于我们</a></li>
	</ul>
</div>
			<br>
			<form name="frm" method="post" enctype="multipart/form-data"  action="<?php echo U('Item/wxtj',array('i'=>$i));?>">
		      <table border="1" width="" align="center" cellspacing="0" cellpadding="8">
		        <tr>
				   <th colspan="2">微信功能</th>
				</tr>
		        <tr>
		           <td width="120">标题</td>
		           <td><input type="text" name="wx_title"/></td>
		        </tr>
		        <tr>
		           <td width="120">简介</td>
		           <td><input type="text" name="wx_desc"/></td>
		        </tr>
		        <tr>
		           <td>图片</td>
		           <td>
						<input type="file"  name="wx_img"/>
		           </td>
		        </tr>
		        <tr>
		            <td width="120">首页Link</td>
		            <td> 
		            	<select name="wx_link">
						  <option selected="selected" value="demo">请选择首页</option>
						  <?php if(is_array($title)): $k = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><option value="<?php echo ($v["title_id"]); ?>"><?php echo ($v["title_count"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
				    </td>
		        </tr>
		        <tr>
		            <th colspan="2">
		               <input type="submit" value="提交"/> 
		            </th>
		        </tr>
		      </table>
			</form>
		</center>
    </body>
</html>