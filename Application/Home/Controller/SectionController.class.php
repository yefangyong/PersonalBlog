<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/26
 * Time: 13:27
 */
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class SectionController extends CommonController {
    public function __construct() {
        parent::__construct();
        parent::common();
    }

    public function index ($id) {
        if(!empty($id)){
            $this->navname = M('categories')->where(array('id'=>$id))->field('id,designation')->select();
            $website = M('essay');
            $count = $website->where(array('power'=>0,'cat_id'=>$id))->count();
            $Page = new Page($count,10);
            $show = $Page->show();
            $list = $website->where(array('power'=>0,'cat_id'=>$id))->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            foreach ($list as $key => $val) {
                $list[$key]['zuozhe'] = M('admin')->where(array('id'=>$val['author']))->getField('username');
                $list[$key]['fenl'] = M('categories')->where(array('id'=>$val['cat_id']))->getField('designation');
            }
            //点击量
            $dianji['browse'] = array('EGT',10);
            $this->Clicks = M('essay')->where($dianji)->order('browse desc')->limit(0,15)->field('id,title')->select();
            //推荐文章
            $this->groom = M('essay')->where(array('power'=>0,'groom'=>0))->limit(0,15)->order('id')->field('id,title')->select();
            //分类
            $fenlie = M('categories')->where(array('power'=>0))->order('sort')->select();
            foreach ($fenlie as $key => $val) {
                $array = array(0=>'rnav1',1=>'rnav2',2=>'rnav3',3=>'rnav4');
                $i=rand(0,3);
                $fenlie[$key]['yanse'] = $array[$i];
            }
            $this->assign('essay',$list);
            $this->assign('page',$show);
            $this->assign('fenlie',$fenlie);
            $this->display();
        }else{
            $this->error('ID错误',U('Home/Index/index'));
        }
    }
}