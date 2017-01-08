<?php 
namespace Common\Controller;
use Think\Controller;
use Think\Auth;

	class AuthController extends Controller
		{
			public function _initialize(){
				$username = session('auth_info');
				//print_r($username);
				// //必须登录
				if(empty($username)){
				// 	//没有登录
				$this->error('请登录您的账户！',U('Login/index'));
				 }
			}
		}




?>