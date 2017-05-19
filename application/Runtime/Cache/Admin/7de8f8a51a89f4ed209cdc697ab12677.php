<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo ($it['item_name']); ?> - 查看原图</title>
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
                        text-decoration: underline!important;
                      }
       	</style>
    </head>
    <body>
    	<center>
    	        <!-- <font color="red"><?php echo ($it['item_name']); ?>  项目查看原图</font> -->
              <div class="brand">
                 <a href="/admin.php/Item/index.html" style="text-decoration: none; color: red;">项目管理</a> /  <?php echo ($it['item_name']); ?>  项目查看原图  
            </div>
            
    	        <br><br>
				<ul>
					<?php if(is_array($im)): foreach($im as $k=>$v): ?><li>
              <a href="<?php echo ($v["img_add"]); ?>"><div id="img" style="background: url(<?php echo ($v["img_add"]); ?>) center no-repeat; background-size: cover"></div></a>
  						<p><a href="/admin.php/Item/dyt/img_id/<?php echo ($v["img_id"]); ?>.html" onclick="if(confirm('确定删除该图片?')==false)return false;">删除图片</a></p>
  					</li><?php endforeach; endif; ?>
				</ul>
    	</center>
    </body>
</html>