<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/22
 * Time: 21:55
 */
namespace Admin\Controller;
use Think\Controller;
class YearController extends CommonController {
    public function index() {
        $rel = D('Year')->getYearInfo();
        $this->assign('list',$rel);
        $this->display();
    }

    public function add() {
        if($_POST) {
           if(!$_POST['year'] || !isset($_POST['year'])) {
               return show(0,'年份设置不得为空!');
           }
            if($_POST['id']) {
                return $this->save($_POST);
            }
            $rel = D('Year')->insert($_POST);
            if($rel) {
                return show(1,'添加成功!');
            }else{
                return show(0,'添加失败!');
            }
        }else{
            $this->display();
        }
    }

    public function edit() {
        $id = $_GET['id'];
        $rel = D('Year')->getYearInfoById($id);
        $this->assign('list',$rel);
        $this->display();
    }

    public function save($data) {
        $id = $_POST['id'];
        unset($_POST['id']);
        $data = $_POST;
        $rel = D('Year')->updateYearById($id,$data);
        if($rel) {
            return show(1,'更新成功!');
        }else{
            return show(1,'更新失败!');
        }
    }

    public function delete() {
        $id = $_POST['id'];
        $rel = D('Year')->deleteById($id);
        if($rel) {
            return show(1,'删除成功!');
        }else{
            return show(0,'删除失败!');
        }
    }
}