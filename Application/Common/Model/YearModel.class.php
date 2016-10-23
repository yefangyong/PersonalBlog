<?php
namespace Common\Model;
use Think\Model;
class YearModel extends  Model {
    private $_db = '';
    public function __construct() {
        $this->_db=M('year');
    }

    public function getYearInfo() {
        return $this->_db->select();
    }

    public function insert($data) {
        return $this->_db->add($data);
    }

    public function getYearInfoById($id) {
        return $this->_db->where('id='.$id)->select();
    }

    public function updateYearById($id,$data) {
        return $this->_db->where('id='.$id)->save($data);
    }

    public function deleteById($id) {
        return $this->_db->where('id='.$id)->delete();
    }
}