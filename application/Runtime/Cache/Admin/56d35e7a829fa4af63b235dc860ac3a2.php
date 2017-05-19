<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - <?php echo ($title['item_name']); ?> - 二维码  </title>
        <link rel="stylesheet" href="/Public/admin/admin.css">
        <style>
        		a {
                        text-decoration: none;
                      }
                      .brand {
                          width: 100%;
                          line-height: 30px;
                          margin: 8px;
                      }
                      .brand a:hover {
                        text-decoration: underline!important;
                      }
        </style>
    </head>
    	<center>
            <!-- <?php echo ($title['item_name']); ?> - 二维码 -->
           
			<div id="nav">
	<ul>
		<li><a href="/admin.php/Item/index.html">项目管理</a></li>
		<li><a href="/admin.php/Member/index.html">成员管理</a></li>
		<!-- <li><a href="/admin.php/Web/index.html">网站管理</a></li>
		<li><a href="/admin.php/We/index.html">关于我们</a></li> -->
	</ul>
</div>
			 <div class="brand">
		                 <a href="/admin.php/Item/index.html" style="text-decoration: none; color: red;">项目管理</a> /  <?php echo ($title['item_name']); ?> - 二维码 
		            </div> 
			<br>
			<form name="frm" method="post" enctype="multipart/form-data"  action="<?php echo U('Item/ewmad',array('i'=>$i));?>" onkeydown="if(event.keyCode==13)return false;">
		      <table border="1" width="" align="center" cellspacing="0" cellpadding="8">
		        <tr>
				   <th width="200px">二维码</th>
				</tr>
		        <tr>
		           <td>
		           	 <?php if($ewm!=false): ?><img src="/Upload/ewm/<?php echo ($ewm["ewm_add"]); ?>" style="max-width: 200px;"/>
		             <?php elseif($ewm==false): ?>
		             	<input type="file"  name="ewm_add"/><?php endif; ?>
		           </td>
		        </tr>
		        <tr>
		            <th colspan="2">
		              <?php if($ewm!=false): ?><a href="/admin.php/Item/ewmd/i/<?php echo ($i); ?>.html" onclick="if(confirm('确定删除该张二维码?')==false)return false;">修改</a>
		              <?php elseif($ewm==false): ?>
		                <input type="submit" value="上传"/><?php endif; ?>
		            </th>
		        </tr>
		      </table>
			</form>
			<br>
			<a href="http://cli.im/url" target="_blank">二维码生成地址</a>
		</center>
    </body>
</html>