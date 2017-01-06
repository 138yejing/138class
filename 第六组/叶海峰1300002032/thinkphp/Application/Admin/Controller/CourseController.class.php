<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\AuthController;

class CourseController extends AuthController {
    public function index(){
		$this->display();
    }
    public function add(){
    	$this->shoose();
    	$this->page();
		$this->display();
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
    public function shoose(){
    	$userD = D('user_info'); 
    	//$data['id'] = I('id');
    	$data['course'] = I('courname');
    	$userid = (int)I('user_id');
        print_r($userid);
        if ($userD->where(array('ID' => $userid))->save($data)) {
                $this->success('添加成功！',U('Home/Article/index'));
            }

       
    }
}
    