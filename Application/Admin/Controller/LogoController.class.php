<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
use Think\Upload;

class LogoController extends Controller {
    public function index() {
        $logo = D('Logo');
        $count = $logo->data();
        $Page = new Page($count,10);
        $show = $Page->show();
        $list = $logo->getLogoInfo();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    public function add() {
        if ($_POST) {
                $this->insert($_POST);
        } else {
            $this->display();
        }
    }

    public function insert($data) {
        $res = M('logo')->add($data);
        if($res) {
            return show(1,'添加成功!');
        }else{
            return show(0,'添加失败!');
        }
    }

    public function edit() {
        $list = M('logo')->where('id='.$_GET['id'])->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function save() {
        $id = $_POST['id'];
        unset($_POST['id']);
        $res = M('Logo')->where('id='.$id)->save($_POST);
        if($res === false) {
            return  show(0,'更新失败!');
        }else{
            return  show(1,'更新成功!');
        }
    }

//    public function upload() {
//        $upload = new Upload();
//        $upload->maxSize =  3145728; //设置文件的大小
//        $upload->exts = array('jpg','gif','png','jpeg'); //设置文件上传类型
//        $upload->savePath = './Uploads/logo/';   //设置附件上传目录
//        //上传文件
//        $info = $upload->upload();
//        if(!$info) {
//            show(0,$upload->getError());
//        }else{
//            show(1,'图片上传成功!');
//        }
//
//    }
     public function ajaxuploadimage() {
         $upload = D('UploadImage');
         $res = $upload->imageUpload('logo');
         if($res === false) {
             return show(0,'图片上传失败!');
         }else{
             return show(1,'图片上传成功!',$res);
         }
     }

    public function delete() {
        if(!empty($_POST)) {
            $id = $_POST['id'];
            $res = M('logo')->delete($id);
            if($res) {
                return show(1,'删除成功!');
            }else {
                return show(0,'删除失败！');
            }
        }
    }
}