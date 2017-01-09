<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<!--首页（第三组）-->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/san/css/style.css">
    <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/san/css/content.css" />
    <link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/san/css/jquery.zySlide.css">
    <!--<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="/thinkphp_3.2.3_full/Public/bootstrap-3.3.0/js/bootstrap.min.js"></script>
    <script src="/thinkphp_3.2.3_full/Public/san/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/thinkphp_3.2.3_full/Public/san/js/content.js" type="text/javascript" charset="utf-8"></script>
    <script src="/thinkphp_3.2.3_full/Public/san/js/jquery.mn.js" type="text/javascript" charset="utf-8"></script>
		<style type="text/css">
			.zy-Slide section{ color: black; border-width: 1px; border-style: solid; }
		</style>
<!-- 文章列表 -->	
	<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/bootstrap-3.3.7/css/bootstrap.min.css">

<!-- 课程（第六组） --> 
	<script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>  
	<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/liu/css/viewstyle.css" /> 
	<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/liu/css/style.css" /> 


<!-- 缩略图预览插件 -->
<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/lib/dropify/dist/css/demo.css">
<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/lib/dropify/dist/css/dropify.min.css">
<!-- 富文本插件 -->
<script type="text/javascript" charset="utf-8" src="/thinkphp_3.2.3_full/Public/lib/utf8-php/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/thinkphp_3.2.3_full/Public/lib/utf8-php/ueditor.all.min.js"> </script>
<style type="text/css">
.text_area{width: 500px; height: 300px;}
.html_thumb{width: 500px;}
</style>
</head>
<body>
<div class="top">
	<span>在线教育，让学生不在学习和工作烦恼</span>
	<div class="account clearfix">
		<a class="login" href="<?php echo U('home/login/index');?>"><?php echo ($login_username); ?></a>
		<a class="login" href="<?php echo U('home/register/index');?>"><?php echo ($register); ?></a>
<a class="register" href="<?php echo U('home/Login/login_out');?>"><?php echo ($login_out); ?></a>
	</div>
</div>
<div class="header clearfix">
	<div class="logo">
		<a href="<?php echo U('Home/Article/index');?>"><img src="/thinkphp_3.2.3_full/Public/san/img/logo.png"></a>
	</div>
	<div class="search">
		<div class="input-group">
			<input type="text" class="form-control">
			<span class="input-group-addon">搜索</span>
		</div>
	</div>
</div>

<!--  -->				
	<div class = "cantainer" align="center">
	<div class=""><h1>注册</h1></div>
	<form action="<?php echo U('register/index');?>" method="post">
		<div class = "form-group">
			用户名：<input type="text" name="username">
		</div>
		<div class = "form-group">
			密  码：<input type="password" name="password">
		</div>
		<div class = "form-group">
			确认密码：<input type="password" name="user_pwd_2">
		</div>
		<div class = "form-group">
			<input type="submit" class="btn btn-success" value="注 册">
		</div>
	</form>
	</div>

<script type="text/javascript" src="/thinkphp_3.2.3_full/Public/js/jquery.1.11.1.min.js"></script>
<script type="text/javascript">
	
</script>	
<div class="light-green-background">
        <div class="container">
            <div class="row">
                <div style="width: 100%; padding: 0 10%;">
                    <div class="span3 offset1" style="color:#FFF;">
                        <h3>关于我们</h3>
                        <p>这是一个爱学习的人</p>
                        <p>免费探索兴趣爱好的网站</p>
                    </div>
                    <div class="span3" style="color:#FFF;">
                        <h3>联系合作</h3>
                        <p><a style="color:#FFF;" href="#">联系我们</a></p>
                        <p><a style="color:#FFF;" href="#">合作方式</a></p>
                    </div>
                    <div class="span3" style="color:#FFF;">
                        <h3>关注我们</h3>
                        <p><a style="color:#FFF;" href="#">微博</a></p>
                        <p><a style="color:#FFF;" href="#">微信</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="green-background">
        <div class="container">
            <div class="row">
                <div class="span11 offset1">
                    <div style="padding:15px 0;color:white; text-align: center;">粤ICP备138666666号 &nbsp;&nbsp;&nbsp; Copyright © 138class </div>
                </div>
            </div>
        </div>
    </div>
	<script type="text/javascript"></script>
    <script src="/thinkphp_3.2.3_full/Public/san/js/jquery.min.js"></script>
    <script src="/thinkphp_3.2.3_full/Public/san/js/jquery.zySlide.js"></script>
    <script src="/thinkphp_3.2.3_full/Public/san/js/index.js"></script>
</body>
</html>