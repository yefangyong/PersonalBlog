<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/26
 * Time: 13:18
 */
namespace Home\Controller;
use Think\Controller;
class NewsController extends CommonController {
    public function __construct() {
        parent::__construct();
        parent::common();
    }

    public function index ($id) {
        $arr = M('essay')->where(array('id'=>$id))->setInc('browse',1);
        if(!empty($id)){
            $list = M('essay')->where(array('id'=>$id))->select();
            foreach ($list as $key => $val) {
                $list[$key]['zuozhe'] = M('admin')->where(array('id'=>$val['author']))->getField('username');
                $list[$key]['fenl'] = M('categories')->where(array('id'=>$val['cat_id']))->getField('designation');
                //相关文章
                $this->interfix = M('essay')->where(array('cat_id'=>$val['cat_id']))->field('id,title')->limit(0,10)->select();
            }
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
            //上一篇
            $this->prev = M('essay')->where(array('id'=>$id-1))->field('id,title')->select();
            //下一篇
            $this->next = M('essay')->where(array('id'=>$id+1))->field('id,title')->select();
            $this->assign('fenlie',$fenlie);
            $this->assign('list',$list);
            $this->display();
        }else{
            $this->error('参数错误',U('Home/Index/index'));
        }
    }
}