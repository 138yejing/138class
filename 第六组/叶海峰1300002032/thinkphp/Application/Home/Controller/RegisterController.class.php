<?php
	namespace Home\Controller;
	use Think\Controller;

	class RegisterController extends Controller{
    	public function index(){
            $this->assign('login_username',"登陆");
            $this->assign('register',"注册");
            $this->assign('login_out',"");
            if(IS_POST){
               // print_r(I(''));die();
        		 $User = D('user_info');
             	 $data['username'] = I('username');
             	 $data['password'] = I('password');
                 $data['user_pwd_2'] = I('user_pwd_2');
            	 //if (!$data) {
            	  //	echo "test_没有数据";
            	// }else{
                    $data['create_time'] = date('y-m-d H:i:s',time());   
                    if($User->create($data)){
                	 	if($User->add($data)){ 
                           $url = 'http://'.$_SERVER['HTTP_HOST'].__APP__.'/Home/Article';
                           header("Location:$url");
                        } 	
                     }else{
                        $this->error($User->getError());
                       // echo 1;
                     }
            }
        	$this->display();
        }
    }
