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
<!--弹幕
<style>
    .video_content_box{position: relative;    width: 500px;}
    .video_box{position: absolute;}
    .content_box{    position: absolute;
    z-index: 999;
    color: #fff;
    top: 110px;
    right: 0;
    animation:right_left 2s linear infinite;//动画
    }
    
    /*理解成动画的帧*/
    @keyframes right_left{
        0%{right: 0}
        50%{right: 50%}
        100%{right: 100%}

    }
</style>
-->
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
        <form method="get" action="<?php echo U('Home/Article/index',array('do'=>'search'));?>">
		<div class="input-group">
			<input type="text" class="form-control" name="keywrod" placeholder="请输入文章关键词">

			<span class="input-group-addon"><input type="submit" style="background-color: #0AAC87;border: 0"  value="搜索"></span>
		</div>
        </form>
	</div>
</div>


<div class="navigator clearfix">
  <ul class="nav nav-pills nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="<?php echo U('home/index/index');?>">首页</a></li>
    <li role="presentation" ><a href="<?php echo U('home/course/index');?>">课程列表</a></li>
    <li role="presentation" ><a href="<?php echo U('home/article/index');?>">文章列表</a></li>
    <li role="presentation" ><a href="#">社区中心</a></li>    
  </ul>
</div>
<div class="container" align="center">
    <div class="row col-md-12" align="right">
      <a href="<?php echo U('Admin/Article/add');?>">添加文章</a>
      <a href="<?php echo U('Admin/Course/add',array('user_id'=>$user_id));?>">添加课程</a>
    </div>		
	<div class="container">
        <h1 style="font-weight: bold;"><?php echo ($info['title']); ?></h1>
        <div class="time_box">
            上传时间：<?php echo (date("Y-m-d H:i:s",$info['create_time'])); ?>
        </div>
        <div class="row">
            <div>图片:</div>
            <div class="img-thumbnail"><img src="/thinkphp_3.2.3_full/Public/<?php echo ($info['thumb']); ?>" ></div>
            <div align="left" style="font-weight: bold;">具体内容：</div>
            <?php echo htmlspecialchars_decode($info['content']); ?>
        </div>
    </div>
  </div>
</body>
</html>