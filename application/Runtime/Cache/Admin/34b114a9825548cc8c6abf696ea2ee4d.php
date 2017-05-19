<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - HIMAGE - 项目修改</title>
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
            <!-- HIMAGE  项目修改 -->
           
			<div id="nav">
	<ul>
		<li><a href="/admin.php/Item/index.html">项目管理</a></li>
		<li><a href="/admin.php/Member/index.html">成员管理</a></li>
		<!-- <li><a href="/admin.php/Web/index.html">网站管理</a></li>
		<li><a href="/admin.php/We/index.html">关于我们</a></li> -->
	</ul>
</div>
			  <div class="brand">
		                 <a href="/admin.php/Item/index.html" style="text-decoration: none; color: red;">项目管理</a> /  HIMAGE  项目修改 
		            </div>
			<br>
			<form name="frm" method="post" enctype="multipart/form-data"  action="<?php echo U('Item/onItem',array('id'=>$showitem['item_id']));?>">
		      <table border="1" width="" align="center" cellspacing="0" cellpadding="8">
		        <tr>
				   <th colspan="2">项目修改</th>
				</tr>
		        <tr>
		           <td width="120">项目名称</td>
		           <td><input type="text" name="name" value="<?php echo ($showitem["item_name"]); ?>" /></td>
		        </tr>
		        <tr>
		           <td>Banner图</td>
		           <td>
		            <?php if($zero!=$inImg): ?><img src="/Upload/banner/<?php echo ($showitem["item_banner_img"]); ?>" style="max-width: 200px;"/>
				        <br>
				        <a href="javascript:del()">更换Banner</a>
					<?php elseif($zero==$inImg): ?>
						<input type="file"  name="banner"/><?php endif; ?>
		           </td>
		        </tr>
		        <tr>
		            <td width="120">项目Link</td>
		            <td><input type="text" name="link" value="<?php echo ($showitem["item_link"]); ?>" /></td>
		        </tr>
		        <tr>
		            <th colspan="2">
		               <input type="submit" value="修改"/> 
		            </th>
		        </tr>
		      </table>
			</form>
		</center>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript">
			function del()
			{
			   if(confirm("确定要删除当前banner吗"))
			   {
			   		window.location.href="/admin.php/Item/delimg/id/<?php echo ($showitem["item_id"]); ?>"; 
			    }else{
					alert("已取消当前操作");
					return false;
			   }
			}
		</script>
    </body>
</html>