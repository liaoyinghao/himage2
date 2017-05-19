<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo ($onItem['item_name']); ?> - 导航修改</title>
        <style>
        	 	a {
                        text-decoration: none;
                      }
                      .brand {
                          width: 100%;
                          background: #C6F2B3;
                          line-height: 30px;
                          margin: 8px;
                      }
                      .brand a:hover {
                        text-decoration: underline;
                      }
        </style>
    </head>
    	<center>
            <!-- <?php echo ($onItem['item_name']); ?> - 导航修改 -->
             	<div class="brand">
                   		<a href="/admin.php/Item/index.html" style="color: red;" >"SWISSE中国"项目</a> / <a href="/admin.php/Item/showtitle.html" style="color: red;">导航栏操作</a> / <?php echo ($onItem['item_name']); ?> - 导航修改
            	</div>
			<br>
			<form name="frm" method="post" action="<?php echo U('Item/uptitle',array('title_id'=>$showOne['title_id']));?>">
		      <table border="1" width="" align="center" cellspacing="0" cellpadding="8">
		        <tr>
				   <th colspan="2">导航修改</th>
				</tr>
		        <tr align="center">
		           <td width="120">项目名称</td>
		           <td><?php echo ($onItem['item_name']); ?></td>
		        </tr>
		        <tr align="center">
		           <td>导航名称</td>
		           <td>
		            	<input type="text" name="title_count" value="<?php echo ($showOne['title_count']); ?>" />
		           </td>
		        </tr>
		        <tr align="center">
		            <td width="120">导航Link</td>
		            <td>
		            	<input type="text" name="title_link" value="<?php echo ($showOne['title_link']); ?>" />
		            </td>
		        </tr>
		        <tr>
		            <th colspan="2">
		               <input type="submit" value="修改"/> 
		            </th>
		        </tr>
		      </table>
			</form>
	</center>
    </body>
</html>