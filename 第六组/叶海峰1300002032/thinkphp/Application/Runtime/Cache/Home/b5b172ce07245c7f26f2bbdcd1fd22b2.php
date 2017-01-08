<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($info['title']); ?></title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3_full/Public/bootstrap-3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/thinkphp_3.2.3_full/Public/bootstrap-3.3.7/css/bootstrap.min.css">  
</head>
<body>		
	<div class="container">
    <h1><?php echo ($info['title']); ?></h1>
    <div class="time_box">上传时间：<?php echo (date("Y-m-d H:i:s",$info['create_time'])); ?></div>
    <div class="row">
    <div>缩略图:</div>
    <div class="img-thumbnail"><img src="/thinkphp_3.2.3_full/Public/<?php echo ($info['thumb']); ?>" ></div>
    <div>文章内容：</div>
    <?php echo htmlspecialchars_decode($info['content']); ?>
    </div>
  </div>
</body>
</html>