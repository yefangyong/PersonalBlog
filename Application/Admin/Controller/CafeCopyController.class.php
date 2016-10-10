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
            if(!isset($_POST['designation']) || !$_POST['designation']) {
                return show(0,'导航名称不得为空!');
            }
            if(!isset($_POST['linkaddress']) || !$_POST['linkaddress']) {
                return show(0,'连接地址不得为空!');
            }
            if($_POST['id']) {
                return $this->save($_POST);
            }
            $rel = D('CafeCopy')->insert($_POST);
            if($rel) {
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
        $id = $data['id'];
        unset($data['id']);
      $res = D('CafeCopy')->updateCafeCopyById($id,$data);
        if($res) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败!');
        }
    }

    public function edit() {
        $id = $_GET['id'];
        $rel = M('copy')->where('id='.$id)->select();
        $this->assign('list',$rel);
        $this->display();
    }


    //删除
    public function delete() {
        if(!empty($_POST)) {
            $id = $_POST['id'];
            $delete = M('copy');
            $ret = $delete->delete($id);
            if($ret) {
                return show(1,'删除成功!');
            }else{
                return show(0,'删除失败!');
            }
        }
    }
}