<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo ($onItem['item_name']); ?>  | 导航添加</title>
    </head>
    	<center>
			<form name="frm" method="post" action="<?php echo U('Item/adtitle',array('item_id'=>$onItem['item_id']));?>">
		      <table border="1" width="" align="center" cellspacing="0" cellpadding="8">
		        <tr>
				   <th colspan="2"><?php echo ($onItem['item_name']); ?>  | 导航添加</th>
				</tr>
		        <tr align="center">
		           <td width="120">项目名称</td>
		           <td><?php echo ($onItem['item_name']); ?></td>
		        </tr>
		        <tr align="center">
		           <td>导航名称</td>
		           <td>
						<input type="text" name="title_count"/>
		           </td>
		        </tr>
		        <tr align="center">
		            <td width="120">导航Link</td>
		            <td>
		            	<input type="text" name="title_link"/>
		            </td>
		        </tr>
		        <tr align="center">
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