<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
   
 <head>
        <meta charset="utf-8">
        <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" name="viewport">
        <title>
            文章列表
        </title>
                <link href="/AS_Education/Public/css/bootstrap-3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <script src="/AS_Education/Public/js/bootstrap.min.js" type="text/javascript">
                </script>
                <script src="/AS_Education/Public/js/jquery.min.js" type="text/javascript">
                </script>
                <link href="/AS_Education/Public/css/common.css" rel="stylesheet" type="text/css">  </link>        
               <link rel="stylesheet" type="text/css" href="/AS_Education/Public/css/articleDetail.css">
                  <script type="text/javascript" src="/AS_Education/Public/js/test.js"></script>
              
    </head>
     <body>
    <div class="wrap">
        <div class="container clearfix">
            <header>
                <div class="top">
                    <p>
                        在线教育，让学生不在为学习和工作烦恼
                    </p>
                    <div class="account clearfix">
                        <a class="login" href="#">
                            登陆
                        </a>
                        <a class="register" href="#">
                            注册
                        </a>
                    </div>
                </div>
                <!--end .top-->
                <div class="header clearfix">
                    <div class="logo">
                        <a href="#">
                            <img src="/AS_Education/Public/images/logo.png">
                            </img>
                        </a>
                    </div>
                    <div class="search">
                        <!--     <form method="get" action="<?php echo U('Artis_formcle/articleList',array('do'=>'search'));?>"> 
                             <input type="text" class="form-control" name="keyword" placeholder="请输入标题的关键字">                
                             <button id="btn_search" type="submit" value="搜索" class="input-group-addon">    
                        
                        </form> -->
                        <div class="style_5">
                            <form action="<?php echo U('Artis_formcle/articleList',array('do'=>'search'));?>" id="searchform" method="get">
                                <fieldset>
                                    <input class="text_input" id="s" name="keyword"  type="text" placeholder="请输入关键字"/>
                                    <input style="color: #fff;font-size: 1em;font-weight: bolder;" name="submit" type="submit" value="搜索"/>
                                </fieldset>
                            </form>
                        </div>
                        <!--end .style_5-->
                    </div>
                </div>
                <!--end .header-->
                <div class="navigator clearfix">
                    <ul class="nav nav-pills nav-justified" role="tablelist">
                        <li role="presentation">
                            <a href="/AS_Education/index.php/Index/index/">
                                首  页
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/AS_Education/index.php/Course/course/">
                                课程列表
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/AS_Education/index.php/Article/articleList/">
                                文章列表
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="/AS_Education/index.php/Community/community/">
                                社区列表
                            </a>
                        </li>
                    </ul>
                </div>
                <!--end .navigator-->
            </header>
      

                
                <div class="main">
                    <h1>
                       
                        <?php echo ($data["article_title"]); ?>
                    </h1>
                    <div class="datetime">
                        <p>
                            发布时间：
                            <?php echo (date("Y-m-d H:i:s",$data["publish_time"])); ?> 
                        </p>
                    </div>
                    <div class="content">
                        <img src="/AS_Education/Public/images/test.jpg">
                            <div>
                                <p>
                                <?php echo ($data["article_content"]); ?>
                                   
                                </p>
                            </div>
                        </img>
                    </div>
                </div>
                <!--end .main-->
          </div>
            <!--end .container-->
        </div>
        <!--end .wrap-->
<div class="footer">
            <ul class="clearfix">
                <li>
                    <a href="#">
                        神格
                    </a>
                </li>
                <li>
                    <a href="#">
                        哈哈
                    </a>
                </li>
                <li>
                    <a href="#">
                        啦啦
                    </a>
                </li>
                <li>
                    <a href="#">
                        哈到时
                    </a>
                </li>
                <li>
                    <a href="#">
                        撒旦法规
                    </a>
                </li>
                <li>
                    <a href="#">
                        咖啡
                    </a>
                </li>
                <li>
                    <a href="#">
                        发票
                    </a>
                </li>
                <li>
                    <a href="#">
                        艘日方
                    </a>
                </li>
            </ul>
            <div class="more">
                <span>
                    <a href="#">
                        联系我们
                    </a>
                </span>
                <span>
                    <a href="#">
                        应用中心
                    </a>
                </span>
                <span>
                    <a href="#">
                        客服中心
                    </a>
                </span>
            </div>
            <p>
                Copyright © 澳视教育   2016.12.29
            </p>
        </div>
    </body>
      <script type="text/javascript">
            document.querySelector(".search").style.display = "none";
        </script>
</html>