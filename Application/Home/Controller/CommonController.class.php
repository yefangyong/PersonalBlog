<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/23
 * Time: 18:46
 */
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
    public function __construct()
    {header("Content-type:text/html; charset=utf-8");
        parent::__construct();
    }
    public function common() {
        //网站关键字
        $webkey = M('key')->select();
        $web = M('website')->where(array('power'=>0))->limit(0,1)->order('id')->select();
        //友情连接
        $copy = M('copy')->where(array('power'=>0))->order('sort')->select();
        //关于我
        $about = M('about')->limit(0,1)->select();
        //导航
        $nav = M('nav')->where(array('power'=>0))->order('sort')->select();
        //LOGO
        $logo = M('logo')->where(array('power'=>0))->select();

        $this->assign('webkey',$webkey);
        $this->assign('web',$web);
        $this->assign('copy',$copy);
        $this->assign('about',$about);
        $this->assign('nav',$nav);
        $this->assign('logo',$logo);
    }
}