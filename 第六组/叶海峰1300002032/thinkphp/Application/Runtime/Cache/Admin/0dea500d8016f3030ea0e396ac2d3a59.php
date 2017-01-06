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
		<img src="/thinkphp_3.2.3_full/Public/san/img/logo.png">
	</div>
	<div class="search">
		<div class="input-group">
			<input type="text" class="form-control">
			<span class="input-group-addon">搜索</span>
		</div>
	</div>
</div>


<div class="container">
    <input name="name" type="button" onClick="show();" value="显示">
    <div id="div" style="display: none" onMouseout="hidden();">
    show it
    </div>
<table class="table">
  <thead>
    <tr>
      <th>课程分类</th>
      <th>课程名称</th>
      <th>创建者</th>
      <th>学员</th>
      <th>点击量</th>
      <th>状态</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    

    <?php if(is_array($list)): foreach($list as $key=>$list_i): ?><tr>
          <th><?php echo ($list_i['cour']); ?></th>
          <th><?php echo ($list_i['courname']); ?></th>
          <th><?php echo ($list_i['creator']); ?></th>
          <th><?php echo ($list_i['stunum']); ?></th>
          <th><?php echo ($list_i['clirate']); ?></th>
          <th><?php echo ($list_i['status']); ?></th>
          
          <th>
            <a href="">查看</a>
            |
            <a href="<?php echo U('Course/shoose',array('id'=>$list_i['id'],'courname'=>$list_i['courname']));?>">添加</a>
            
          </th>
        </tr><?php endforeach; endif; ?>
  </tbody>
</table>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10" align="center">
      <?php echo ($page); ?>
    </div>
    <div class="col-md-1"></div>
  </div>

</div>  
</body>
<script>

function show(){
document.getElementById("div").style.display="";
//alert(document.getElementById("div").style.display)
}
function hidden(){
document.getElementById("div").style.display="none";
//alert(document.getElementById("div").style.display)
}
</script>
</html>