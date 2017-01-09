<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\AuthController;
//课程部分 叶海峰 陈建斌 林伟武 苏华生
class CourseController extends AuthController {
    public function index(){
		$this->display();
    }
    public function add(){

        $this->assign('login_out',"退出");
    	$userD = D('user_info'); 
        $userinfo = session('auth_info');
        $userid = $userinfo['id']; 
        $choose_course = $userD->field("course")->where(array('ID' => $userid))->find();      
        if ($choose_course['course'] != '') {
            //print_r($choose_course);
            $this->assign('user_course',$choose_course['course']);
            $this->page();
            $this->display();
        }else{
            $this->assign('user_course','您还没有选择课程');
            $this->page();
            $this->display();
        }
    	
    }
    public function page(){
        $CourseM = M('course'); 
        $count = $CourseM->order('id desc')->count();
        $Page = new \Think\Page($count,10);
        $Page->setConfig('header', '条数据');
        $Page->setConfig('first', '首页');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('end', '末页'); 
        $show = $Page->show();      
        $list = $CourseM->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select(); 
        $this->assign('list',$list);
        $this->assign('page',$show);
        //print_r($list);
    }
    public function choose(){
        //print_r(session('auth_info'));
        //print_r(I(''));die();
    	$userD = D('user_info'); 
    	$data = I('courname');
        $userinfo = session('auth_info');
    	$userid = $userinfo['id'];
        //print_r(array('ID' => $userid));
        //$userD->where(array('ID' => $userid))->setField('course', $data);
        $choose_course = $userD->field("course")->where(array('ID' => $userid))->find();      
        if ($choose_course['course'] != '') {
            echo "您已经添加过一门课程‘".$choose_course['course']."’，不能重复添加！";
            $this->redirect('Admin/course/add', array('cate_id' => 2), 3, '页面跳转中...');//带参数跳转
        }else{
            if ($userD->where(array('ID' => $userid))->setField('course', $data)) {
               //$this->success('添加成功！',U('course/add'),1);//看到倒数的跳转页面
               $this->redirect('Admin/course/add');//看不到跳转页面
            }
        }
               
    }
    public function choo_del()
    {
        $userD = D('user_info'); 
        $data = I('courname');
       // $data['id'] = I('id');
        //print_r($data);die();
        $userinfo = session('auth_info');
        $userid = $userinfo['id'];
        $choose_course = $userD->field("course")->where(array('ID' => $userid))->find();
        if ($choose_course['course'] != $data) {
            $this->redirect('Admin/course/add', array('cate_id' => 2), 3, '您选择的不是这个课程，无法删除！页面跳转中...');
        }else{
            if ($userD->where(array('ID' => $userid))->setField('course', null)) {
                $this->success('删除成功！',U('course/add'));
            }
        }
    }
}
    