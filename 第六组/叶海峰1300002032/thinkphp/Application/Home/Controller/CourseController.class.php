<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\AuthController;
//课程部分 叶海峰 陈建斌 林伟武 苏华生
class CourseController extends AuthController {
    public function index(){
    	$this->assign('login_username',"");
        $this->assign('register',"");
        $this->assign('login_out',"退出");
 		//根据用户信息查找出他的课程属于什么类别
        $userinfo = session('auth_info');      
        $courseD = D('course');
        $My_Cour = $courseD->field('Cour')->where(array('CourName'=>$userinfo['course']))->find();
        $this->assign('my_cour',$My_Cour['cour']);
        //根据类别查找出所有相关课程
        $MyCourse = $courseD->field('CourName,CliRate,id')->where(array('Cour'=>$My_Cour['cour']))->select();
        $this->assign('list',$MyCourse);
        //print_r($MyCourse);
        //die();
        $userss = D('user_info')->field('username')->where("status!=0")->select();
        $this->assign('users',$userss);

		$this->display();
    }
    public function video()
    {
    	$this->assign('login_username',"");
        $this->assign('register',"");
        $this->assign('login_out',"退出");

        $data = I('id');   
        $courseD = D('course');
        $My_Video = $courseD->where(array('id'=>$data))->find();
        $a = $My_Video['clirate'] + 1;
        $courseD->where(array('id'=>$data))->setField('CliRate',$a);
        //print_r($My_Video);
        $this->assign('video',$My_Video);
        //print_r($My_Video); 
        //      
    	$this->display();
		    	//    $result = $courseD->where("id>0")->setField('VideoSrc','ZhfLoR0WjmU');
		     //    if($result !== false){
			    //     echo '数据更新成功！';
				   //  }else{
				   //      echo '没更新任何数据！';
			    // }
		     //    die();
    }
}
    

