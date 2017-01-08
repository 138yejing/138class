<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
        $this->display();
    }

    // create by 陈锦川
    public function articleDetail(){
    	$id = I('id');
    	$m = M('article');
    	$where = "id={$id} and status=1";
    	$data = $m->where($where)->find();//查询一条语句
		$this->assign("data",$data); //
    	$this->display();
    }

    public function articleList(){
    	$m = M('article');
    	$where = "status=1";//status 表示文章是否上线的状态，1 为已发布
    	$data = $m->where($where)->select();
    	$this->assign("data",$data); //赋值
    	$this->display();
    }
}
