<?php
namespace Admin\Model;
use Think\Model;
use Think\Page;

class NavModel extends Model {
    private $_db='';

    public function __construct(){
        $this->_db = M('nav');
    }

    public function data() {
        return $this->_db->count();
    }

    public function getNavList() {
        $Page = new Page();
        $ret = $this->_db->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        return $ret;
    }

    public function insert($data) {
        return $this->_db->add($data);
    }

    public function getNavListById() {
        return $this->_db->where('id='.$_GET['id'])->select();
    }

    public function updateNavById($data=array()) {
        return $this->_db->where('id='.$data['id'])->save($data);
    }
}