<?php
namespace Common\Model;
use Think\Model;
use Think\Page;

class SlideModel extends Model {
    private $_db='';

    public function __construct(){
        $this->_db = M('solid');
    }

    public function data() {
        return $this->_db->count();
    }

    public function getSlideList() {
        $Page = new Page();
        $ret = $this->_db->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        return $ret;
    }

    public function addSlideInfo($data) {
        return $this->_db->add($data);
    }


    public function getSlideListById() {
        return $this->_db->where('id='.$_GET['id'])->select();
    }

    public function updateSlide($id,$data) {
        return $this->_db->where('id='.$id)->save($data);
    }

    public function deleteSlide($id) {
        return $this->_db->where('id='.$id)->delete();
    }

    public function updateNavById($data=array()) {
        return $this->_db->where('id='.$data['id'])->save($data);
    }
}