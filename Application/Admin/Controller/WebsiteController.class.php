<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;
use Think\Page;
class WebsiteController extends CommonController {
    public function index() {
        $website = D('Website');
        $count = $website->data();   //总记录数
        $Page = new \Think\Page($count,10); //实例化分页类，传入总记录数，和每页显示条数
        $show = $Page->show();       //分页显示输出
        $list = $website->getList(); //取得数据集
        $this->assign('list',$list); //赋值数据集
        $this->assign('page',$show); //赋值分页输出
        $this->display();
    }

    public function edit() {
        $website = D('Website');
        $list = $website->getWebsiteInfo();
        $this->assign('type','网站信息');
        $this->assign('list',$list);
        $this->display();
    }

    public function save() {
      $websiteId = $_POST['id'];
        //注意id不能更新，所以要把id释放掉
        unset($_POST['id']);
        try{
            $id = D('Website')->updataByWebsiteId($websiteId,$_POST);
            if($id == false) {
                return show(0,'更新失败');
            }
            return show(1,'更新成功');
        }catch (Exception $e) {
            return show(0,$e->getMessage());
        }

    }
}
