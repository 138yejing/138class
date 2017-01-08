<!DOCTYPE html>
<html lang="zh-CN">
	<?php
		global $subhead_map;
		$subhead_map = array('my_settings'=>'——资料设置', 'my_courses'=>'——我的课程', 'my_communities'=>'——我的社区');
		//确定副标题
		foreach($subhead_map as $k => $v ){
			if (isset($_GET[$k])) {
				$_SESSION['subhead'] = $v;
				break;
			} 
		}
		$_SESSION['html_head_titile'] = '用户中心';
		include "html_head.php";
	?>

	<body>
		<?php include "header.php"; ?>

		<div class="row center" style="min-height: 430px; margin:0;">
			<!-- 页面公共中层 -->
			<?php 
				include "navigator.php";
				include "main.php";
			?>
		</div>

		<?php include "footer.php";	?>
	</body>
</html>