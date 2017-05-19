<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo ($onzero['title_count']); ?> - 导航 图片操作</title>
        <link rel="stylesheet" href="/Public/admin/admin.css">
       <style type="text/css">
       			*{
       				margin: 0;
       				padding: 0;
       			}
       			ul{
       				width: 920px;
       				margin: 0 auto;
       				overflow: hidden;
       			}
       			li{
       				float: left;
       				margin-left: 1px;
       				list-style: none;
       			}
       			#img{
       				 width: 150px;height: 150px; border: 1px solid black;display: block;
       			}
       			p{
       				width: 150px;height: 20px;border: 1px solid black;
       			}
       			#box{
					width: 100%;
					height: 100px;
					
				}
				#box a{
          text-align: center;
					display: block;
					width: 200px;
					height: 100px;
					margin: 0 auto;
				}
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
    	      <!--   <font color="red">"<?php echo ($onzero['item_name']); ?>"项目&nbsp;"<?php echo ($onzero['title_count']); ?>"导航&nbsp;图片操作</font> -->
            <div class="brand">
                   <a href="/admin.php/Item/index.html" style="color: red;" >"<?php echo ($onzero['item_name']); ?>"项目</a> / <a href="/admin.php/Item/showtitle/item_id/<?php echo ($v["item_id"]); ?>.html" style="color: red;">"<?php echo ($onzero['title_count']); ?>"导航</a> /&nbsp;图片操作
            </div>
           
    	        <br><br>
				<ul>
					<?php if(is_array($showImg)): foreach($showImg as $k=>$v): ?><li>
              <div id="img" style="background: url(<?php echo ($v["img_add"]); ?>) center no-repeat; background-size: cover"></div>
  						<p><a href="/admin.php/Item/deleteimg/img_id/<?php echo ($v["img_id"]); ?>.html" onclick="if(confirm('确定删除该图片?')==false)return false;">删除图片</a></p>
  					</li><?php endforeach; endif; ?>
				</ul>
    	</center>
    	<div id="box">
    		<a href="/admin.php/Item/upimg/title_id/<?php echo ($onzero['title_id']); ?>.html">图片上传</a>
    	</div>
    </body>
</html>