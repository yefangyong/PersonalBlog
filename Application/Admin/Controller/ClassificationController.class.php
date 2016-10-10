<?php
namespace Admin\Controller;
use Think\Controller;
class ClassificationController extends CommonController {
    public function index() {
        $page=$_REQUEST['p']?$_REQUEST['p']:1;
        $pagesize=$_REQUEST['pagesize']?$_REQUEST['pagesize']:3;
        $rel=D('Classification')->getClassification($page,$pagesize);
        $Count=D('Classification')->getClassificationCount();
        $res=new \Think\Page($Count,$pagesize);
        $pageRes=$res->show();
        $this->assign('page',$pageRes);
        $this->assign('list',$rel);
        $this->display();
    }

    public function add() {
        if($_POST) {
            if(!$_POST['designation'] || !isset($_POST['designation'])) {
                return show(0,'分类名称不得为空');
            }
            if($_POST['id']) {
               return  $this->save($_POST);
            }
            $rel = D('classification')->insert($_POST);
            if($rel) {
                return show(1,'新增成功!');
            }else{
                return show(0,'新增失败!');
            }
        }else{
            $this->display();
        }
    }

    public function edit() {
        $id = $_GET['id'];
        $rel = D('Classification')->getClassificationByid($id);
        $this->assign('list',$rel);
        $this->display();
    }

    public function save($data=array()) {
        $id = $data['id'];
        unset($data['id']);
        $rel = D('Classification')->UpdateClassificationById($id,$data);
        if($rel) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败!');
        }
    }

    public function delete() {
        $id = $_POST['id'];
        $rel = D('Classification')->deleteClassification($id);
        if($rel) {
            return show(1,'删除成功!');
        }else{
            return show(0,'删除失败!');
        }
    }
}

?>