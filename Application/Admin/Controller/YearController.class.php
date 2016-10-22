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
}