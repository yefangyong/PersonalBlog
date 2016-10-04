<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class NavController extends CommonController {
    public function index() {
        $nav = D('Nav');
        $count = $nav->data();
        $Page =new Page($count,10);
        $show = $Page->show();
        $list = $nav->getNavList();
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
                return show(0,'链接地址不得为空!');
            }
            if(!isset($_POST['sort']) || !$_POST['sort']) {
                return show(0,'排序号不得为空!');
            }
            if($_POST['id']) {
                return $this->save($_POST);
            }
            $navID = D('Nav')->insert($_POST);
            if($navID) {
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
      $res = D('Nav')->updateNavById($data);
        if($res) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败!');
        }
    }

    //修改
    public function edit() {
        $list = D('Nav')->getNavListById();
        $this->assign('list',$list);
        $this->assign('type','导航信息');
        $this->display();
    }

    //删除
    public function delete() {
        if(!empty($_POST)) {
            $id = $_POST['id'];
            $delete = M('nav');
            $ret = $delete->delete($id);
            if($ret) {
                return show(1,'删除成功!');
            }else{
                return show(0,'删除失败!');
            }
        }
    }
}