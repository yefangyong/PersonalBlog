<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class EssaysController extends CommonController {
    public function index() {
        $about = D('Essays');
        $count = $about->data();
        $Page =new Page($count,10);
        $show = $Page->show();
        $list = $about->getEssaysList();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function ajaxuploadimage() {
        $upload = D('UploadImage');
        $res = $upload->imageUpload('essay');
        if($res) {
            return show(1,'上传成功',$res);
        }else{
            return show(0,'上传失败!');
        }
    }

    public function add() {
        if ($_POST) {
           if(!isset($_POST['cat_id']) || !$_POST['cat_id']) {
               return show(0,'请选择文章类别!');
           }
            if(!$_POST['title'] || !isset($_POST['title'])) {
                return show(0,'标题不得为空!');
            }
            if(!$_POST['keyword'] || !isset($_POST['keyword'])) {
                return show(0,'关键词不得为空!');
            }
            if(!$_POST['description'] || !isset($_POST['description'])) {
                return show(0,'关键词描述不得为空!');
            }
            if(!$_POST['content'] || !isset($_POST['content'])) {
                return show(0,'详情不得为空!');
            }
            $res = D('Essays')->insert($_POST);
            if($res) {
                return show(1,'添加成功!');
            }else{
                return show(0,'添加失败!');
            }
        } else {
            $list = D('Essay')->getEssayList();
            $this->assign('list',$list);
            $this->display();
        }
    }

    //更新
    public function save() {
        $id = $_POST['id'];
        unset($_POST['id']);
        $data = $_POST;
        $res = D('Essays')->updataEssaysById($id,$data);
        if($res) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败!');
        }
    }

    //编辑
    public function edit() {
        $id = $_GET['id'];
        $lists = D('Essays')->getEssaysById($id);
        $this->assign('lists',$lists);
        $this->display();
    }

    //删除
    public function delete() {
        $id = $_POST['id'];
        $res = D('Essays')->dropEssaysById($id);
        if($res) {
            return show(1,'删除成功!');
        }else{
            return show(0,'删除失败!');
        }
    }



}