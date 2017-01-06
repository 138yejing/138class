<?php 
namespace Admin\Model;
use Think\Model;
class UpdateModel extends Model
{
	protected $_validate = array(
		array('title','require','文章标题不能为空！'),
		array('content','require','文章内容不能为空！'),
	);
}
?>