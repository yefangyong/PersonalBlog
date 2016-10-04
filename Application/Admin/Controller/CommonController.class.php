<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

class CommonController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->init();
    }

    /**
     * 初始化代码
     */
    public function init() {
       //如果已经登录
        $isLogin = $this->isLogin();
        if(!$isLogin) {
            //跳转到登录页面
            redirect('admin.php?&c=login');
        }
    }

    /**
     * 判断是否登录了
     */
    public function isLogin() {
        $user = $this->getLoginUser();
        if($user && is_array($user)) {
            return true;
        }else {
           return false;
        }
    }

    /**
     * 获取登录用户信息
     */
    public function getLoginUser() {
        return session('adminUser');
    }
}