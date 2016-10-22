<?php
namespace Admin\Model;
use Think\Model;
class ClassificationModel extends Model {
    private $_db = '';
    public function __construct() {
        $this->_db = M('classification');
    }

    public function getClassification($page,$pagesize) {
        //分页功能
        $offset = ($page - 1) * $pagesize;
        $list = $this->_db->order('id desc')->limit($offset, $pagesize)->select();
        return $list;
    }

    public function getClassificationCount() {
        return $this->_db->count();
    }

    public function insert($data=array()) {
        return $this->_db->add($data);
    }

    public function getClassificationByid($id) {
        return $this->_db->where('id='.$id)->select();
    }

    public function UpdateClassificationById($id,$data) {
        return $this->_db->where('id='.$id)->save($data);
    }

    public function deleteClassification($id) {
        return $this->_db->where('id='.$id)->delete();
    }

    public function getPhotoClass() {
        return $this->_db->select();
    }
}