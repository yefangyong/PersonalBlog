<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/23
 * Time: 9:59
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

class AxisController extends CommonController {

    public function index() {
        $rel = D('Axis');
        $count = $rel->getCount();
        $page = new Page($count,5);
        $show = $page->show();
        $list = $rel->getInfo($count);
        $this->assign('page',$show);
        $this->assign('list',$list);
        $this->display();
    }

    public function add() {
        if($_POST) {
            if(!$_POST['year_id'] || !isset($_POST['year_id'])) {
                return show(0,'请选择年份!');
            }
            if(!$_POST['title'] || !isset($_POST['title'])) {
                return show(0,'标题不得为空!');
            }
            if(!$_POST['content'] || !isset($_POST['content'])) {
                return show(0,'描述内容不得为空!');
            }
            if($_POST['id']) {
                return $this->save($_POST);
            }
            $_POST['time']=time();
            $rel = D('Axis')->insert($_POST);
            if($rel) {
                return show(1,'添加成功!');
            }else{
                return show(0,'添加失败!');
            }
        }else{
            $rel = D('Year')->getYearInfo();
            $this->assign('list',$rel);
            $this->display();
        }
    }

    public function edit() {
        $id = $_GET['id'];
        $rel = D('Year')->getYearInfo();
        $list = D('Axis')->getInfoById($id);
        $this->assign('list',$rel);
        $this->assign('lists',$list);
        $this->display();

    }

    public function save($data) {
        $id = $_POST['id'];
        $_POST['time']=time();
        unset($_POST['id']);
        $data = $_POST;
        $rel = D('Axis')->updateById($id,$data);
        if($rel) {
            return show(1,'更新成功!');
        }else{
            return show(0,'更新失败!');
        }
    }

    public function delete() {
        $id = $_POST['id'];
        $rel = D('Axis')->delete($id);
        if($rel) {
            return show(1,'删除成功!');
        }else{
            return show(0,'删除失败!');
        }
    }
}