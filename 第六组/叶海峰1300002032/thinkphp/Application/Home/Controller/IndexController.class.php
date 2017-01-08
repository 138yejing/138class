<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->assign('login_username',"登陆");
        $this->assign('register',"注册");
        $this->assign('login_out',"");
		$this->display();
    }
}