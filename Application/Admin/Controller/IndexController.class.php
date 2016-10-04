<?php
 /**
  * 后台index相关的
  */
namespace Admin\Controller;
use Org\Net\IpLocation;

class IndexController extends CommonController {

    public function index() {
        $this->display();
    }
    public function main() {
        $Ip = new IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
        $are = get_client_ip(); // 获取某个IP地址所在的位置
        $area = $Ip->getlocation($are);
        $this->assign('area',$area['country']);
        $this->aa = php_uname(); //获得服务器的详细版本
        $this->assign('aa',$this->aa);
        $this->display();
    }
}