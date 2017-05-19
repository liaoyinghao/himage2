<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
		<meta charset="utf-8">
        <title>Control Center Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="/Public/register/css/reset.css">
        <link rel="stylesheet" href="/Public/register/css/supersized.css">
        <link rel="stylesheet" href="/Public/register/css/style.css">
		
	</head>

    <body>

        <div class="page-container"><br><br><br>
            <h1>Control Center Login</h1>
            <form method="post" name="frm">
                <input type="text" name="username" class="username user_account" placeholder="Username">
                <input type="password" name="password" class="password user_pwd" placeholder="Password">
                
                <button class="login">Sign me in</button>
                <div class="error"><span>+</span></div>
            </form>
        </div>
        
        <!-- Javascript -->
        <script src="/Public/register/js/jquery-1.8.2.min.js"></script>
        <script src="/Public/register/js/supersized.3.2.7.min.js"></script>
        <script src="/Public/register/js/supersized-init.js"></script>
        <script src="/Public/register/js/scripts.js"></script>
       
        <!-- Form Validation -->
        <script type="text/javascript">
            $(".login").click(function(){
                    $.ajax({
                        type:"post",
                        url:"<?php echo U('Login/login');?>",
                        data:{
                            "user_account":$(".user_account").val(),
                            "user_pwd":$(".user_pwd").val()
                        },
                        success : function(res){
                            if(res==2)
                            {
                                alert("用户名或密码有误 请重新输入");
                            }
                            else if(res==1)
                            {
                                window.location.href="<?php echo U('Index/index');?>";
                            }
                        }
                    })
            })
            
        </script>
    </body>

</html>