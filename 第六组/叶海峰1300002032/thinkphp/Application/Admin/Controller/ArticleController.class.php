<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
use Common\Controller\AuthController;

class ArticleController extends AuthController{
	public function index(){
        $this->display();
	}
	public function add(){
		$this->display();
	}
	public function add_article(){
		if(IS_POST){
        	if ($_FILES['thumb']['size']) {
            	//print_r("11111");
                $upload = new Upload();
                $upload->maxSize  = 3145728 ;
                $upload -> autoSub = false;
                $upload->exts  = array('jpg', 'gif', 'png', 'jpeg');
                $upload->rootPath="./Public/upload/up_thumb/";
                $up=$upload->upload();

               // 2、数据表里需要保存的是路径
                $data['thumb']=str_replace('./Public/', "", $upload->rootPath).$up['thumb']['savename'];

                if(!$up) {
                	//print_r("22");
                    $this->error($upload->getError());
                }
        	}
			$data['title'] = I('add_title');
	        $data['content']=I('article_content');
	        $data['create_time']=date('y-m-d H:i:s',time());
	        $article_m=M('Article');
	        $article_m->add($data);
	        $this->success('添加成功！',U('Home/Article/index'));
	    }else{
		 $this->display();
	    }
	}
	public function edit(){
		$id=I('id');
        $ArticleM=M('Article');
        $info=$ArticleM->where("id=$id")->find();
       $this->assign('info',$info);
		$this->display();
	}
	public function update(){
        if(IS_POST){
        	if ($_FILES['thumb']['size']) {
                $upload = new Upload();
                $upload->maxSize  = 3145728 ;
                $upload -> autoSub = false;
                $upload->exts  = array('jpg', 'gif', 'png', 'jpeg');
                $upload->rootPath="./Public/upload/up_thumb/";
                $up=$upload->upload();

               // 2、数据表里需要保存的是路径
                $data['thumb']=str_replace('./Public/', "", $upload->rootPath).$up['thumb']['savename'];

                if(!$up) {
                	//print_r("22");
                    $this->error($upload->getError());
                }
        	}
			$data['title'] = I('edit_title');
	        $data['content']=I('edit_content');
	        //$data['create_time']=date('y-m-d H:i:s',time());
	        $ArticleM=M('Article');
	         $id=I('id');
        	if ($ArticleM->where(array('id' => $id))->save($data)) {
        		$this->success('修改成功！',U('Home/Article/index'));
        	}	        
	               
	    }else{
		 $this->display();
	    }
    }	
}