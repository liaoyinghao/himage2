<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> 照片上传系统 </title>
    </head>
    	<center>
            <font>照片上传系统首页</font>
		</center>
        <table border="1" width="700"  cellspacing="0" cellpadding="8" align="center" >
               <tr>
                 <th width="200" height="20" >项目名称</th>
                 <th>banner图</th>
                 <th>操作</th>
               </tr>
               <?php if(is_array($showitem)): $k = 0; $__LIST__ = $showitem;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr align="center">
                 <td>
                   <?php echo ($v["item_name"]); ?>
                 </td>
                 <td>
                   <img src="/Upload/banner/<?php echo ($v["item_banner_img"]); ?>" style="max-width: 200px;"/>
                 </td>
                 <td>
                   <a href="/backstage.php/Index/upimg/i/<?php echo ($v["item_id"]); ?>.html">图片上传</a>
                 </td>
               </tr><?php endforeach; endif; else: echo "" ;endif; ?>
               <tr>
                <td colspan="3" align="center">共计<font color="red"><?php echo ($item); ?></font>个项目</td>
               </tr>
            </table>
    </body>
</html>