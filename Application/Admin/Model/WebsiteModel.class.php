<?php
namespace Admin\Model;
use Think\Model;
use Think\Page;

class WebsiteModel extends Model {
    private $_db='';

    public function __construct(){
        $this->_db = M('website');
    }

    public function data() {
        return $this->_db->count();
    }

    public function getList() {
        $Page = new Page();
        $ret = $this->_db->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        return $ret;
    }

    public function getWebsiteInfo() {
        $ret = $this->_db->where(array('id'=>$_GET['id']))->select();
        return $ret;
    }

    public function updataByWebsiteId($id,$data) {
        return $this->_db->where('id='.$id)->save($data);
    }

}