<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>网站后台登陆</title>
		<meta name="keywords" content="网站模板,手机网站模板,手机登录页面,登录页面HTML,免费网站模板下载" />
		<meta name="description" content="JS代码网提供高质量手机网站模板下载" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="{{$root}}/web/admin/view/login/assets/css/reset.css">
        <link rel="stylesheet" href="{{$root}}/web/admin/view/login/assets/css/supersized.css">
        <link rel="stylesheet" href="{{$root}}/web/admin/view/login/assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script>
            window.onload = function(){
                $('.username').focus();
            }
        </script>

    </head>

    <body>

        <div class="page-container">
            <h1>网站后台登陆</h1>
            <form action="index.php?s=admin/login/denglu" method="post" class="form">
                <input type="text" name="username" class="username" placeholder="用户名">
                <input type="password" name="password" class="password" placeholder="密码">
                <div class="yzm">
                	<input type="text" name="code" maxlength="4" class="code" placeholder="验证码">
                		<img src="{{u(codeImg)}}" onclick="this.src = '{{u(codeImg)}}' + '&' + Math.random()"/>
                </div>
                <button type="submit" class="submit">提交</button>
                <div class="error"><span>+</span></div>
                <div class="error" style="top: 96px;"><span>+</span></div>
                <div class="error" style="top: 165px;"><span>+</span></div>
            </form>
            <div class="connect">
                <p>Or connect with:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div>
        </div>
		
        <!-- Javascript -->
        <script src="{{$root}}/web/admin/view/login/assets/js/jquery-1.8.2.min.js"></script>
        <script src="{{$root}}/web/admin/view/login/assets/js/supersized.3.2.7.min.js"></script>
        <script src="{{$root}}/web/admin/view/login/assets/js/supersized-init.js"></script>
        <script src="{{$root}}/web/admin/view/login/assets/js/scripts.js"></script>
        <script src="{{$root}}/web/admin/view/login/assets/js/ajax.js"></script>

    </body>

</html>