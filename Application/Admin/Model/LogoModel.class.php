<?php
namespace Admin\Model;
use Think\Model;
use Think\Page;

class LogoModel extends Model {
    private $_db='';

    public function __construct(){
        $this->_db = M('logo');
    }

    public function data() {
        return $this->_db->count();
    }

    public function getLogoInfo() {
        $Page = new Page();
        $ret = $this->_db->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        return $ret;
    }

    public function insert($data) {
        return $this->_db->add($data);
    }


    public function updateLogoById($_id,$data) {
        return $this->_db->where('id='.$_id)->save($data);
    }

}