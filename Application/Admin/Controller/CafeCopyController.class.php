<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class CafeCopyController extends CommonController {
    public function index() {
        $about = D('CafeCopy');
        $count = $about->data();
        $Page =new Page($count,10);
        $show = $Page->show();
        $list = $about->getCafeCopytList();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    //添加
    public function add() {
        if ($_POST) {
            if(!isset($_POST['pic']) || !$_POST['pic']) {
                return show(0,'上传图片不得为空!');
            }

            if(!isset($_POST['depict']) || !$_POST['depict']) {
                return show(0,'描述不得为空!');
            }
            if(!isset($_POST['ydepict']) || !$_POST['ydepict']) {
                return show(0,'英文描述不得为空!');
            }
            if(!isset($_POST['names']) || !$_POST['names']) {
                return show(0,'网名不得为空!');
            }
            if(!isset($_POST['occupation']) || !$_POST['occupation']) {
                return show(0,'职业描述不得为空!');
            }
            if(!isset($_POST['place']) || !$_POST['place']) {
                return show(0,'籍贯不得为空!');
            }
            if(!isset($_POST['tel']) || !$_POST['tel']) {
                return show(0,'电话不得为空!');
            }
            if(!isset($_POST['email']) || !$_POST['email']) {
                return show(0,'email不得为空!');
            }
            if(!isset($_POST['content']) || !$_POST['content']) {
                return show(0,'详细内容不得为空!');
            }
            if($_POST['id']) {
                return $this->save($_POST);
            }
            $aboutId = D('About')->insert($_POST);
            if($aboutId) {
                return show(1,'新增成功!');
            }else{
                return show(0,'新增失败!');
            }
        } else {
            $this->display();
        }

    }

    //更新
    public function save($data=array()) {
      $res = D('About')->updateAboutById($data);
        if($res) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败!');
        }
    }

    //修改
    public function edit() {
        $list = D('About')->getAboutListById();
        $this->assign('list',$list);
        $this->assign('type','关于我');
        $this->display();
    }

    //删除
    public function delete() {
        if(!empty($_POST)) {
            $id = $_POST['id'];
            $delete = M('about');
            $ret = $delete->delete($id);
            if($ret) {
                return show(1,'删除成功!');
            }else{
                return show(0,'删除失败!');
            }
        }
    }
}