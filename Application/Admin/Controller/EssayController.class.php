<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class EssayController extends CommonController {
    public function index() {
        $about = D('Essay');
        $count = $about->data();
        $Page =new Page($count,10);
        $show = $Page->show();
        $list = $about->getEssayList();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function add() {
        if ($_POST) {
           if(!isset($_POST['designation']) || !$_POST['designation']) {
               return show(0,'名称不得为空!');
           }
            if(!$_POST['sort']) {
                return show(0,'排序不得为空!');
            }
            $res = D('Essay')->insert($_POST);
            if($res) {
                return show(1,'添加成功!');
            }else{
                return show(0,'添加失败!');
            }
        } else {
            $this->display();
        }
    }

    //更新
    public function save() {
        $id = $_POST['id'];
        unset($_POST['id']);
        $data = $_POST;
        $res = D('Essay')->updataEssayById($id,$data);
        if($res) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败!');
        }
    }

    //编辑
    public function edit() {
        $id = $_GET['id'];
        $list = D('Essay')->getEssayById($id);
        $this->assign('list',$list);
        $this->display();
    }

    //删除
    public function delete() {
        $id = $_POST['id'];
        $res = D('Essay')->dropEssayById($id);
        if($res) {
            return show(1,'删除成功!');
        }else{
            return show(0,'删除失败!');
        }
    }



}