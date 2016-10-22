<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/22
 * Time: 18:23
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class PhotoController extends CommonController {
    public function index() {
        $rel = D('Photo');
        $count = $rel->getPhotoCount();
        $page = new Page($count,5);
        $show = $page->show();
        $list = $rel->getPhotoInfo($count);
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
    }

    public function add() {
        if($_POST) {
           if(empty($_POST['photo_id'])) {
               return show(0,'请选择相册分类');
           }
            if(!$_POST['title'] || !isset($_POST['title'])) {
                return show(0,'标题不得为空！');
            }
            if(!isset($_POST['pic'])|| !$_POST['pic']) {
                return show(0,'上传图片不得为空!');
            }
            if(!isset($_POST['content']) || !$_POST['content']) {
                return show(0,'描述内容不得为空!');
            }
            if($_POST['id']) {
                return $this->save($_POST);
            }
            $rel = D('Photo')->insert($_POST);
            if($rel) {
                return show(1,'添加成功!');
            }else{
                return show(0,'添加失败!');
            }
        }else{
            $rel = D('Classification')->getPhotoClass();
            $this->assign('list',$rel);
            $this->display();
        }
    }

    public function ajaxuploadimage() {
        $upload = D('UploadImage');
        $res = $upload->imageUpload('photo');
        if($res === false) {
            return show(0,'图片上传失败!');
        }else{
            return show(1,'图片上传成功!',$res);
        }
    }

    public function save($data) {
        $id = $_POST['id'];
        unset($_POST['id']);
        $data = $_POST;
        $rel = D('Photo')->updatePhotoById($id,$data);
        if($rel) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败!');
        }
    }

    public function edit() {
        $rel = D('Classification')->getPhotoClass();
        $this->assign('list',$rel);
        $id = $_GET['id'];
        $rel = D('Photo')->getPhotoById($id);
        $this->assign('lists',$rel);
        $this->display();
    }

    public function delete() {
        $id = $_POST['id'];
        $rel = D('Photo')->delete($id);
        if($rel) {
            return show(1,'删除成功!');
        }else{
            return show(0,'删除失败!');
        }
    }
}