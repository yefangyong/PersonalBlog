<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class KeywordsController extends CommonController {
   public function index() {
       $list = D('Key')->getKeyList();
       $this->assign('list',$list);
       $this->display();
   }

    public function add() {
        if($_POST) {
            if(!$_POST['id']){
                $res = D('Key')->addKeywords($_POST);
                if($res) {
                    return show(1,'添加成功!');
                }else{
                    return show(0,'添加失败!');
                }
            }else{
                return 123;
            }
        }else{
            return show(0,'非法操作!');
        }
    }

    public function save() {
        $id = $_POST['id'];
        unset($_POST['id']);
        $data = $_POST;
        $res = D('Key')->updataKey($id,$data);
        if($res) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败!');
        }
    }
}