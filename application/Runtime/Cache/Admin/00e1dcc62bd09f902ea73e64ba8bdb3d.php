<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - <?php echo ($title['item_name']); ?> - 微信功能  </title>
        <link rel="stylesheet" href="/Public/admin/admin.css">
        <style>
        		a {
                        text-decoration: none;
                      }
                      .brand {
                          width: 100%;
               	     /*background: #C6F2B3;*/
                          line-height: 30px;
                          margin: 8px;
                      }
                      .brand a:hover {
                        text-decoration: underline!important;
                      }
        </style>
    </head>
    	<center>
            <!-- <?php echo ($title['item_name']); ?> - 微信功能  -->
             
			<div id="nav">
	<ul>
		<li><a href="/admin.php/Item/index.html">项目管理</a></li>
		<li><a href="/admin.php/Member/index.html">成员管理</a></li>
		<!-- <li><a href="/admin.php/Web/index.html">网站管理</a></li>
		<li><a href="/admin.php/We/index.html">关于我们</a></li> -->
	</ul>
</div>
			<div class="brand">
		                 <a href="/admin.php/Item/index.html" style="text-decoration: none; color: red;">项目管理</a> /  <?php echo ($title['item_name']); ?> - 微信功能 
		            </div> 
			<br>
			<form name="frm" method="post" enctype="multipart/form-data"  action="<?php echo U('Item/onItem',array('id'=>$showitem['item_id']));?>" onkeydown="if(event.keyCode==13)return false;">
		      <table border="1" width="" align="center" cellspacing="0" cellpadding="8">
		        <tr>
				   <th colspan="2">微信功能</th>
				</tr>
		        <tr>
		           <td width="120">标题</td>
		           <td width="120">
		           	<?php echo ($wx["wx_title"]); ?>
		           </td>
		        </tr>
		        <tr>
		           <td>简介</td>
		           <td>
		           	<?php echo ($wx["wx_desc"]); ?>
		           </td>
		        </tr>
		        <tr>
		           <td>图片</td>
		           <td>
		             <img src="<?php echo ($wx["wx_imgUrl"]); ?>" style="max-width: 200px;"/>
		           </td>
		        </tr>
		        <tr>
		            <td>首页Link</td>
		            <td> 
		            <?php echo ($wx["wx_link"]); ?>
				    </td>
		        </tr>
		        <tr>
		            <th colspan="2">
		              <?php if($wx!=false): ?><a href="/admin.php/Item/wxd/i/<?php echo ($i); ?>.html" onclick="if(confirm('确定删除该微信功能?')==false)return false;">删除</a>
		              <?php elseif($wx==false): ?>
		                <a href="/admin.php/Item/wxnew/i/<?php echo ($i); ?>.html">新建</a><?php endif; ?>
		            </th>
		        </tr>
		      </table>
			</form>
		</center>
    </body>
</html>