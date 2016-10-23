<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/23
 * Time: 21:52
 */
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class PhotoController extends CommonController {
    public function __construct(){
        parent::__construct();
        parent::common();
    }
    public function index() {
        $website = M('classification');
        $count = $website->count();
        $Page = new Page($count,4);
        $show = $Page->show();
        $list = $website->order('sort')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as $key => $val) {
            $list[$key]['son'] = M('photo')->where(array('power'=>0,'groom'=>0,'photo_id'=>$val['id']))->limit(0,12)->select();
        }
        $this->assign('list',$list);
        $this->assign('page',$show);
        //推荐文章
        $this->groom = M('essay')->where(array('power'=>0,'groom'=>0))->limit(0,15)->order('id')->field('id,title')->select();
        //点击量
        $dianji['browse'] = array('EGT',10);
        $this->Clicks = M('essay')->where($dianji)->order('browse desc')->limit(0,15)->field('id,title')->select();
        //分类
        $fenlie = M('categories')->where(array('power'=>0))->order('sort')->select();
        foreach ($fenlie as $key => $val) {
            $array = array(0=>'rnav1',1=>'rnav2',2=>'rnav3',3=>'rnav4');
            $i=rand(0,3);
            $fenlie[$key]['yanse'] = $array[$i];
        }
        $this->assign('fenlie',$fenlie);
        $this->display();
    }

    public function more ($id) {
        if(!empty($id)){
            $websites = M('classification')->where(array('id'=>$id))->order('sort')->select();
            $this->assign('websites',$websites);
            $website = M('photo');
            $count = $website->where(array('photo_id'=>$websites[0]['id'],'power'=>0))->count();
            $Page = new Page($count,20);
            $show = $Page->show();
            $list = $website->where(array('photo_id'=>$websites[0]['id'],'power'=>0))->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('lists',$list);
            $this->assign('page',$show);
            //推荐文章
            $this->groom = M('essay')->where(array('power'=>0,'groom'=>0))->limit(0,15)->order('id')->field('id,title')->select();
            //点击量
            $dianji['browse'] = array('EGT',10);
            $this->Clicks = M('essay')->where($dianji)->order('browse desc')->limit(0,15)->field('id,title')->select();
            //分类
            $fenlie = M('categories')->where(array('power'=>0))->order('sort')->select();
            foreach ($fenlie as $key => $val) {
                $array = array(0=>'rnav1',1=>'rnav2',2=>'rnav3',3=>'rnav4');
                $i=rand(0,3);
                $fenlie[$key]['yanse'] = $array[$i];
            }
            $this->assign('fenlie',$fenlie);
            $this->display();
        }else{
            $this->error('ID错误',U('Home/Index/index'));
        }
    }
    public function details ($id) {
        if(!empty($id)){
            $zizeng = M('photo')->where(array('id'=>$id))->setInc('browse',1);
            //分类
            $fenlie = M('categories')->where(array('power'=>0))->order('sort')->select();
            foreach ($fenlie as $key => $val) {
                $array = array(0=>'rnav1',1=>'rnav2',2=>'rnav3',3=>'rnav4');
                $i=rand(0,3);
                $fenlie[$key]['yanse'] = $array[$i];
            }
            //点击量
            $dianji['browse'] = array('EGT',10);
            $this->Clicks = M('essay')->where($dianji)->order('browse desc')->limit(0,15)->field('id,title')->select();
            //推荐文章
            $this->groom = M('essay')->where(array('power'=>0,'groom'=>0))->limit(0,15)->order('id')->field('id,title')->select();
            $arr = M('photo')->where(array('id'=>$id))->select();
            foreach ($arr as $key => $value) {
                $arr[$key]['zuozhe'] = M('admin')->where(array('id'=>$arr[0]['user_id']))->getField('username');
            }
            $this->assign('arr',$arr);
            $this->classification = M('classification')->where(array('id'=>$arr[0]['photo_id']))->field('id,designation')->select();
            $this->assign('fenlie',$fenlie);
            $this->display();
        }else{
            $this->error('ID错误',U('Home/Index/index'));
        }
    }

}