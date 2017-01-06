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
<div class="navigator clearfix">
	<ul class="nav nav-pills nav-justified" role="tablist">
	  <li role="presentation" class="active"><a href="<?php echo U('home/index/index');?>">首页</a></li>
	  <li role="presentation" ><a href="<?php echo U('home/course/index');?>">课程列表</a></li>
	  <li role="presentation" ><a href="<?php echo U('home/article/index');?>">文章列表</a></li>
	  <li role="presentation" ><a href="#">社区中心</a></li>
	</ul>
</div>
<!--叶天桥-->	
<div id="title"> 
  
	<div id="title-icon"> 
	<img src="/thinkphp_3.2.3_full/Public/liu/img/tt.png" /> 
	</div> 
	  
	<div id="title-intro" > 
	    <ul class="list-unstyled"> 
	     <h1>复盘：让创业不败的方法论</h1> 
	    </ul> 
	    <ul class="list-unstyled" id="byuser"> 
	     <li><h4>by书怡</h4></li> 
	    </ul> 
	    <ul class="list-unstyled"> 
		     <div class="pull-left" id="title-eng"> 
			      <ul class="list-unstyled"> 
			       <li class="pull-left" id="g"><h4>干货值</h4></li> 
			       <li class="pull-right" id="gvalue"><h4>|&nbsp;&nbsp; 10斤</h4></li> 
			      </ul> 
		     </div> 
		     <div class="pull-left" id="comment"> 
			      <ul class="list-unstyled"> 
			       <li class="pull-left" id="spit">|</li> 
			       <li class="pull-left"><a href="#"><h4>100条评价</h4></a></li> 
			      </ul> 
		     </div> 
		     <div class="pull-left" id="comment"> 
			      <ul class="list-unstyled"> 
			       <li class="pull-left" id="spit">|</li> 
			       <li class="pull-left"><a href="#"><h4>我要评价</h4></a></li> 
			      </ul> 
		     </div> 
		     <div class="pull-left" id="collect"> 
			      <ul class="list-unstyled"> 
			       <li class="pull-left" id="spit">|</li> 
			       <li class="pull-left"><a href="#"><h4>收藏</h4></a></li> 
			      </ul> 
		     </div> 
	    </ul> 
	</div> 
</div> 
  <!--container begin--> 
  <div id="container"> 
   <!--left-box--> 
   <div class="pull-left" id="left-box"> 
	    <div id="obj"> 
		     <ul class="list-unstyled"> 
		      <li>课时列表</li> 
		     </ul> 
	    </div> 
    <!--课程列表开始--> 
    <div id="list"> 
	     <div id="list-title"> 
	      <ul class="list-unstyled"> 
	       <li><h4>课时1 梁牛:低成本营销方法论</h4></li> 
	      </ul> 
	     </div> 
	     <div class="pull-left" id="list-box"> 
	      <!--子课时列表开始--> 
		      <a href="#view_id.html"> 
			       <ul class="list-unstyled pull-left" id="list-content"> 
			        <span class="glyphicon glyphicon-play-circle pull-left"></span> 
			        <li class="pull-left lcon"><h5>梁牛:低成本营销方法论（上）</h5></li> 
			        <li class="pull-right rcon"><h5>44浏览</h5></li> 
			       </ul> 
		       </a> 
	      <!--子课时列表开始--> 
		      <a href="#view_id.html"> 
			       <ul class="list-unstyled pull-left" id="list-content"> 
			        	<span class="glyphicon glyphicon-play-circle pull-left"></span> 
				        <li class="pull-left lcon"><h5>梁牛:低成本营销方法论（下）</h5></li> 
				        <li class="pull-right rcon"><h5>44浏览</h5></li> 
			       </ul> 
		       </a> 
	     </div> 
    </div> 
    <!--课程列表结束--> 
    <div id="list"> 
	     <div id="list-title"> 
		      <ul class="list-unstyled"> 
		       <li><h4>课时2 梁牛:低成本营销方法论</h4></li> 
		      </ul> 
	     </div> 
	     <div class="pull-left" id="list-box"> 
		      <a href="#view_id.html"> 
			       <ul class="list-unstyled pull-left" id="list-content"> 
				        <span class="glyphicon glyphicon-play-circle pull-left"></span> 
				        <li class="pull-left lcon"> <h5>梁牛:低成本营销方法论</h5></li> 
				        <li class="pull-right rcon"><h5>44浏览</h5></li> 
			       </ul> 
		       </a> 
	     </div> 
    </div> 
    <div id="list"> 
	     <div id="list-title"> 
		      <ul class="list-unstyled"> 
		       		<li><h4>课时3 开启你的主动人生</h4></li> 
		      </ul> 
	     </div> 
	     <div class="pull-left" id="list-box"> 
		      <a href="#view_id.html"> 
			       <ul class="list-unstyled pull-left" id="list-content"> 
			        <span class="glyphicon glyphicon-play-circle pull-left"></span> 
			        <li class="pull-left lcon"><h5> [霸王课]程颢-开启你的主动人生（上）</h5></li> 
			        <li class="pull-right rcon"><h5>44浏览</h5></li> 
			       </ul> 
		       </a> 
		      <a href="#view_id.html"> 
			       <ul class="list-unstyled pull-left" id="list-content"> 
			        <span class="glyphicon glyphicon-play-circle pull-left"></span> 
			        <li class="pull-left lcon"><h5> [霸王课]程颢-开启你的主动人生（下）</h5></li> 
			        <li class="pull-right rcon"><h5>44浏览</h5></li> 
			       </ul> 
		       </a> 
	     </div> 
    </div> 
   </div> 
   <!--right-box--> 
	<div class="pull-right" id="right-box"> 
	<!--notice-box--> 
	    <div class="panel panel-danger" id="notice-box"> 
		     <div class="panel-heading" id="notice"> 
		      <ul class="list-unstyled" id="list-box"> 
		       <li class="pull-left"><h3 class="panel-title">课程公告</h3></li> 
		       <li class="pull-right"><a href="#"><h3 class="panel-title">全部&gt;</h3></a></li> 
		      </ul> 
		     </div> 
		     <div class="panel-body"> 
			      <ul class="list-unstyled" id="list-box"> 
			       <li>没有找到数据</li> 
			      </ul> 
		     </div> 
	    </div> 
	<!--notice-box end--> 
	<!--online-box--> 
	<div class="panel panel-danger" id="online-box"> 
		 <div class="panel-heading" id="online-title"> 
			  <ul class="list-unstyled" id="online"> 
				   <li class="pull-left online-num"><a href="#"><h3 class="panel-title">3位&nbsp;</h3></a></li> 
				   <li class="pull-left online-title"><h3 class="panel-title">同学在线</h3></li> 
			  </ul> 
		 </div> 
	 <div class="panel-body" id="online-user"> 
		  <ul class="list-unstyled" id="user"> 
		   <a href="#"><li><img src="/thinkphp_3.2.3_full/Public/liu/img/11.jpg" class="img-circle" />张小明</li></a> 
		   <a href="#"><li><img src="/thinkphp_3.2.3_full/Public/liu/img/11.jpg" class="img-circle" />李小猪</li></a> 
		   <a href="#"><li><img src="/thinkphp_3.2.3_full/Public/liu/img/11.jpg" class="img-circle" />胡小凯</li></a> 
		  </ul> 
	 </div> 
	</div> 
	<!--online-box end--> 
	</div> 
   <!--right-box end--> 
  </div> 

  <!--container end--> 
  <div class="clearfix"></div> 
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
      <div style="padding:15px 0;color:white; text-align: center;">
        粤ICP备138666666号 &nbsp;&nbsp;&nbsp; Copyright &copy; 138class 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>  
 </body>
</html>