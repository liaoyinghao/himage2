<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=yes" />
		<title><?php echo ($title); ?></title>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="/Public/home/css/index.css"/>
		 <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	 <style type="text/css">
		body {
	 		background: #000;
	 		height: 100%;
	 	}
        </style>
	</head>
	<body>
		<div id="load">
			<img src="/Public/home/images/load/load.gif"/>
		</div>
		<div id="wrap-box">
			<div id="box">
				<div id="banner">
					
					<p id="bg"></p>
					<ul id="nav">
						
					</ul>
					<span style="display: block;">拼图</span><span style="display: none;">取消拼图</span>
				</div>
				<p style="margin-top: -10px;"></p>
				<div id="content">
					
				</div>
				<footer>
				<ul>
					<li>
						<a href="<?php echo ($home); ?>">&#xe63d;</a>
					</li>
					<li>
						<a href="<?php echo ($sj); ?>">&#xe665;</a>
					</li>
					<li>
						<a href="#" class="btn" data-toggle="modal" data-target="#myModal" style="padding: 0; font-size: 0.5rem;outline: none;">
							&#xe639;
						</a>
					</li>
					<li class="sort">
						<a href="#" style="color: red;">&#xe602;</a>
					</li>
					<li>
						<a href="<?php echo ($contact); ?>">&#xe65c;</a>
					</li>
				</ul>
			</footer>
			</div>
			
	
	<!-- 二维码模态框 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		           <div class="modal-dialog">
			           <div class="modal-content" style="background: transparent;" id="motai">
			           
			                  <div class="modal-body">
			                   		<img src="" style="width:70%; display: block; margin: 0 auto;">
			                  </div>
			             
			           </div><!-- /.modal-content -->
		           </div><!-- /.modal -->
		</div>

        	
			


			<div id="show">
				<p class="btn" style="font-family: 'font2';text-align: center;font-size: 0.6rem;color: red;">&#xe602;</p>
				<p id="save">请长按照片保存到本地</p>

				<div class="swiper-container">
			        		<div class="swiper-wrapper">
			        		</div>
			   	 </div>
			   	 <!-- <div id="heart">&#xe60a;<span id="heart-num" >0</span></div> -->
			</div>
			<div id="sort-show">
				<p class="btn" style="background:url(/Public/home/images/icon/x.png) no-repeat center;"></p>
				<div class="swiper-container">
			        <div class="swiper-wrapper">
			        </div>
			    </div>
			</div>
			<div style="display: none">
				<input type="text" id="tip" value="<?php echo ($t); ?>"></input>
				<input type="text" id="iip" value="<?php echo ($i); ?>"></input>
				
				<input type="text" id="im1" value="http://zc.himage.com/Upload/image/2017-05-03/590978a124621.jpg"></input>

				<input type="text" id="contact" value="<?php echo ($contact); ?>"></input>
			</div>
			
		</div>
		<div id="pic">
			<p class="btn" style="font-family: 'font2';text-align: center;font-size: 0.6rem;color: red;">&#xe602;</p>
			<p id="pic-save">请长按照片保存到本地</p>
		</div>
		
		<div id="pt">
			开始拼图
		</div>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="/Public/home/js/lazy.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/home/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/home/js/index.js" type="text/javascript" charset="utf-8"></script>
		<script src="/Public/home/js/jweixin-1.0.0.js"></script>
  		<script src="/Public/home/js/zepto.min.js"></script>
		<script type="text/javascript">

	// 设置#show的高度
	$("#show").css({
		"height":$(window).height()+"px",
		"background":"#000"
	})

	// 设置#pic的高度
	$("#pic").css({
		"height":$(window).height()+"px",
		"background":"#000"
	})

	// 模态框居中设置
	$('#myModal').on('shown.bs.modal', function (e) {  
	            // 关键代码，如没将modal设置为 block，则$modala_dialog.height() 为零  
	           $(this).css('display', 'block');  
	            var modalHeight=$(window).height() / 2 - $('#myModal .modal-dialog').height() / 2;  
	           $(this).find('.modal-dialog').css({  
	                'margin-top': modalHeight
	           });  
	});  



		load();
	$("#pic .btn").click(function(){
		$("#pic").css("display","none");
		window.location.href="<?php echo ($home); ?>"
	})
		// $(".sort").click(function(){
			
		// })
		function load(){
			//赵琛修改添加点赞功能

		// 获取二维码社设置
			$.ajax({
				type:"post",
				url:"<?php echo U('Himage/getEwm');?>",
				data: {i:$("#iip").val(), 
						t:$("#tip").val()},
				success : function(data){
					var oData=JSON.parse(data);
					$(".modal-body").children().attr("src",oData);
				}
			});
		// 获取点赞图片
			$.ajax({
				type:"post",
				url:"<?php echo U('Himage/getDz');?>",
				data: {i:$("#iip").val(), 
					t:$("#tip").val()},
				success : function(data){
					console.log(data)
				}
			});
		// 获取banner图
			$.ajax({
				type:"post",
				url:"<?php echo U('Himage/getBanner');?>",
				data: {i:$("#iip").val(), 
					t:$("#tip").val()},
				success : function(data){
					var oData=JSON.parse(data);
					console.log(oData);
					var str="";
					str="<img src='"+oData+"'/>"
					$("#banner").append(str);
				}
			});
		// 获取title
			$.ajax({
				type:"post",
				url:"<?php echo U('Himage/getTitle');?>",
				data: {i:$("#iip").val(), 
						t:$("#tip").val()},
				success : function(data){
					var oData=JSON.parse(data);
					var str="";
					var str1="";
					console.log(oData);
					for(i=0;i<oData.length;i++){
						str+="<li><a href='"+oData[i].title_link+"'>"+oData[i].title_count+"</a></li>"
					}
					$("#nav").append(str);
				}
			});
		// 获取点赞顺序图片
			$.ajax({
				type:"post",
				url:"<?php echo U('Himage/ZanImg');?>",
				data: {i:$("#iip").val(), 
					t:$("#tip").val()},
				success : function(data){
					var oData = JSON.parse(data);
					console.log(oData);
					var zanUrl=[];
					var str="";
					var str1="";
					
					for( i=0;i<oData.length;i++ ){
						str+="<div class='box' style=' position: relative;'><div class='wrap-img' style='background: url("+oData[i]+") center no-repeat;  background-size: cover;'></div><input type='checkbox'/></div>"	
						str1+="<div class='swiper-slide'><img src='"+oData[i]+"'/></div>";
						zanUrl .push(oData[i].img_add) ;
					}
					$("#content").append(str);					
					// for(var i=0;i<oWi.length;i++){
					// 	var arr=[];
					// 	oWi[i].index=i;
					// 	oSpan[i].index=i;	

					// 	// 点击显示具体图片
					// 	oWi[i].onclick = function(){
					// 		// console.log(666);
					// 		var a=$("input").css("display");
					// 		console.log(a);
					// 		if(a=="none"){
					// 			// console.log(8888);
					// 			yScroll = document.body.scrollTop;
					// 			$("#box").css("display","none");
					// 			$("#show").css("display","block");
					// 			var swiper = new Swiper('#show .swiper-container');
					// 			oC.style.webkitTransform="translateX("+(-this.index)*oFw+"px)";
					// 		}
					// 		else{
					// 			$(this).siblings("input").attr("checked","true");
					// 			arr.push(oData[this.index]);
					// 			$("#pt").click(function(){
									
					// 				$.ajax({
					// 					type:"post",
					// 					url:"<?php echo U('Himage/getPt');?>",
					// 					// dataType : "json",
					// 					data : {'img_add': arr},
					// 					success : function(data){
										
					// 						var oData=JSON.parse(data);
					// 						console.log(oData);
					// 						var str = "";
					// 						str="<img src='"+oData+"'/>";
					// 						$("#wrap-box").css("display","none");
					// 						$("#pic").css("display","block");
					// 						$("#pic").append(str);
					// 						$("#pic>img").not(":eq(0)").remove();
					// 						$("#pt").css("display","none");
					// 					}
					// 				});
					// 			})
					// 		}
					// 	}

					// 	oSpan[i].onclick=function(){
					// 		arr.push(oData[this.index]);
					// 		// console.log(arr)
					// 		$("#pt").click(function(){
								
					// 			$.ajax({
					// 				type:"post",
					// 				url:"<?php echo U('Himage/getPt');?>",
					// 				// dataType : "json",
					// 				data : {'img_add': arr},
					// 				success : function(data){
									
					// 					var oData=JSON.parse(data);
					// 					console.log(oData);
					// 					var str = "";
					// 					str="<img src='"+oData+"'/>";
					// 					$("#wrap-box").css("display","none");
					// 					$("#pic").css("display","block");
					// 					$("#pic").append(str);
					// 					$("#pic>img").not(":eq(0)").remove();
					// 					$("#pt").css("display","none");
					// 				}
					// 			});
					// 		})
					// 	}
					// }
					for(var i=0;i<oWi.length;i++){
						var arr=[];
						oWi[i].index=i;
						oSpan[i].index=i;	

						// 点击显示具体图片
						oWi[i].onclick = function(){
							// 判断input的显示状态
							var a=$("input").css("display");
							// console.log(a);
							if(a=="none"){
								// console.log(8888);
								yScroll = document.body.scrollTop;
								$("#box").css("display","none");
								$("#show").css("display","block");
								var swiper = new Swiper('#show .swiper-container');
								oC.style.webkitTransform="translateX("+(-this.index)*oFw+"px)";

								// 请求点赞
								// for(i=0;i<oHeart.length;i++){
								// 	oHeart[i].index=i;					
								// 	oHeart[i].onclick=function(){
								// 	var that=this;
								// 	$.ajax({
								// 		type:"post",
								// 		url:"<?php echo U('Himage/getDz');?>",
								// 		data: {'i':zanUrl[this.index]},
								// 		success : function(data){
								// 			if(data==="点赞成功"){
												
								// 				oHeart[that.index].style.color="red";
								// 				oNum[that.index].innerHTML=Number(oNum[that.index].innerHTML)+Number(1);
												
								// 			}
								// 			else{
										
								// 			}
											
								// 		}
								// 	})
									
								// 	}	
								// }
							}
							else{
								// 拼图
								var b = $(this).siblings("input").attr("checked");
								console.log(b);
								// 循环checked
								if(b==undefined){
									$(this).siblings("input").prop("checked","true");
									arr.push(oData[this.index]);
									$("#pt").click(function(){
										// 数组去重
										var newarr = $.unique(arr)
										$.ajax({
											type:"post",
											url:"<?php echo U('Himage/getPt');?>",
											// dataType : "json",
											data : {'img_add': newarr},
											success : function(data){
											
												var oData=JSON.parse(data);
												console.log(oData);
												var str = "";
												str="<img src='"+oData+"'/>";
												$("#wrap-box").css("display","none");
												$("#pic").css("display","block");
												$("#pic").append(str);
												$("#pic>img").not(":eq(0)").remove();
												$("#pt").css("display","none");
											}
										});
									})
								}else {
									$(this).siblings("input").removeProp("checked");
									console.log(b);
									console.log(arr);

									// arr.push(oData[this.index].img_add);	
									for(j=0;j<arr.length;j++){
										console.log(arr);
										var shan= $(this).attr("src");
										console.log(shan);
										arr.splice(shan);
									}	
								}
							}
						}

						oSpan[i].onclick=function(){
							var c = $(this).attr("checked");
							// 判断checked
							if(c=="checked"){
								arr.push(oData[this.index]);
								$("#pt").click(function(){
									$.ajax({
										type:"post",
										url:"<?php echo U('Himage/getPt');?>",
										// dataType : "json",
										data : {'img_add': arr},
										success : function(data){
											var oData=JSON.parse(data);
											console.log(oData);
											var str = "";
											str="<img src='"+oData+"'/>";
											$("#wrap-box").css("display","none");
											$("#pic").css("display","block");
											$("#pic").append(str);
											$("#pic>img").not(":eq(0)").remove();
											$("#pt").css("display","none");
										}
									});
								})
							}else {
								
							}
						}
					}
					$("#show .swiper-wrapper").append(str1);
				}
			});
			
		}
		
		</script>
	</body>
</html>