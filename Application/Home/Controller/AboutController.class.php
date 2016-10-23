<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/23
 * Time: 21:43
 */
namespace Home\Controller;
use Think\Controller;
class AboutController extends CommonController {
    public function __construct(){
        parent::__construct();
        parent::common();
    }

    public function index() {
        $abouts = M('about')->limit(0,1)->select();
        $this->assign('abouts',$abouts);
        $this->display();
        }
}