<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/23
 * Time: 21:24
 */
namespace Home\Controller;
use Think\Controller;
class DiaryController extends CommonController {
    public function __construct(){
        parent::__construct();
        parent::common();
    }

    public function index() {
        //点击量
        $dianji['browse'] = array('EGT',10);
        $this->Clicks = M('essay')->where($dianji)->order('browse desc')->limit(0,15)->field('id,title')->select();
        //推荐文章
        $this->groom = M('essay')->where(array('power'=>0,'groom'=>0))->limit(0,15)->order('id')->field('id,title')->select();
        //分类
        $fenlie = M('year')->where(array('power'=>0))->order('id desc')->select();
        foreach ($fenlie as $key => $val) {
            $array = array(0=>'rnav1',1=>'rnav2',2=>'rnav3',3=>'rnav4');
            $i=rand(0,3);
            $fenlie[$key]['yanse'] = $array[$i];
        }
        $year = M('year')->where(array('power'=>0))->order('id desc')->select();
        foreach ($year as $key => $val) {
            $year[$key]['son'] = M('axis')->where(array('year_id'=>$val['id']))->order('time desc')->select();
        }
        $this->assign('year',$year);
        $this->assign('fenlie',$fenlie);
        $this->display();
    }
}