<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/14
 * Time: 16:31
 */
namespace Admin\Controller;
use Think\Controller;
class CacheController extends CommonController {
    public function index() {
        $this->display();
    }

    public function cache () {
        $dir=HTML_PATH.'/';
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                    unlink($dir.$file);
                }
            }
            closedir($handle);
        }
        sleep(3);
        $this->success('更新成功',U(Admin.'/Cache/index'));
    }
}