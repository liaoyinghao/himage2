<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> - <?php echo ($showOne['item_name']); ?> - 导航栏操作 </title>
        <link rel="stylesheet" href="/Public/admin/admin.css">
        <style>
            .brand {
                width: 100%;
                background: #C6F2B3;
                line-height: 30px;
            }
            .brand a:hover {
                text-decoration: underline!important;
            }
        </style>
    </head>
    	<center>
            <!-- <font color="red">"<?php echo ($showOne['item_name']); ?>"项目</font>  导航栏操作
			<br><br> -->
            <div class="brand">
                 <a href="/admin.php/Item/index.html" style="text-decoration: none; color: red;">项目管理</a> /  导航栏操作    
            </div>
            
            <br><br>
            <table border="1" width="" align="center" cellspacing="0" cellpadding="8">
                <tr>
                   <th width="160px">导航名称</th>
                   <th width="160px">导航Link</th>
                   <th width="200px">操&nbsp;&nbsp;作</th>
                </tr>
                    <?php if(is_array($showAll)): $k = 0; $__LIST__ = $showAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr align="center">
                            <td>
                                <?php echo ($v['title_count']); ?>
                            </td>
                            <td>
                                <?php echo ($v['title_link']); ?>
                            </td>
                            <td>
                                <a href="/admin.php/Item/showimg/titleid/<?php echo ($v['title_id']); ?>.html">查看图片</a>
                                &nbsp;
                                <a href="/admin.php/Item/edittitle/titleid/<?php echo ($v['title_id']); ?>.html">编辑</a>
                                &nbsp;
                                <a href="/admin.php/Item/deltitle/titleid/<?php echo ($v['title_id']); ?>.html" onclick="if(confirm('确定删除该导航及其下所有图片?')==false)return false;">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                    <th colspan="3" align="center" >
                       <a href="/admin.php/Item/addtitle/itemid/<?php echo ($showOne['item_id']); ?>.html">添加新导航</a>
                    </th>
                </tr>
            </table>
		</center>
    </body>
</html>