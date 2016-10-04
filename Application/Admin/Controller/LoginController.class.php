<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * use Common\Model 这块可以不需要使用，框架默认会加载里面的内容
 */

class LoginController extends Controller {
    public function index() {
        if(session('adminUser')) {
            redirect('admin.php?&c=index');
        }
        return $this->display();
    }

    public function check() {
      $username = $_POST['username'];
        $password = $_POST['password'];
        if(!trim($username)) {
            show(0,'用户名不得为空!');
        }
        if(!trim($password)) {
            show(0,'密码不得为空!');
        }
        $ret = D('Admin')->getAdminByUsername($username);
        if(!$ret) {
            show(0,'该用户不存在!');
        }
        if($ret['password'] != $password) {
            show(0,'密码错误!');
        }
        session('adminUser',$ret);
        return show(1,'登录成功');
    }

    public function loginOut() {
        session('adminUser',null);
        redirect('admin.php?c=login');
    }
}
