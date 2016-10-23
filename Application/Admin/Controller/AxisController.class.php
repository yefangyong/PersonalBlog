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
}