<?php 
namespace Home\Controller;
use Think\Controller;
use Common\Controller\AuthController;
//课程部分 叶海峰 陈建斌 林伟武 苏华生
class ArticleController extends AuthController{
	public function index(){
        $id = I('id');
        $this->assign('login_username',"");
        $this->assign('register',"");
        $this->assign('login_out',"退出");
        $this->assign('user_id',$id);
        //print_r($id);
        if (I('do')=='search') {
            $ArticleM = M('Article'); 
            $count = $ArticleM->order('id desc')->count();
            $Page = new \Think\Page($count,10);
            $Page->setConfig('header', '条数据');
            $Page->setConfig('first', '首页');
            $Page->setConfig('prev', '上一页');
            $Page->setConfig('next', '下一页');
            $Page->setConfig('end', '末页'); 
            $show = $Page->show(); 
            $keyword=trim(I('keywrod'));     
            $list = $ArticleM->where("title like '%$keyword%'")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select(); 
            if ($list != '') {
                $this->assign('list',$list);
                $this->assign('page',$show);
            }else{
                print_r( '没有找到相关的的文章！');
            }
            
           
 
        }else{
            $this->page();
        }
    	
        $this->display();
    }
    public function page(){
        $ArticleM = M('Article'); 
        $count = $ArticleM->order('id desc')->count();
        $Page = new \Think\Page($count,10);
        $Page->setConfig('header', '条数据');
        $Page->setConfig('first', '首页');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('end', '末页'); 
        $show = $Page->show();      
        $list = $ArticleM->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select(); 
        $this->assign('list',$list);
        $this->assign('page',$show);
    }
    public function detailed(){
        $id=I('id');
        // 查询一条信息
        $ArticleM=M('Article');
        $info=$ArticleM->where("id=$id")->find();
        // echo $article_m->getLastSql();
       
       $this->assign('info',$info);
       $this->display();
    }
    public function add()
    {
        $this->redirect('Admin/Article/add');
    }

    public function edit()
    {
    	
    }
    public function del()
    {
    	$id = I('id');
        $ArticleM=M('Article');
        $info=$ArticleM->where("id=$id")->delete();
        $this->redirect('Article/index');
    }
}