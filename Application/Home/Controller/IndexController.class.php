<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class IndexController extends CommonController{
    public function  __construct(){
        parent::__construct();
        parent::common();
    }

    public function index() {
        $website = M('essay');
        $count = $website->where(array('power'=>0,'groom'=>0))->count();
        $Page = new Page($count,10);
        $show = $Page->show();
        $list = $website->where(array('power'=>0,'groom'=>0))->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $key => $val) {
            $list[$key]['zuozhe'] = M('admin')->where(array('id'=>$val['author']))->getField('username');
            $list[$key]['fenl'] = M('categories')->where(array('id'=>$val['cat_id']))->getField('designation');
        }
        //推荐文章
        $groom = M('essay')->where(array('power'=>0,'groom'=>0))->limit(0,10)->order('id')->field('id,title')->select();
        //最新文章
        $newessay = M('essay')->where(array('power'=>0,'groom'=>0))->limit(0,10)->order('time desc')->field('id,title')->select();
        //幻灯片
        $solid = M('solid')->where(array('power'=>0))->order('sort')->select();
        $this->assign('essay',$list);
        $this->assign('groom',$groom);
        $this->assign('newessay',$newessay);
        $this->assign('solid',$solid);
        $this->assign('page',$show);
        $this->display();
    }
}