<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->assign('login_username',"登陆");
        $this->assign('register',"注册");
        $this->assign('login_out',"");
		$this->display();
    }
    
     public function login_do(){
        $username=I("username");
        $password=I("password");
        //?
        $userD=D('user_info');
        $info=$userD->where("username='$username' and password='$password'")->find();
       if (empty($info)) {
           $this->error('用户名或密码错误',U('Login/index'));
       }else{

         // session怎么保存信息？
        session("auth_info",$info);
        $this->success('登录成功！',U('Article/index',array('username'=>$username,'register'=>"设置",'id'=>$info['id'])));
       }
    }
    public function login_out()
    {
      
        session('auth_info',null);
        $this->success('退出成功！',U('Index/index'));
    }
}
    

