<?php
namespace Common\Model;
use Think\Model;
use Think\Page;

class EssayModel extends Model {
    private $_db='';

    public function __construct(){
        $this->_db = M('categories');
    }

    public function data() {
        return $this->_db->count();
    }

    public function getEssayList() {
        $res = $this->_db->select();
        return $res;
    }

    public function getEssayById($id) {
        $res = $this->_db->where('id='.$id)->select();
        return $res;
    }
    public function insert($data) {
        return $this->_db->add($data);
    }

    public function updataEssayById($id,$data) {
        return $this->_db->where('id='.$id)->save($data);
    }

    public function dropEssayById($id) {
        return $this->_db->where('id='.$id)->delete();
    }


}