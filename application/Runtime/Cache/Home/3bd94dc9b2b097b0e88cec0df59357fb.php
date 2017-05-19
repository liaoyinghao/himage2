<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title></title>
		<style type="text/css">
			@font-face {
			    font-family: 'font1';
			    src: url('/Public/home/font1/iconfont.eot');
			    src: url('/Public/home/font1/iconfont.eot?#iefix') format('embedded-opentype'),
			    url('/Public/home/font1/iconfont.woff') format('woff'),
			    url('/Public/home/font1/iconfont.ttf') format('truetype'),
			    url('/Public/home/font1/iconfont.svg#iconfontyyy') format('svg');
			}
			*{
				margin: 0;
				padding: 0;
				color: #FFFFFF;
			}
			li{
				list-style: none;
			}
			#banner{
				width: 100%;
				height: 3rem;
				background: #000000;
			}
			#banner img{
				width: 100%;
				height: 3rem;
			}
			#wrap-box{
				background: url(/Public/home/images/icon/bg.jpg);
				overflow: hidden;
			}
			#hezuo{
				width: 100%;
				/*height: 1rem;*/
				overflow: hidden;
				text-align: center;
				margin-top: 0.3rem;
			}
			#hezuo p:nth-child(1){
				font-size: 0.38rem;
			}
			#hezuo p:nth-child(2){
				font-size: 0.3rem;
			}
			#call{
				overflow: hidden;
				width: 100%;
				/*height: 3rem;*/
				font-size: 0.3rem;
				text-align: center;
			}
			#call .intro{
				width: 90%;
				margin: 0 auto;
				/*font-size: 0.2rem;*/
				font-size: 14px;
				font-weight: 300;
				line-height: 0.4rem;
			}
			#us{
				width: 100%;
				margin-top: 0.2rem;
				margin-bottom: 0.2rem;
				/*height: 0.8rem;*/
				/*font-size: 0.2rem;*/
				font-size: 14px;
				text-align: center;
			}
			#sys{
				/*font-size: 0.2rem;*/
				font-size: 14px;
				height: 2.6rem;
				width: 100%;
				text-align: center;
			}
			#sys img{
				width: 1.5rem;
				text-align: center;
				margin-top: 0.1rem;
			}
			footer{
				width: 100%;
				height: 0.8rem;
				background: #000000;
				position: fixed;
				bottom: 0;	
			}
			footer ul{
				display: box;              
			  	display: -webkit-box;      
			  	display: -moz-box;     
			  	display: -ms-flexbox;      
			  	display: -webkit-flex; 
			  	display: flex; 
			}
			footer ul li{
				flex: 1;
			}
			footer ul li a{
				width: 100%;
				/*height: 0.8rem;*/
				float: left;
				color: #FFFFFF;
				font-size: 0.5rem;
				text-align: center;
				line-height: 0.8rem;
				text-decoration: none;
			}
			
		</style>
	</head>
	<body>
		<div id="banner">
			<img src="/Public/home/images/icon/logo3.jpg"/>
		</div>
		<div id="wrap-box">
			<div id="hezuo">
	            <p>GET IN TOUCH</p>
	            <p>#期待与您的合作</p> 
	        </div> 
	        <div id="call">
	        	<p style="font-size: 0.4rem;">about us</p>
	        	<p></p>
	        	<p class="intro">我们是一群具有敏锐时尚洞察力和崇尚艺术的年轻人，创新、求异、探索十年让我们在商业和艺术间游刃有余，<br/>
				商业和艺术的关系不再对立，我们呈现的是商业和艺术的平衡和完美表达，对影像的执着，<br/>开放性的眼光，亢奋的工作状态、文化梦想，让影像更具魅力。力求完美的影像团队勾勒出
				。<br>多元的文化视角和时尚观察力。准确，率真，亲切，富有冲击力的视觉语言融入了当代人的生活美学需求。</p>
	        </div>
	        <div id="us">
	        	<p>公司地址&nbsp;:&nbsp;上海市上南路4588号1128室</p>
				<p style="margin-top: 0.1rem;">联系方式&nbsp;:&nbsp;18101810549</p>
	        </div>
	        <div id="sys">
	            
	                <p>关注我们</p>
	           

	                <img src="/Public/home/images/icon/ma.jpg"/>

	        </div>
		</div>
			<div style="display: none">
				<input type="text" id="tip" value="<?php echo ($t); ?>"></input>
				<input type="text" id="iip" value="<?php echo ($i); ?>"></input>
			</div>
		<footer>
			<ul>
				<li>
						<a href="<?php echo ($home); ?>" style="font-family: 'font1';">&#xe63d;</a>
					</li>
					<li>
						<a href="<?php echo ($sj); ?>" style="font-family: 'font1';">&#xe665;</a>
					</li>
					<li>
						<a href="#" style="font-family: 'font1';">
							&#xe639;
						</a>
					</li>
					<li class="sort">
						<a href="<?php echo ($dz); ?>" style="font-family: 'font1';">&#xe602;</a>
					</li>
					<li>
						<a href="#" style="font-family: 'font1'; color: red;">&#xe65c;</a>
					</li>
			</ul>
		</footer>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript">
			document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + "px";
			window.addEventListener("resize",function(){
				document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + "px";
			},false);
			
			$.ajax({
				type:"post",
				url:"/index.php/Himage/getWe",
				success : function(data){
					var str="";
				}
			});
		</script>
	</body>
</html>