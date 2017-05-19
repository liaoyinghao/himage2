	document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + "px";
	window.addEventListener("resize",function(){
		document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + "px";
	},false);

	
	var yScroll;
	var oShow=document.getElementById("show")
	var oC = oShow.getElementsByClassName("swiper-wrapper")[0];
	var oFw=document.documentElement.clientWidth;
	var oContent=document.getElementById("content")
	var oImg=oContent.getElementsByTagName("img");
	var oWi = document.getElementsByClassName("wrap-img")
	load();
	
		function load(){
		 	$.ajax({
				type:"get",
				url:"http://himage.shnow.cn/index.php?c=index&a=fly",
				dataType : "json",
				success : function(res){
					console.log(res);
					var str="";
					var str1=""
					for( i=0;i<res.length;i++ ){
						str+="<div class='wrap-img' style='background: url("+res[i].Image+") center no-repeat;  background-size: cover; '></div>"	
						str1+="<div class='swiper-slide'><img src='"+res[i].Image+"'/></div>"
					}
					$("#content").append(str);
					
					for(var i=0;i<oWi.length;i++){
						
						oWi[i].index=i
						oWi[i].onclick = function(){
							yScroll = document.body.scrollTop;
						console.log(yScroll)
							$("#box").css("display","none");
							$("#show").css("display","block");
							var swiper = new Swiper('#show .swiper-container');
							oC.style.webkitTransform="translateX("+(-this.index)*oFw+"px)";
						}
					}
					$("#show .swiper-wrapper").append(str1);
				}
			});
		 }

	 

//	 	function banner(){
//		 	$.ajax({
//				type:"get",
//				url:"http://datainfo.duapp.com/shopdata/getBanner.php",
//				dataType : "jsonp",
//				success : function(data){
//					oData=JSON.parse(data[1].goodsBenUrl);
//					var str2=""
//					for(i=0;i<oData.length;i++){
//						str2+="<div class='swiper-slide'><img src='"+oData[i]+"'/></div>"
//					}
//					$("#box .swiper-wrapper").append(str2)
//				}
//			});
//		 }
	 
	$(".btn").click(function(){
		$("#box").css("display","block");
		$("#show").css("display","");
		$("body").animate({scrollTop:yScroll},0);
	})
	$(window).scroll(function(){
		$("footer").css("opacity","0");
	});
	setInterval(function(){
		$("footer").css("opacity","1");
	},1500)