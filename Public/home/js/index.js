	document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + "px";
	window.addEventListener("resize",function(){
		document.documentElement.style.fontSize = document.documentElement.clientWidth / 6.4 + "px";
	},false);

	var yScroll;
	var oShow=document.getElementById("show");
	var oShows=document.getElementById("sort-show");
	var oC = oShow.getElementsByClassName("swiper-wrapper")[0];
	var oCa = oShows.getElementsByClassName("swiper-wrapper")[0];
	var oFw=document.documentElement.clientWidth;
	var oContent=document.getElementById("content");
	var oBox=oContent.getElementsByClassName("box");
	var oImg=oContent.getElementsByTagName("img");
	var oWi = document.getElementsByClassName("wrap-img");
	var oSpan = oContent.getElementsByTagName("input");
	var oNav = document.getElementById("nav")
	var oLi = oNav.getElementsByTagName("li")
	var oSlide = document.getElementsByClassName("swiper-slide");
	var oHeart = document.getElementsByClassName("heart");
	var oNum = document.getElementsByClassName("heart-num");
	var oBox = document.getElementsByClassName("box");
	var oCc = document.getElementsByClassName("cc");


	 
	$("#show .btn").click(function(){
		$("#box").css("display","block");
//		yScroll=500px;
//		console.log(yScroll+"px"+)
		$("#show").css("display","");
//		banner()
		$("body").animate({scrollTop:yScroll},0);
	})
	$("#sort-show .btn").click(function(){
		$("#box").css("display","block");
//		yScroll=500px;
//		console.log(yScroll+"px"+)
		$("#sort-show").css("display","none");
//		banner()
		$("body").animate({scrollTop:yScroll},0);
	})
	
	setTimeout(function(){
		$("#load").css("display","none");
		$("#wrap-box").css("display","block");
		var swiper = new Swiper('#box .swiper-container');
	}, 1000);
	$(window).scroll(function(){
		$("footer").css("opacity","0");
	});
	setInterval(function(){
		$("footer").css("opacity","1");
	},1500)
	$("#banner span:first").click(function(){
		$(".box input").css("display","block");
		$("footer").css("display","none");
		$("#pt").css("display","block");
		$("#banner span:first").css("display","none");
		$("#banner span:last").css("display","block");
	})
	$("#banner span:last").click(function(){
		window.location.reload();
	})


	
	