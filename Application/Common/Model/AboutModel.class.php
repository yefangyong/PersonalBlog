<?php
namespace Common\Model;
use Think\Model;
use Think\Page;

class AboutModel extends Model {
    private $_db='';

    public function __construct(){
        $this->_db = M('about');
    }

    public function data() {
        return $this->_db->count();
    }

    public function getAboutList() {
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

    public function updateAboutById($data=array()) {
        return $this->_db->where('id='.$data['id'])->save($data);
    }

}