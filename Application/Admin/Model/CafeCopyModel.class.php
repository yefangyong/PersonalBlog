<?php
namespace Admin\Model;
use Think\Model;
use Think\Page;

class CafeCopyModel extends Model {
    private $_db='';

    public function __construct(){
        $this->_db = M('copy');
    }

    public function data() {
        return $this->_db->count();
    }

    public function getCafeCopytList() {
        $Page = new Page();
        $ret = $this->_db->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        return $ret;
    }

    public function insert($data) {
        return $this->_db->add($data);
    }

    public function getAboutListById() {
        return $this->_db->where('id='.$_GET['id'])->select();
    }

    public function updateCafeCopyById($id,$data=array()) {
        return $this->_db->where('id='.$id)->save($data);
    }

}