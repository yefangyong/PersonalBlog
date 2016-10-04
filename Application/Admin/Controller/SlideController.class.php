<?php
namespace Admin\Controller;
use Think\Controller;
class SlideController extends Controller
{
    public function index()
    {
        $list = D('Slide')->getSlideList();
        $this->assign('list', $list);
        $this->display();
    }

    public function add(){
        if ($_POST) {
            if(!isset($_POST['title'])||!$_POST['title']) {
                return show(0,'标题不得为空!');
            }
            if(!isset($_POST['character'])|| !$_POST['character']){
                return show(0,'描述不得为空!');
            }
            if(!$_POST['pic']) {
                return show(0,'上传图片不得为空!');
            }
            if($_POST['id']) {
                return $this->save($_POST);
            }
            $res = D('Slide')->addSlideInfo($_POST);
            if($res) {
                return show(1,'添加成功!');
            }else{
                return show(0,'添加失败!');
            }
      } else {
        $this->display();
        }
    }

    //图片异步上传
    public function ajaxuploadimage() {
        $upload = D('UploadImage');
        $res = $upload->imageUpload('solid');
        if($res === false) {
            return show(0,'图片上传失败');
        }else{
            return show(1,'图片上传成功',$res);
        }
    }

    //编辑
    public function edit() {
        $list = D('Slide')->getSlideListById();
        $this->assign('list',$list);
        $this->display();
    }
    //更新
    public function save(){
        $data = $_POST;
        $id = $_POST['id'];
        unset($data['id']);
        $res = D('Slide')->updateSlide($id,$data);
        if($res) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败');
        }
    }

    public function delete() {
        $res = D('Slide')->deleteSlide($_POST['id']);
        if($res) {
            return show(1,'删除成功');
        }else{
            return show(0,'删除失败');
        }
    }

}