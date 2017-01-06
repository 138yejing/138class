<?php 
namespace Home\Model;
use Think\Model;
class UserInfoModel extends Model
{
	protected $_validate = array(
		array('username','require','用户名不能为空！'),
		array('username','','用户名已存在！','3','unique'),
		array('password','require','密码不能为空！'),
		array('password','3,18','密码不能少于6位，且不能多于18位',3,'length'),
		array('user_pwd_2','password','两个密码不一样',0,'confirm'),
		 // 验证确认密码是否和密码一致
	);
}
?>
