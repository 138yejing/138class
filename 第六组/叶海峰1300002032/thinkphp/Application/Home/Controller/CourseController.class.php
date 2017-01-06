<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\AuthController;

class CourseController extends AuthController {
    public function index(){
    	$this->assign('login_username',"");
        $this->assign('register',"");
        $this->assign('login_out',"退出");
		$this->display();
    }
}
    

